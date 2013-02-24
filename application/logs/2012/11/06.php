<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-06 06:22:38 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-06 06:22:38 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-06 06:22:39 --- ERROR: ErrorException [ 1 ]: Class 'Model_Myser' not found ~ APPPATH\classes\model\register.php [ 9 ]
2012-11-06 06:22:39 --- STRACE: ErrorException [ 1 ]: Class 'Model_Myser' not found ~ APPPATH\classes\model\register.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}