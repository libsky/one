<?php defined('SYSPATH') or die('No direct script access.');

class Model_Myuser extends ORM 
{

	protected $_table_name = 'users';
	protected $errors = array();

	public function rules()
	{
			return array(
				'username' => array(
				array('not_empty'),
				array('email'),
				array(array($this, 'username_unique')),
				),
			);    
	}
	
	public function username_unique($username)
	{
            $db = Database::instance();

            if ($this->id)
            {
                $query =
                    'SELECT id
                    FROM users
                    WHERE id != '.$this->id.' AND username = '.$db->escape($username);
            }
            else
            {
                $query =
                    'SELECT id
                    FROM users
                    WHERE username = '.$db->escape($username);
            }

            $result = $db->query(Database::SELECT, $query, FALSE)->as_array();
            if (count($result) > 0)
            {
                    return FALSE;
            }
            else
            {
                    return TRUE;
            }
	}
	
	public function displayusername()
	{
		$auth = Auth::instance();
		$userId = $auth->get_user();

		$usertemp = ORM::factory('myuser', array('id'=>$userId));

		return $usertemp->username;
	}

	public function checkOldPass($oldpass)
	{
		$auth = Auth::instance();
		return $auth->check_password($oldpass);
	}

	public function saveNewPass($oldpass, $newpass1, $newpass2)
	{
		$vData = array("oldpass" => $oldpass, "newpass1" => $newpass1, "newpass2" => $newpass2,);

		$validation = Validation::factory($vData);
        $validation->rule('oldpass', 'not_empty');
        $validation->rule('oldpass', 'alpha_numeric');
		$validation->rule('oldpass', array($this, 'checkOldPass'));
		$validation->rule('newpass1', 'not_empty');
        $validation->rule('newpass1', 'alpha_numeric');
		$validation->rule('newpass1', 'matches', array(':validation', 'newpass1', 'newpass2'));

		if(!$validation->check())
        {
			$this->errors = $validation->errors('catErrors');
			return FALSE;
        }

		$auth = Auth::instance();
		$userId = $auth->get_user();
		
		$usertemp = ORM::factory('myuser', array('id'=>$userId));
		$usertemp->password = $auth->hash_password($newpass1);
		$usertemp->save();

		return TRUE;
	}

	public function getErrors()
    {
        return $this->errors;
    }

}
