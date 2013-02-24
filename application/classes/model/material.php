<?php defined('SYSPATH') or die('No direct script access.');

class Model_Material extends ORM
{	
	protected $_created_column = array('column' => 'ctime', 'format' => TRUE);
	protected $_updated_column = array('column' => 'mtime', 'format' => TRUE);


	protected $_belongs_to = array(
		'tree' => array(
			'foreign_key' => 'category_id',
		),
	);

	protected $_has_many = array(
		'tag' => array(
			'through' => 'tags_materials',
		),
	);


	public function getMaterialsByCategory($category_id)
	{
		return DB::select()
			->from('materials')
			->where('category_id', '=', $category_id)
			->execute()
			->as_array();
	}
	
	public function addMaterial($categoryId, $content)
	{
		$this->category_id = $categoryId;
		$this->content = Security::xss_clean($content);
		$this->save();
	}

	public function showMaterialById($id)
	{
		 $material = ORM::factory('material', array('id'=>$id));

		 if($material->loaded())
		 {
			$res = $material->tag->find_all();

			foreach($res as $item)
			{
				$taginfo[] = array('name' => $item->name);
			}

			$result['content'] = $material->content;
			$result['name'] = $material->name;
			$result['category'] = $material->tree->name;
			$result['tag'] = $taginfo;

			return $result;
		 }
		 else
		 {
			return FALSE;
		 }
	}

}