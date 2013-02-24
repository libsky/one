<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-01 03:12:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-01 03:12:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-01 05:40:32 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-01 05:40:32 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('', '', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#4 D:\sites\kohana\www\application\classes\model\register.php(15): Kohana_ORM->save()
#5 D:\sites\kohana\www\application\classes\controller\auth.php(49): Model_Register->reg('', '')
#6 [internal function]: Controller_Auth->action_reg()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-01 05:49:44 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1234556432' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('1234556432', '1234556432', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-01 05:49:44 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '1234556432' for key 'uniq_username' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('1234556432', '1234556432', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#4 D:\sites\kohana\www\application\classes\model\register.php(15): Kohana_ORM->save()
#5 D:\sites\kohana\www\application\classes\controller\auth.php(49): Model_Register->reg('1234556432', '')
#6 [internal function]: Controller_Auth->action_reg()
#7 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}
2012-11-01 05:50:58 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\model\register.php [ 20 ]
2012-11-01 05:50:58 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_EXIT ~ APPPATH\classes\model\register.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}