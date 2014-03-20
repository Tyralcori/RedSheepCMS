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
2014-03-20 05:43:50 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Plugin_Interface' not found ~ APPPATH/classes/Plugins/Core/RedSheepCore/Bootstrap.php [ 10 ] in file:line
2014-03-20 05:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 05:43:50 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Plugin_Interface' not found ~ APPPATH/classes/Plugins/Core/RedSheepCore/Bootstrap.php [ 10 ] in file:line
2014-03-20 05:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 05:44:15 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Plugins_Interface' not found ~ APPPATH/classes/Plugins/Core/RedSheepCore/Bootstrap.php [ 10 ] in file:line
2014-03-20 05:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 05:44:15 --- EMERGENCY: ErrorException [ 1 ]: Interface 'Plugins_Interface' not found ~ APPPATH/classes/Plugins/Core/RedSheepCore/Bootstrap.php [ 10 ] in file:line
2014-03-20 05:44:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 07:04:16 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Event as array ~ MODPATH/redsheepcore/classes/Redsheepcore/Event.php [ 31 ] in file:line
2014-03-20 07:04:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 07:09:54 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function test2() on a non-object ~ MODPATH/redsheepcore/classes/Redsheepcore/Event.php [ 47 ] in file:line
2014-03-20 07:09:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 07:10:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function test() on a non-object ~ MODPATH/redsheepcore/classes/Redsheepcore/Event.php [ 47 ] in file:line
2014-03-20 07:10:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 08:40:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Backend::index_action() ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 137 ] in file:line
2014-03-20 08:40:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 08:50:01 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'active' in 'where clause' [ SELECT `cron`.`id` AS `id`, `cron`.`name` AS `name`, `cron`.`executePluginID` AS `executePluginID`, `cron`.`executeFunction` AS `executeFunction`, `cron`.`lastStart` AS `lastStart`, `cron`.`lastEnd` AS `lastEnd`, `cron`.`interval` AS `interval`, `cron`.`isActive` AS `isActive` FROM `crons` AS `cron` WHERE `active` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:50:01 --- DEBUG: #0 /var/www/ERO/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cron`.`...', 'Model_Cron', Array)
#1 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(20): Kohana_ORM->find_all()
#4 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#5 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#6 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#7 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#8 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#9 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#10 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#11 {main} in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:50:22 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_crons' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-03-20 08:50:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 08:50:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'active' in 'where clause' [ SELECT `cron`.`id` AS `id`, `cron`.`name` AS `name`, `cron`.`executePluginID` AS `executePluginID`, `cron`.`executeFunction` AS `executeFunction`, `cron`.`lastStart` AS `lastStart`, `cron`.`lastEnd` AS `lastEnd`, `cron`.`interval` AS `interval`, `cron`.`isActive` AS `isActive` FROM `crons` AS `cron` WHERE `active` = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:50:30 --- DEBUG: #0 /var/www/ERO/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cron`.`...', 'Model_Cron', Array)
#1 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(20): Kohana_ORM->find_all()
#4 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#5 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#6 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#7 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#8 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#9 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#10 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#11 {main} in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:51:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'active' in 'where clause' [ SELECT `cron`.`id` AS `id`, `cron`.`name` AS `name`, `cron`.`executePluginID` AS `executePluginID`, `cron`.`executeFunction` AS `executeFunction`, `cron`.`lastStart` AS `lastStart`, `cron`.`lastEnd` AS `lastEnd`, `cron`.`interval` AS `interval`, `cron`.`isActive` AS `isActive` FROM `crons` AS `cron` WHERE `active` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:51:14 --- DEBUG: #0 /var/www/ERO/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cron`.`...', 'Model_Cron', Array)
#1 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(20): Kohana_ORM->find_all()
#4 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#5 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#6 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#7 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#8 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#9 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#10 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#11 {main} in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:51:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'active' in 'where clause' [ SELECT `cron`.`id` AS `id`, `cron`.`name` AS `name`, `cron`.`executePluginID` AS `executePluginID`, `cron`.`executeFunction` AS `executeFunction`, `cron`.`lastStart` AS `lastStart`, `cron`.`lastEnd` AS `lastEnd`, `cron`.`interval` AS `interval`, `cron`.`isActive` AS `isActive` FROM `crons` AS `cron` WHERE `active` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:51:14 --- DEBUG: #0 /var/www/ERO/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cron`.`...', 'Model_Cron', Array)
#1 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(20): Kohana_ORM->find_all()
#4 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#5 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#6 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#7 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#8 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#9 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#10 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#11 {main} in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:51:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'active' in 'where clause' [ SELECT `cron`.`id` AS `id`, `cron`.`name` AS `name`, `cron`.`executePluginID` AS `executePluginID`, `cron`.`executeFunction` AS `executeFunction`, `cron`.`lastStart` AS `lastStart`, `cron`.`lastEnd` AS `lastEnd`, `cron`.`interval` AS `interval`, `cron`.`isActive` AS `isActive` FROM `crons` AS `cron` WHERE `active` = '1' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:51:15 --- DEBUG: #0 /var/www/ERO/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `cron`.`...', 'Model_Cron', Array)
#1 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(20): Kohana_ORM->find_all()
#4 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#5 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#6 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#7 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#8 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#9 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#10 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#11 {main} in /var/www/ERO/modules/database/classes/Kohana/Database/Query.php:251
2014-03-20 08:56:19 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Cron as array ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 29 ] in file:line
2014-03-20 08:56:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 08:56:32 --- EMERGENCY: ErrorException [ 2 ]: DateTime::modify(): Failed to parse time string (Y.m.d H:i:s) at position 4 (d): Double timezone specification ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 29 ] in file:line
2014-03-20 08:56:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DateTime::modif...', '/var/www/ERO/mo...', 29, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(29): DateTime->modify('Y.m.d H:i:s')
#2 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#4 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#5 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#6 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#7 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#8 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#9 {main} in file:line
2014-03-20 08:56:42 --- EMERGENCY: ErrorException [ 2 ]: DateTime::modify(): Failed to parse time string (Y.m.d H:i:s) at position 4 (d): Double timezone specification ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 29 ] in file:line
2014-03-20 08:56:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DateTime::modif...', '/var/www/ERO/mo...', 29, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(29): DateTime->modify('Y.m.d H:i:s')
#2 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#4 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#5 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#6 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#7 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#8 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#9 {main} in file:line
2014-03-20 08:57:03 --- EMERGENCY: ErrorException [ 2 ]: DateTime::modify(): Failed to parse time string (Y.m.d H:i:s) at position 4 (d): Double timezone specification ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 29 ] in file:line
2014-03-20 08:57:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'DateTime::modif...', '/var/www/ERO/mo...', 29, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(29): DateTime->modify('Y.m.d H:i:s')
#2 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#4 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#5 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#6 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#7 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#8 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#9 {main} in file:line
2014-03-20 08:57:16 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 30 ] in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:30
2014-03-20 08:57:16 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(30): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/ERO/mo...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#4 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#5 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#6 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#7 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#8 {main} in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:30
2014-03-20 08:57:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: DateTime::$date ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 30 ] in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:30
2014-03-20 08:57:42 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(30): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/ERO/mo...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#4 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#5 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#6 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#7 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#8 {main} in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:30
2014-03-20 08:59:44 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Cron as array ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 37 ] in file:line
2014-03-20 08:59:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 09:04:18 --- EMERGENCY: ErrorException [ 4096 ]: Object of class DateTime could not be converted to string ~ MODPATH/database/classes/Kohana/Database.php [ 461 ] in /var/www/ERO/modules/database/classes/Kohana/Database.php:461
2014-03-20 09:04:18 --- DEBUG: #0 /var/www/ERO/modules/database/classes/Kohana/Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', '/var/www/ERO/mo...', 461, Array)
#1 /var/www/ERO/modules/database/classes/Kohana/Database/Query/Builder.php(165): Kohana_Database->quote(Object(DateTime))
#2 /var/www/ERO/modules/database/classes/Kohana/Database/Query/Builder/Update.php(98): Kohana_Database_Query_Builder->_compile_set(Object(Database_MySQL), Array)
#3 /var/www/ERO/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Update->compile(Object(Database_MySQL))
#4 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1394): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->update(NULL)
#6 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(39): Kohana_ORM->save()
#7 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#8 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#9 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#10 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#11 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#12 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#13 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#14 {main} in /var/www/ERO/modules/database/classes/Kohana/Database.php:461
2014-03-20 09:14:53 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 44 ] in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:44
2014-03-20 09:14:53 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(44): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ERO/mo...', 44, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#4 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#5 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#6 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#7 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#8 {main} in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:44
2014-03-20 09:16:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: 3 ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 44 ] in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:44
2014-03-20 09:16:12 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/mo...', 44, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#4 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#5 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#6 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#7 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#8 {main} in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:44
2014-03-20 09:17:41 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 70 ] in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:70
2014-03-20 09:17:41 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php(70): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/ERO/mo...', 70, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(38): Redsheepcore_Cron::execute()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#4 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#5 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#6 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#7 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#8 {main} in /var/www/ERO/modules/redsheepcore/classes/Redsheepcore/Cron.php:70
2014-03-20 09:18:03 --- EMERGENCY: ErrorException [ 1 ]: Access to undeclared static property: Plugins_Core_RedSheepMonitor_Bootstrap::$cronAction ~ MODPATH/redsheepcore/classes/Redsheepcore/Cron.php [ 70 ] in file:line
2014-03-20 09:18:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-20 09:44:59 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Backend.php [ 44 ] in /var/www/ERO/GIT/RedSheepCMS/application/classes/Controller/Backend.php:44
2014-03-20 09:44:59 --- DEBUG: #0 /var/www/ERO/GIT/RedSheepCMS/application/classes/Controller/Backend.php(44): Kohana_Core::error_handler(2, 'Invalid argumen...', '/var/www/ERO/GI...', 44, Array)
#1 /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php(135): Controller_Backend->action_cron()
#2 /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php(167): Kohana_Redsheepcore::run()
#3 /var/www/ERO/GIT/RedSheepCMS/application/classes/Controller/Redsheep.php(22): Kohana_Redsheepcore::init('developement')
#4 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#7 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ERO/GIT/RedSheepCMS/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/ERO/GIT/RedSheepCMS/application/classes/Controller/Backend.php:44
2014-03-20 09:55:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: template ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 196 ] in /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php:196
2014-03-20 09:55:31 --- DEBUG: #0 /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php(196): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/GI...', 196, Array)
#1 /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php(332): Kohana_Redsheepcore::getConfig('template')
#2 /var/www/ERO/GIT/RedSheepCMS/application/classes/Controller/Redsheep.php(35): Kohana_Redsheepcore::callTemplate('Twig')
#3 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/GIT/RedSheepCMS/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php:196
2014-03-20 09:55:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: template ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 196 ] in /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php:196
2014-03-20 09:55:31 --- DEBUG: #0 /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php(196): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/GI...', 196, Array)
#1 /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php(332): Kohana_Redsheepcore::getConfig('template')
#2 /var/www/ERO/GIT/RedSheepCMS/application/classes/Controller/Redsheep.php(35): Kohana_Redsheepcore::callTemplate('Twig')
#3 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/GIT/RedSheepCMS/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/GIT/RedSheepCMS/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/GIT/RedSheepCMS/modules/redsheepcore/classes/Kohana/Redsheepcore.php:196