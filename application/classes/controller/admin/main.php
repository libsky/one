<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Main extends Mycontrolleradmin
{
	public $template = 'basic';
	
    public function action_index()
	{
		$category = new Model_Category('tree');
		$data['categories'] = $category->getTree();
		
		if(isset($_POST['btnsubmit']))
		{
			$categoryName = Arr::get($_POST, 'categoryName', '');
			$parentId = Arr::get($_POST, 'parentId', '');
			$url = Arr::get($_POST, 'url', '');

			$res = $category->catInsert($parentId, array('name'=>$categoryName, 'url'=>$url));               

			if($res)
			{
				Request::initial()->redirect('admin');
			}
			else
			{
				$data['errors'] = $category->getErrors();
			}
		}
		
		if(isset($_POST['materialsavebtn']))
		{
			$categoryId = Arr::get($_POST, 'categoryId', '');
			$content = Arr::get($_POST, 'content', '');

			$material = ORM::factory('material');	
			$material->addMaterial($categoryId, $content);
			
			Request::initial()->redirect('admin');
		}
		
		$this->template->content =  View::factory('adminview', $data);
	}

}
