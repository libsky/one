<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-09 07:00:34 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2013-01-09 07:00:34 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2013-01-09 07:34:11 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-09 07:34:11 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#2 K:\home\kohana\www\application\classes\nstree.php(100): Kohana_Database_Query->execute()
#3 K:\home\kohana\www\application\classes\model\category.php(13): NSTree->getTree()
#4 K:\home\kohana\www\application\classes\controller\admin\main.php(10): Model_Category->getTree()
#5 [internal function]: Controller_Admin_Main->action_index()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 07:43:47 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-09 07:43:47 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#2 K:\home\kohana\www\application\classes\nstree.php(100): Kohana_Database_Query->execute()
#3 K:\home\kohana\www\application\classes\model\category.php(13): NSTree->getTree()
#4 K:\home\kohana\www\application\classes\controller\admin\main.php(10): Model_Category->getTree()
#5 [internal function]: Controller_Admin_Main->action_index()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-09 07:51:38 --- ERROR: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-09 07:51:38 --- STRACE: Database_Exception [ 1146 ]: Table 'kohana.tree' doesn't exist [ SELECT *
				FROM `tree`
				ORDER BY left_key ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(1, 'SELECT *?????FR...', false, Array)
#2 K:\home\kohana\www\application\classes\nstree.php(100): Kohana_Database_Query->execute()
#3 K:\home\kohana\www\application\classes\model\category.php(13): NSTree->getTree()
#4 K:\home\kohana\www\application\classes\controller\admin\main.php(10): Model_Category->getTree()
#5 [internal function]: Controller_Admin_Main->action_index()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Admin_Main))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}