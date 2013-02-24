<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-02 05:36:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-02 05:36:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-02 05:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-11-02 05:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL reg was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-11-02 05:45:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$', expecting '&' or T_VARIABLE ~ APPPATH\classes\model\register.php [ 6 ]
2012-11-02 05:45:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$', expecting '&' or T_VARIABLE ~ APPPATH\classes\model\register.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 05:46:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\model\register.php [ 23 ]
2012-11-02 05:46:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\model\register.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 05:47:00 --- ERROR: Kohana_Exception [ 0 ]: The save property does not exist in the Model_Addrole class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2012-11-02 05:47:00 --- STRACE: Kohana_Exception [ 0 ]: The save property does not exist in the Model_Addrole class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 D:\sites\kohana\www\application\classes\model\register.php(25): Kohana_ORM->__get('save')
#1 D:\sites\kohana\www\application\classes\controller\auth.php(49): Model_Register->reg('b', '', 1)
#2 [internal function]: Controller_Auth->action_reg()
#3 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2012-11-02 05:47:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'b' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('b', 'b', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-02 05:47:34 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'b' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('b', 'b', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#4 D:\sites\kohana\www\application\classes\model\register.php(15): Kohana_ORM->save()
#5 D:\sites\kohana\www\application\classes\controller\auth.php(49): Model_Register->reg('b', '', 1)
#6 [internal function]: Controller_Auth->action_reg()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-02 06:33:48 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:33:48 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:34:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:34:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:34:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:34:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:34:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:34:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:34:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:34:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:35:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:35:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:35:53 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:35:53 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:38:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:38:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:38:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:38:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:38:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:38:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:39:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:39:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:42:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:42:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:42:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:42:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:44:35 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
2012-11-02 06:44:35 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\regview.php [ 27 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 06:51:16 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\regview.php [ 8 ]
2012-11-02 06:51:16 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\regview.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 07:24:17 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'd@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('d@gmail.com', 'd@gmail.com', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-02 07:24:17 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'd@gmail.com' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('d@gmail.com', 'd@gmail.com', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#4 D:\sites\kohana\www\application\classes\model\register.php(18): Kohana_ORM->save()
#5 D:\sites\kohana\www\application\classes\controller\auth.php(50): Model_Register->reg('d@gmail.com', '', 1)
#6 [internal function]: Controller_Auth->action_reg()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-02 07:25:42 --- ERROR: ErrorException [ 1 ]: Call to undefined method ORM_Validation_Exception::error() ~ APPPATH\classes\model\register.php [ 33 ]
2012-11-02 07:25:42 --- STRACE: ErrorException [ 1 ]: Call to undefined method ORM_Validation_Exception::error() ~ APPPATH\classes\model\register.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-11-02 15:07:32 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-02 15:07:32 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}