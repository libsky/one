<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-16 07:07:22 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\accountview.php [ 26 ]
2013-01-16 07:07:22 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\accountview.php [ 26 ]
--
#0 K:\home\kohana\www\application\views\accountview.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 26, Array)
#1 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#2 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#3 K:\home\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 K:\home\kohana\www\application\views\basic.php(16): Kohana_View->__toString()
#5 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#6 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#7 K:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Account))
#10 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-16 07:07:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\accountview.php [ 26 ]
2013-01-16 07:07:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\accountview.php [ 26 ]
--
#0 K:\home\kohana\www\application\views\accountview.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 26, Array)
#1 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#2 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#3 K:\home\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 K:\home\kohana\www\application\views\basic.php(16): Kohana_View->__toString()
#5 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#6 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#7 K:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Account))
#10 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}
2013-01-16 07:08:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\accountview.php [ 26 ]
2013-01-16 07:08:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: username ~ APPPATH\views\accountview.php [ 26 ]
--
#0 K:\home\kohana\www\application\views\accountview.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 26, Array)
#1 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#2 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#3 K:\home\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#4 K:\home\kohana\www\application\views\basic.php(16): Kohana_View->__toString()
#5 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#6 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#7 K:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Account))
#10 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#12 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#13 {main}