<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-11 09:04:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-12-11 09:04:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 09:10:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/logoff was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-12-11 09:10:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/logoff was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-11 09:10:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL auth/logof was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-12-11 09:10:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL auth/logof was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-11 09:39:37 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-12-11 09:39:37 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 09:39:49 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2012-12-11 09:39:49 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:39:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-12-11 09:39:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-11 09:41:00 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
2012-12-11 09:41:00 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:46:14 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 177 ]
2012-12-11 09:46:14 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 177 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:46:14 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 43 ]
2012-12-11 09:46:14 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ SYSPATH\classes\kohana\session\native.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-12-11 09:49:36 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 177 ]
2012-12-11 09:49:36 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 177 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}