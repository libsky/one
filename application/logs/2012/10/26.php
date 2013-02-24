<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-26 03:54:21 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-26 03:54:21 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false, NULL)
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#4 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\sites\kohana\www\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#9 D:\sites\kohana\www\modules\auth\classes\kohana\auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 D:\sites\kohana\www\application\classes\controller\main.php(26): Kohana_Auth->login('admin', 'admin')
#11 [internal function]: Controller_Main->action_index()
#12 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-10-26 05:04:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-26 05:04:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-26 05:04:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL welcome/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-10-26 05:04:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL welcome/test was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-26 05:29:55 --- ERROR: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-10-26 05:29:55 --- STRACE: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'kohana'@'localhost' (using password: NO) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false, NULL)
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#4 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\sites\kohana\www\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#9 D:\sites\kohana\www\modules\auth\classes\kohana\auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#10 D:\sites\kohana\www\application\classes\controller\main.php(26): Kohana_Auth->login('admin', 'admin')
#11 [internal function]: Controller_Main->action_index()
#12 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#16 {main}