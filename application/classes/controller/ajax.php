<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {

	public function action_emailunique()
	{
		$email = Arr::get($_POST, 'email', '');
		
		$myuser = new Model_Myuser();
		$res = $myuser->username_unique($email);
		
		echo json_encode(array('result' => $res));
	}
	
	public function action_checkOldPass()
	{
		$oldpass = Arr::get($_POST, 'oldpass', '');

		$myuser = new Model_Myuser();
		$res = $myuser->checkOldPass($oldpass);

		echo json_encode(array('result' => $res));
	}
	
}