<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-24 07:07:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-12-24 07:07:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-24 07:29:04 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
2012-12-24 07:29:04 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1204 ]
--
#0 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1289): Kohana_ORM->check(NULL)
#1 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->update(NULL)
#2 K:\home\kohana\www\application\classes\model\register.php(77): Kohana_ORM->save()
#3 K:\home\kohana\www\application\classes\controller\auth.php(81): Model_Register->hochuNoviyParol('ETQWETQW@gmail....')
#4 [internal function]: Controller_Auth->action_hochuvspomnit()
#5 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#6 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}
2012-12-24 07:53:34 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting ';' or '{' ~ APPPATH\classes\model\myuser.php [ 18 ]
2012-12-24 07:53:34 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_LNUMBER, expecting ';' or '{' ~ APPPATH\classes\model\myuser.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-24 07:57:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/checkcode/BljNrrGUKo5vuRaY9S was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-12-24 07:57:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/checkcode/BljNrrGUKo5vuRaY9S was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-24 09:28:32 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode() ~ APPPATH\classes\controller\auth.php [ 93 ]
2012-12-24 09:28:32 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode() ~ APPPATH\classes\controller\auth.php [ 93 ]
--
#0 K:\home\kohana\www\application\classes\controller\auth.php(93): Kohana_Core::error_handler(2, 'Missing argumen...', 'K:\home\kohana\...', 93, Array)
#1 [internal function]: Controller_Auth->action_checkcode()
#2 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#3 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}