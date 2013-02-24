<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Test extends Controller {

	public function action_index()
	{
		$this->response->body('con test!');
	}

} 
