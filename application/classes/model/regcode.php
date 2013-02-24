<?php defined('SYSPATH') or die('No direct script access.');

class Model_Regcode extends ORM 
{
	public function rules()
	{
			return array(
				'code' => array(
				array('not_empty'),
				array(array($this, 'bad_code')),
				),
			);    
	}
	
	public function bad_code($code)
    {
        $regcodetemp = ORM::factory('regcode', array('code'=>$code));
		
		if($regcodetemp->loaded())
		{
			if($regcodetemp->user_id == NULL)
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
    }

    public function disactive_code($code, $user_id)
    {

         $regcodetemp = ORM::factory('regcode', array('code'=>$code));
         $regcodetemp->user_id = $user_id;
         $regcodetemp->save();

    }


}
