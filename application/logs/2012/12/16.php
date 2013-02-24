<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-12-16 00:33:41 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-12-16 00:33:41 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-12-16 00:38:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-16 00:38:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-16 00:39:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-16 00:39:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-12-16 00:39:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-12-16 00:39:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}