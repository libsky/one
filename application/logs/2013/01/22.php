<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-22 10:44:04 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2013-01-22 10:44:04 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 K:\home\kohana\www\application\classes\model\tree.php(42): Kohana_ORM->__get('name')
#1 K:\home\kohana\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('6')
#2 [internal function]: Controller_Category->action_showcat()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Category))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 10:47:48 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2013-01-22 10:47:48 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 K:\home\kohana\www\application\classes\model\tree.php(42): Kohana_ORM->__get('name')
#1 K:\home\kohana\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('6')
#2 [internal function]: Controller_Category->action_showcat()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Category))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 10:49:53 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2013-01-22 10:49:53 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 K:\home\kohana\www\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('user', NULL)
#1 K:\home\kohana\www\system\classes\kohana\request.php(202): Kohana_Cookie::get('user')
#2 K:\home\kohana\www\index.php(108): Kohana_Request::factory()
#3 {main}
2013-01-22 10:51:55 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2013-01-22 10:51:55 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 K:\home\kohana\www\application\classes\model\tree.php(42): Kohana_ORM->__get('name')
#1 K:\home\kohana\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('6')
#2 [internal function]: Controller_Category->action_showcat()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Category))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 10:54:16 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
2013-01-22 10:54:16 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Material class ~ MODPATH\orm\classes\kohana\orm.php [ 621 ]
--
#0 K:\home\kohana\www\application\classes\model\tree.php(42): Kohana_ORM->__get('name')
#1 K:\home\kohana\www\application\classes\controller\category.php(22): Model_Tree->contentСategoryById('6')
#2 [internal function]: Controller_Category->action_showcat()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Category))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 10:58:47 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 10:58:47 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 11:05:44 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 11:05:44 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 11:07:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 11:07:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 11:07:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 11:07:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 11:12:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 11:12:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('1')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 11:20:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 11:20:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('2')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}
2013-01-22 11:20:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
2013-01-22 11:20:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: taginfo ~ APPPATH\classes\model\material.php [ 54 ]
--
#0 K:\home\kohana\www\application\classes\model\material.php(54): Kohana_Core::error_handler(8, 'Undefined varia...', 'K:\home\kohana\...', 54, Array)
#1 K:\home\kohana\www\application\classes\controller\materials.php(37): Model_Material->showMaterialById('4')
#2 [internal function]: Controller_Materials->action_showcontent()
#3 K:\home\kohana\www\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Materials))
#4 K:\home\kohana\www\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 K:\home\kohana\www\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 K:\home\kohana\www\index.php(109): Kohana_Request->execute()
#7 {main}