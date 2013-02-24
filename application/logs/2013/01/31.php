<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-31 01:12:59 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2013-01-31 01:12:59 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 K:\home\kohana\www\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 K:\home\kohana\www\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 K:\home\kohana\www\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 [internal function]: Kohana_Controller_Template->before()
#4 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Content))
#5 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-31 01:23:10 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\content.php [ 8 ]
2013-01-31 01:23:10 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\content.php [ 8 ]
--
#0 K:\home\kohana\www\application\classes\controller\content.php(8): Kohana_Core::error_handler(2048, 'Creating defaul...', 'K:\home\kohana\...', 8, Array)
#1 [internal function]: Controller_Content->action_index()
#2 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Content))
#3 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}