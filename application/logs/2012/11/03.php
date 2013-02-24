<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-03 01:14:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-03 01:14:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-03 01:19:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\regview.php [ 10 ]
2012-11-03 01:19:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\regview.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-03 01:20:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\regview.php [ 10 ]
2012-11-03 01:20:26 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting ',' or ';' ~ APPPATH\views\regview.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}