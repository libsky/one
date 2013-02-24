<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-10-25 00:07:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-10-25 00:07:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-10-25 00:08:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL hpass was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-10-25 00:08:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL hpass was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#3 {main}
2012-10-25 00:12:40 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:12:40 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:12:54 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:12:54 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:13:51 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:13:51 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:14:16 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:14:16 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:14:20 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:14:20 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#4 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\sites\kohana\www\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#9 D:\sites\kohana\www\modules\auth\classes\kohana\auth.php(92): Kohana_Auth_ORM->_login('admin', 'adminfyu', false)
#10 D:\sites\kohana\www\application\classes\controller\main.php(26): Kohana_Auth->login('admin', 'adminfyu')
#11 [internal function]: Controller_Main->action_index()
#12 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-10-25 00:16:48 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:16:48 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#4 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#8 D:\sites\kohana\www\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#9 D:\sites\kohana\www\modules\auth\classes\kohana\auth.php(92): Kohana_Auth_ORM->_login('admin', 'adminfyu', false)
#10 D:\sites\kohana\www\application\classes\controller\main.php(26): Kohana_Auth->login('admin', 'adminfyu')
#11 [internal function]: Controller_Main->action_index()
#12 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#13 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#14 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#15 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#16 {main}
2012-10-25 00:16:55 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:16:55 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:19:30 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:19:30 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:20:56 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:20:56 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
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
2012-10-25 00:23:37 --- ERROR: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
2012-10-25 00:23:37 --- STRACE: Database_Exception [ 1044 ]: Access denied for user 'kohana'@'localhost' to database 'kohana' ~ MODPATH\database\classes\kohana\database\mysql.php [ 108 ]
--
#0 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#2 D:\sites\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false, NULL)
#3 D:\sites\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#4 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('users')
#5 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#6 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#7 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#8 D:\sites\kohana\www\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#9 D:\sites\kohana\www\modules\orm\classes\kohana\auth\orm.php(75): Kohana_ORM::factory('user')
#10 D:\sites\kohana\www\modules\auth\classes\kohana\auth.php(92): Kohana_Auth_ORM->_login('admin', 'admin', false)
#11 D:\sites\kohana\www\application\classes\controller\main.php(26): Kohana_Auth->login('admin', 'admin')
#12 [internal function]: Controller_Main->action_index()
#13 D:\sites\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#14 D:\sites\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#15 D:\sites\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#16 D:\sites\kohana\www\index.php(109): Kohana_Request->execute()
#17 {main}