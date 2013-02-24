<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-21 10:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab4.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-21 10:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: lab4.php ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 10:09:22 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-21 10:09:22 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-21 10:09:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-21 10:09:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 10:09:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL html/lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-21 10:09:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL html/lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 10:09:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL www/html/lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-21 10:09:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL www/html/lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-21 10:10:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL www/html/lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-21 10:10:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL www/html/lab4 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}