<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller_Template {

	public $template = 'basic';
	
	public function action_index()
	{
		$auth = Auth::instance();
		$data = array();
                		
		if($auth->logged_in())
		{
			Request::initial()->redirect('');
		}
		else
		{
			if(isset($_POST['btnsubmit']))
			{
				$login = Arr::get($_POST, 'login', '');
				$password = Arr::get($_POST, 'password', '');
				
				if($auth->login($login, $password))
				{			
					$session = Session::instance();
					$auth_redirect = $session->get('auth_redirect', '');
					$session->delete('auth_redirect');
					
					Request::initial()->redirect($auth_redirect);
				}
				else
				{
					$data["error"] = "";
				}
			}
		}
		$this->template->content =  View::factory('authview', $data);
                               
	}

	public function action_form()
	{
		//Закрываем доступ к контроллеру первичным зарпосам
		if($this->request->is_initial())
		{
			throw new HTTP_Exception_404('File not found!');
		}

		$this->auto_render = FALSE; //не использовать главный шаблон вида "bacis"

		$auth = Auth::instance();
		if($auth->logged_in('admin'))
		{
			$this->response->body(View::factory('authformlogoutview'));
		}
		else
		{
			$this->response->body(View::factory('authformloginview'));
		}
                  
	}

	public function action_reg()
	{
		$data = array();
		
		if(isset($_POST['btnsubmit']))
		{
			$email = Arr::get($_POST, 'email', '');
			$regcodevalue = Arr::get($_POST, 'regcodevalue', '');

			$register = new Model_Register();
			if($register->reg($email, $regcodevalue, 1))
			{				
				$data["regok"] = "";
			}
			else
			{
				$data["errors"] = $register->errors;
			}		
		}
		
		$this->template->content =  View::factory('regview', $data);
	}
	
	public function action_hpass()
	{
		$auth = Auth::instance();
		$this->template->content = $auth->hash_password('admin');
	}
	
	public function action_logout()
	{
		$auth = Auth::instance();
		$auth->logout();
		$this->template->content = "Разлогинились";
	}

        public function action_hochuvspomnit()
	{
            $data = array();

            if(isset($_POST['btnsubmit']))
            {

                $email = Arr::get($_POST, 'email', '');

                $register = new Model_Register();

                if($register->hochuNoviyParol($email))
                {
                    $data["ok"] = "";
                }
                else
                {
                    $data["error"] = "";
                }
            }
            $this->template->content =  View::factory('rempassview', $data);
        }

        public function action_checkcode()
         {
            $data = array();
            $code = $this->request->param('id');
            $register = new Model_Register();

            if($register->obnovlenieparolia($code))
            {
                $data["ok"] = "";
            }
            else
            {
                $data["error"] = "";
            }
             $this->template->content =  View::factory('checkcodeview', $data);
         }
         
         
        
} // End Welcome
