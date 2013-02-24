<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-24 08:39:52 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode() ~ APPPATH\classes\controller\auth.php [ 121 ]
2013-01-24 08:39:52 --- STRACE: ErrorException [ 2 ]: Missing argument 1 for Controller_Auth::action_checkcode() ~ APPPATH\classes\controller\auth.php [ 121 ]
--
#0 K:\home\kohana\www\application\classes\controller\auth.php(121): Kohana_Core::error_handler(2, 'Missing argumen...', 'K:\home\kohana\...', 121, Array)
#1 [internal function]: Controller_Auth->action_checkcode()
#2 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#3 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-24 08:42:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: code ~ APPPATH\classes\controller\auth.php [ 127 ]
2013-01-24 08:42:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: code ~ APPPATH\classes\controller\auth.php [ 127 ]
--
#0 K:\home\kohana\www\application\classes\controller\auth.php(127): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 127, Array)
#1 [internal function]: Controller_Auth->action_checkcode()
#2 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#3 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-24 08:42:17 --- ERROR: ErrorException [ 8 ]: Undefined variable: code ~ APPPATH\classes\controller\auth.php [ 127 ]
2013-01-24 08:42:17 --- STRACE: ErrorException [ 8 ]: Undefined variable: code ~ APPPATH\classes\controller\auth.php [ 127 ]
--
#0 K:\home\kohana\www\application\classes\controller\auth.php(127): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 127, Array)
#1 [internal function]: Controller_Auth->action_checkcode()
#2 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#3 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#6 {main}
2013-01-24 09:05:48 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'etqwetqw@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('etqwetqw@gmail.com', 'Artem Кушнаренко', '8f97a6eb33ac8fcfc9a29fae393a9b405bcefa62366c8ee7df47fa7cb7c5ddbe') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-24 09:05:48 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'etqwetqw@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('etqwetqw@gmail.com', 'Artem Кушнаренко', '8f97a6eb33ac8fcfc9a29fae393a9b405bcefa62366c8ee7df47fa7cb7c5ddbe') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(143): Kohana_ORM->create()
#4 K:\home\kohana\www\application\classes\controller\auth.php(67): Kohana_Ulogin->login()
#5 [internal function]: Controller_Auth->action_form()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\application\views\home.php(3): Kohana_Request->execute()
#10 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#11 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#12 K:\home\kohana\www\system\classes\kohana\view.php(228): Kohana_View->render()
#13 K:\home\kohana\www\application\views\basic.php(17): Kohana_View->__toString()
#14 K:\home\kohana\www\system\classes\kohana\view.php(61): include('K:\home\kohana\...')
#15 K:\home\kohana\www\system\classes\kohana\view.php(343): Kohana_View::capture('K:\home\kohana\...', Array)
#16 K:\home\kohana\www\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#17 [internal function]: Kohana_Controller_Template->after()
#18 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(119): ReflectionMethod->invoke(Object(Controller_Main))
#19 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#20 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#21 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#22 {main}
2013-01-24 09:10:18 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'etqwetqw@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('etqwetqw@gmail.com', 'Artem Кушнаренко', '51163ae652bacfe15b78daeccb3d66b4a64398f8c0f484bdf1ec079ec39d0f7d') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-24 09:10:18 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'etqwetqw@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('etqwetqw@gmail.com', 'Artem Кушнаренко', '51163ae652bacfe15b78daeccb3d66b4a64398f8c0f484bdf1ec079ec39d0f7d') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(143): Kohana_ORM->create()
#4 K:\home\kohana\www\application\classes\controller\auth.php(46): Kohana_Ulogin->login()
#5 [internal function]: Controller_Auth->action_index()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-24 09:17:35 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('ETQWETQW@gmail.com', 'Антон Василек', '7194b78b9dd78a861ec04bd1ce6fdac95ebef4d4011e4d8cacd9b595d7858fd6') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-24 09:17:35 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('ETQWETQW@gmail.com', 'Антон Василек', '7194b78b9dd78a861ec04bd1ce6fdac95ebef4d4011e4d8cacd9b595d7858fd6') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(143): Kohana_ORM->create()
#4 K:\home\kohana\www\application\classes\controller\auth.php(46): Kohana_Ulogin->login()
#5 [internal function]: Controller_Auth->action_index()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-24 09:46:03 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('ETQWETQW@gmail.com', 'Антон Василек', 'a17f2b3fc229f432a81ef77e53a6f82b3812d57419c8e4792657c82e4dcd950d') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-24 09:46:03 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('ETQWETQW@gmail.com', 'Антон Василек', 'a17f2b3fc229f432a81ef77e53a6f82b3812d57419c8e4792657c82e4dcd950d') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(143): Kohana_ORM->create()
#4 K:\home\kohana\www\application\classes\controller\auth.php(148): Kohana_Ulogin->login()
#5 [internal function]: Controller_Auth->action_ulogin()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-24 09:46:57 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'etqwetqw@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('etqwetqw@gmail.com', 'Artem Кушнаренко', 'd821d545b25068ac5a9be1fb2f304a654151c8f06dbfce1f33d74b312fda46c9') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-24 09:46:57 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'etqwetqw@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('etqwetqw@gmail.com', 'Artem Кушнаренко', 'd821d545b25068ac5a9be1fb2f304a654151c8f06dbfce1f33d74b312fda46c9') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(143): Kohana_ORM->create()
#4 K:\home\kohana\www\application\classes\controller\auth.php(148): Kohana_Ulogin->login()
#5 [internal function]: Controller_Auth->action_ulogin()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-24 09:51:13 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('ETQWETQW@gmail.com', 'Антон Василек', '3cd6069e0620a025ff2501eef4a594fd0566d1b8e1bd8b774619dae4b9af0fa7') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2013-01-24 09:51:13 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry 'ETQWETQW@gmail.com' for key 'uniq_email' [ INSERT INTO `users` (`email`, `username`, `password`) VALUES ('ETQWETQW@gmail.com', 'Антон Василек', '3cd6069e0620a025ff2501eef4a594fd0566d1b8e1bd8b774619dae4b9af0fa7') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 K:\home\kohana\www\modules\database\classes\database\mysql.php(15): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 K:\home\kohana\www\modules\database\classes\kohana\database\query.php(245): Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#2 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1252): Kohana_Database_Query->execute(Object(Database_MySQL))
#3 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(143): Kohana_ORM->create()
#4 K:\home\kohana\www\application\classes\controller\main.php(16): Kohana_Ulogin->login()
#5 [internal function]: Controller_Main->action_index()
#6 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#7 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#9 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#10 {main}
2013-01-24 09:58:02 --- ERROR: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\kohana\orm.php [ 1437 ]
2013-01-24 09:58:02 --- STRACE: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\kohana\orm.php [ 1437 ]
--
#0 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1437): Kohana_Core::error_handler(8, 'Undefined index...', 'K:\home\kohana\...', 1437, Array)
#1 K:\home\kohana\www\modules\ulogin\classes\kohana\ulogin.php(144): Kohana_ORM->add('roles', Object(Model_Role))
#2 K:\home\kohana\www\application\classes\controller\main.php(16): Kohana_Ulogin->login()
#3 [internal function]: Controller_Main->action_index()
#4 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Main))
#5 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#8 {main}
2013-01-24 10:06:37 --- ERROR: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\kohana\orm.php [ 1410 ]
2013-01-24 10:06:37 --- STRACE: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH\orm\classes\kohana\orm.php [ 1410 ]
--
#0 K:\home\kohana\www\modules\orm\classes\kohana\orm.php(1410): Kohana_Core::error_handler(8, 'Undefined index...', 'K:\home\kohana\...', 1410, Array)
#1 K:\home\kohana\www\modules\orm\classes\kohana\auth\orm.php(86): Kohana_ORM->has('roles', Object(Model_Role))
#2 K:\home\kohana\www\modules\auth\classes\kohana\auth.php(92): Kohana_Auth_ORM->_login('ETQWETQW@gmail....', '??????????', false)
#3 K:\home\kohana\www\application\classes\controller\auth.php(23): Kohana_Auth->login('ETQWETQW@gmail....', '??????????')
#4 [internal function]: Controller_Auth->action_index()
#5 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Auth))
#6 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#9 {main}