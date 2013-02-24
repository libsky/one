<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-11-24 07:29:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
2012-11-24 07:29:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1142 ]
--
#0 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#1 {main}
2012-11-24 07:30:00 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('ETQWETQW@gmail.com', 'ETQWETQW@gmail.com', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-11-24 07:30:00 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`username`, `email`, `password`) VALUES ('ETQWETQW@gmail.com', 'ETQWETQW@gmail.com', '12345') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 Z:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 Z:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 Z:\home\kohana\www\modules\orm\classes\kohana\orm.php(1348): Kohana_ORM->create(NULL)
#4 Z:\home\kohana\www\application\classes\model\register.php(18): Kohana_ORM->save()
#5 Z:\home\kohana\www\application\classes\controller\auth.php(50): Model_Register->reg('ETQWETQW@gmail....', '', 1)
#6 [internal function]: Controller_Auth->action_reg()
#7 Z:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#8 Z:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 Z:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 Z:\home\kohana\www\index.php(109): Kohana_Request->execute()
#11 {main}