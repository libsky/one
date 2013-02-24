<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public $template = 'basic';
	
	public function action_index()
	{
            $this->template->content =  View::factory('home');
	}

}
