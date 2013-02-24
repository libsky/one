<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tag extends ORM
{

	protected $_has_many = array(
		'material' => array(
			'model'   => 'material',
			'through' => 'tags_materials',
			'foreign_key' => 'tag_id',
			'far_key' => 'material_id',
		),
	);
	
	public function tagInfoByUrl($url)
	{
		$tree = ORM::factory('tag', array('url'=>$url));

		if($tree->loaded())
		{
			$result['id'] = $tree->id;
			$result['name'] = $tree->name;
			
			return $result;
		}
		else
		{
			return FALSE;
		}
	}

	public function contentTagById($id)
	{
		$tag = ORM::factory('tag', array('id'=>$id));

		if($tag->loaded())
		{
			$result = array();
			$res = $tag->material->find_all();

			foreach($res as $item)
			{
				$result[] = array('id' => $item->id, 'content' => $item->content, 'name' => $item->name);
			}
			return $result;
		}
		else
		{
			return FALSE;
		}
	}
	
}