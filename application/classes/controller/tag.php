<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tag extends Mycontroller
{
	public $template = 'basic';
	
	public function action_showtag()
	{
		$url = $this->request->param('id');
		
		$data = array();
		
		$tag = new Model_Tag();

		$data['tag'] = $tag->tagInfoByUrl($url);
		if(!$data['tag'])
		{
			throw new HTTP_Exception_404('Запрашиваемый тег не найден!');
			return;
		}

		$data['materials'] = $tag->contentTagById($data['tag']['id']);
		$this->template->content =  View::factory('tagview', $data);
	}

	public function action_relationships()
	{
		$tagValue = $this->request->param('id');

		$material = ORM::factory('material', array('id'=>1));

		$result = $material->has('tag', $tagValue);

		if($result)
		{
			$material->remove('tag', $tagValue);
		}
		else
		{
			$material->add('tag', $tagValue);
		}

		var_dump($result);
		exit;
	}
}