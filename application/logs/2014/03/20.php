<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-20 02:58:34 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ APPPATH/classes/Pluginmanager.php [ 85 ] in file:line
2014-03-20 02:58:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 02:58:35 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ APPPATH/classes/Pluginmanager.php [ 85 ] in file:line
2014-03-20 02:58:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 02:59:56 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ APPPATH/classes/Pluginmanager.php [ 80 ] in file:line
2014-03-20 02:59:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 02:59:57 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ APPPATH/classes/Pluginmanager.php [ 80 ] in file:line
2014-03-20 02:59:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:00:13 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'getPlugins' ~ APPPATH/classes/Pluginmanager.php [ 99 ] in file:line
2014-03-20 03:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:00:13 --- EMERGENCY: ErrorException [ 1 ]: Undefined class constant 'getPlugins' ~ APPPATH/classes/Pluginmanager.php [ 99 ] in file:line
2014-03-20 03:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:03:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''/'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/Pluginmanager.php [ 85 ] in file:line
2014-03-20 03:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:03:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''/'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH/classes/Pluginmanager.php [ 85 ] in file:line
2014-03-20 03:03:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:47:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Redsheepcore::getMeta() ~ APPPATH/classes/Pluginmanager.php [ 135 ] in file:line
2014-03-20 03:47:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:47:33 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Redsheepcore::getMeta() ~ APPPATH/classes/Pluginmanager.php [ 135 ] in file:line
2014-03-20 03:47:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:57:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Redsheepcore::getMeta() ~ APPPATH/classes/Pluginmanager.php [ 135 ] in file:line
2014-03-20 03:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:57:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Redsheepcore::getMeta() ~ APPPATH/classes/Pluginmanager.php [ 135 ] in file:line
2014-03-20 03:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:57:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Redsheepcore::getMeta() ~ APPPATH/classes/Pluginmanager.php [ 135 ] in file:line
2014-03-20 03:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 03:57:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Redsheepcore::getMeta() ~ APPPATH/classes/Pluginmanager.php [ 135 ] in file:line
2014-03-20 03:57:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 04:00:59 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Plugins_Core_RedSheepCore_Bootstrap::getMeta() should not be called statically ~ APPPATH/classes/Pluginmanager.php [ 138 ] in /var/www/ERO/application/classes/Pluginmanager.php:138
2014-03-20 04:00:59 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(138): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/ERO/ap...', 138, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(138): Plugins_Core_RedSheepCore_Bootstrap::getMeta()
#2 /var/www/ERO/application/classes/Pluginmanager.php(103): Pluginmanager::getMeta('Core', 'RedSheepCore')
#3 /var/www/ERO/application/classes/Pluginmanager.php(158): Pluginmanager::register()
#4 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#5 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#8 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ERO/index.php(119): Kohana_Request->execute()
#11 {main} in /var/www/ERO/application/classes/Pluginmanager.php:138
2014-03-20 04:00:59 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Plugins_Core_RedSheepCore_Bootstrap::getMeta() should not be called statically ~ APPPATH/classes/Pluginmanager.php [ 138 ] in /var/www/ERO/application/classes/Pluginmanager.php:138
2014-03-20 04:00:59 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(138): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/ERO/ap...', 138, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(138): Plugins_Core_RedSheepCore_Bootstrap::getMeta()
#2 /var/www/ERO/application/classes/Pluginmanager.php(103): Pluginmanager::getMeta('Core', 'RedSheepCore')
#3 /var/www/ERO/application/classes/Pluginmanager.php(158): Pluginmanager::register()
#4 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#5 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#8 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/ERO/index.php(119): Kohana_Request->execute()
#11 {main} in /var/www/ERO/application/classes/Pluginmanager.php:138
2014-03-20 04:39:54 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Pluginmanager.php [ 106 ] in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:39:54 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(106): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ERO/ap...', 106, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(166): Pluginmanager::register()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:39:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Pluginmanager.php [ 106 ] in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:39:55 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(106): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ERO/ap...', 106, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(166): Pluginmanager::register()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Pluginmanager.php [ 106 ] in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:00 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(106): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 106, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(166): Pluginmanager::register()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: name ~ APPPATH/classes/Pluginmanager.php [ 106 ] in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:00 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(106): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 106, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(166): Pluginmanager::register()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:31 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Pluginmanager.php [ 106 ] in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:31 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(106): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ERO/ap...', 106, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(166): Pluginmanager::register()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:31 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Pluginmanager.php [ 106 ] in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:40:31 --- DEBUG: #0 /var/www/ERO/application/classes/Pluginmanager.php(106): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ERO/ap...', 106, Array)
#1 /var/www/ERO/application/classes/Pluginmanager.php(166): Pluginmanager::register()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(32): Pluginmanager::load()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Pluginmanager.php:106
2014-03-20 04:55:22 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Pluginmanager::$_pluginMetaData ~ APPPATH/classes/Pluginmanager.php [ 211 ] in file:line
2014-03-20 04:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 04:55:22 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Pluginmanager::$_pluginMetaData ~ APPPATH/classes/Pluginmanager.php [ 211 ] in file:line
2014-03-20 04:55:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 04:59:39 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Plugin as array ~ APPPATH/classes/Pluginmanager.php [ 114 ] in file:line
2014-03-20 04:59:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line