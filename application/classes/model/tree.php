<?php defined('SYSPATH') or die('No direct script access.');

class Model_Tree extends ORM
{
	protected $_table_name = 'tree';

	protected $_has_many = array(
		'materials' => array(
			'model'       => 'material',
			'foreign_key' => 'category_id',
		),
	);

	public function categoryInfoByUrl($url)
	{
		$tree = ORM::factory('tree', array('url'=>$url));

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

	public function contentСategoryById($id)
	{
		$tree = ORM::factory('tree', array('id'=>$id));

		if($tree->loaded())
		{
			$result = array();
			$res = $tree->materials->find_all();

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