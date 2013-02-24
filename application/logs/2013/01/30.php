<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-30 23:32:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\contentview.php [ 5 ]
2013-01-30 23:32:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH\views\contentview.php [ 5 ]
--
#0 K:\home\kohana\www\application\views\contentview.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 5, Array)
#1 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#2 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#3 K:\home\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 K:\home\kohana\www\application\views\basic.php(120): Kohana_View->__toString()
#5 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#6 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#7 K:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Content))
#10 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}