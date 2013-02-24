<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Page extends Mycontroller{

	public $template = 'basic';
	
	public function action_index()
	{
		$this->template->content =  View::factory('pageview');
	}

}
