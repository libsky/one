<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Account extends Mycontrollerlogin {

	public $template = 'basic';

	public function action_index()
	{
		$data = array();
		$myuser = new Model_Myuser();
		$data['username'] = $myuser->displayusername();

		if(isset($_POST['btnsubmit']))
		{
			$oldpass = Arr::get($_POST, 'oldpass', '');
			$newpass1 = Arr::get($_POST, 'newpass1', '');
			$newpass2 = Arr::get($_POST, 'newpass2', '');

			if($myuser->saveNewPass($oldpass, $newpass1, $newpass2))
			{
				$data['newpassok'] = '';
			}
			else
			{
				$data['errors'] = $myuser->getErrors();
			}
		}
		$this->template->content =  View::factory('accountview', $data);
	}

}
