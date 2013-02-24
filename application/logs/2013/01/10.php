<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-10 07:03:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-01-10 07:03:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-10 08:15:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL ьфеукшфды was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2013-01-10 08:15:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL ьфеукшфды was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 08:15:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2013-01-10 08:15:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL materials was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2013-01-10 08:16:08 --- ERROR: ErrorException [ 1 ]: Class 'Model_Material' not found ~ APPPATH\classes\controller\materials.php [ 12 ]
2013-01-10 08:16:08 --- STRACE: ErrorException [ 1 ]: Class 'Model_Material' not found ~ APPPATH\classes\controller\materials.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}