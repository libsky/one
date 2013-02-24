<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-17 00:56:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-17 00:56:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-17 00:56:53 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-11-17 00:56:53 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false, NULL)
#2 Z:\home\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('regcodes')
#4 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 Z:\home\kohana\www\application\classes\model\register.php(8): Kohana_ORM->__construct()
#8 Z:\home\kohana\www\application\classes\controller\auth.php(50): Model_Register->reg('', '', 1)
#9 [internal function]: Controller_Auth->action_reg()
#10 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#14 {main}
2012-11-17 00:57:38 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-11-17 00:57:38 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'kohana'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 Z:\home\kohana\www\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 Z:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false, NULL)
#2 Z:\home\kohana\www\modules\database\classes\kohana\database\mysql.php(358): Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(1538): Kohana_Database_MySQL->list_columns('regcodes')
#4 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns()
#5 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#6 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#7 Z:\home\kohana\www\application\classes\model\register.php(8): Kohana_ORM->__construct()
#8 Z:\home\kohana\www\application\classes\controller\auth.php(50): Model_Register->reg('ETQWETQW@gmail....', '1254', 1)
#9 [internal function]: Controller_Auth->action_reg()
#10 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#11 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 Z:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#14 {main}