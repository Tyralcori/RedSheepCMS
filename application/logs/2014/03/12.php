<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-03-12 01:46:42 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Redsheep.php [ 113 ] in file:line
2014-03-12 01:46:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 01:46:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Redsheep.php [ 113 ] in file:line
2014-03-12 01:46:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:15 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:48 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Frontend.php [ 119 ] in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:47:49 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Frontend.php(119): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 119, Array)
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Controller_Frontend->action_index()
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(91): Controller_Redsheep->action_frontend()
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/application/classes/Controller/Frontend.php:119
2014-03-12 01:56:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 108 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:108
2014-03-12 01:56:45 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 108, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:108
2014-03-12 01:56:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 108 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:108
2014-03-12 01:56:46 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 108, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:108
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:57:34 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 197 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 01:58:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(197): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 197, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:197
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:01:58 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:02:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/classes/Controller/Redsheep.php [ 30 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:02:01 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(21): Controller_Redsheep->getConfig('version')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(226): Controller_Backend->action_index()
#3 /var/www/ERO/application/classes/Controller/Redsheep.php(94): Controller_Redsheep->action_backend()
#4 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#7 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ERO/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:02:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:02:02 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:02:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 97 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:56 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 97, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 97 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:56 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 97, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 97 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:56 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 97, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 97 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:02:57 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(97): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 97, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:97
2014-03-12 02:03:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/classes/Controller/Redsheep.php [ 30 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:03:14 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(21): Controller_Redsheep->getConfig('version')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(223): Controller_Backend->action_index()
#3 /var/www/ERO/application/classes/Controller/Redsheep.php(166): Controller_Redsheep->action_backend()
#4 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#7 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ERO/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:03:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:03:15 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:03:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The version property does not exist in the Model_Config class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/ERO/modules/orm/classes/Kohana/ORM.php:603
2014-03-12 02:03:54 --- DEBUG: #0 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('version')
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(120): Kohana_ORM->__get('version')
#2 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#5 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ERO/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/ERO/modules/orm/classes/Kohana/ORM.php:603
2014-03-12 02:03:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The version property does not exist in the Model_Config class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/ERO/modules/orm/classes/Kohana/ORM.php:603
2014-03-12 02:03:54 --- DEBUG: #0 /var/www/ERO/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('version')
#1 /var/www/ERO/application/classes/Controller/Redsheep.php(120): Kohana_ORM->__get('version')
#2 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#5 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/ERO/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/ERO/modules/orm/classes/Kohana/ORM.php:603
2014-03-12 02:05:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/classes/Controller/Redsheep.php [ 30 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:05:59 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(21): Controller_Redsheep->getConfig('version')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(223): Controller_Backend->action_index()
#3 /var/www/ERO/application/classes/Controller/Redsheep.php(166): Controller_Redsheep->action_backend()
#4 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#7 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ERO/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:05:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:05:59 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:06:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/classes/Controller/Redsheep.php [ 30 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:06:59 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(21): Controller_Redsheep->getConfig('version')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(223): Controller_Backend->action_index()
#3 /var/www/ERO/application/classes/Controller/Redsheep.php(166): Controller_Redsheep->action_backend()
#4 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#7 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ERO/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:07:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:07:00 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:09:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: version ~ APPPATH/classes/Controller/Redsheep.php [ 30 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:09:10 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 30, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(21): Controller_Redsheep->getConfig('version')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(229): Controller_Backend->action_index(Array)
#3 /var/www/ERO/application/classes/Controller/Redsheep.php(166): Controller_Redsheep->action_backend(Array)
#4 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#7 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/ERO/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:30
2014-03-12 02:09:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:09:11 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:09:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:09:33 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:13:39 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Backend::createConfig() ~ APPPATH/classes/Controller/Backend.php [ 57 ] in file:line
2014-03-12 02:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 02:13:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:13:40 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:10 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Backend_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:20 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:20 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:32 --- EMERGENCY: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("The requested twig default//header could not be found") in "default/frontend/index" at line 1. ~ MODPATH/twig/vendor/twig/lib/Twig/Template.php [ 279 ] in /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php:238
2014-03-12 02:16:32 --- DEBUG: #0 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php(238): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php(249): Twig_Template->display(Array)
#2 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Template->render(Array)
#3 /var/www/ERO/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('default/fronten...', Array)
#4 /var/www/ERO/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#5 /var/www/ERO/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/ERO/application/classes/Controller/Redsheep.php(203): Kohana_Response->body(Object(Twig))
#7 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#10 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/ERO/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php:238
2014-03-12 02:16:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 190 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:16:32 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(190): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 190, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:190
2014-03-12 02:17:38 --- EMERGENCY: Twig_Error_Runtime [ 0 ]: An exception has been thrown during the rendering of a template ("The requested twig default//header could not be found") in "default/frontend/index" at line 1. ~ MODPATH/twig/vendor/twig/lib/Twig/Template.php [ 279 ] in /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php:238
2014-03-12 02:17:38 --- DEBUG: #0 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php(238): Twig_Template->displayWithErrorHandling(Array, Array)
#1 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php(249): Twig_Template->display(Array)
#2 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Template->render(Array)
#3 /var/www/ERO/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('default/fronten...', Array)
#4 /var/www/ERO/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#5 /var/www/ERO/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/ERO/application/classes/Controller/Redsheep.php(206): Kohana_Response->body(Object(Twig))
#7 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#10 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/ERO/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Template.php:238
2014-03-12 02:17:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:17:38 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_css ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Defaultassets_js ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:06 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:07 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Backend_index ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:13 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: Favicon.ico_index ~ APPPATH/classes/Controller/Redsheep.php [ 193 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:18:13 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(193): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/ap...', 193, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:193
2014-03-12 02:37:27 --- EMERGENCY: Twig_Exception [ 0 ]: The requested twig default/backend/index could not be found ~ MODPATH/twig/classes/Twig/Loader/CFS.php [ 33 ] in /var/www/ERO/modules/twig/classes/Twig/Loader/CFS.php:48
2014-03-12 02:37:27 --- DEBUG: #0 /var/www/ERO/modules/twig/classes/Twig/Loader/CFS.php(48): Twig_Loader_CFS->find_template('default/backend...')
#1 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Environment.php(323): Twig_Loader_CFS->getSource('default/backend...')
#2 /var/www/ERO/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Environment->loadTemplate('default/backend...')
#3 /var/www/ERO/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('default/backend...', Array)
#4 /var/www/ERO/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#5 /var/www/ERO/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/ERO/application/classes/Controller/Redsheep.php(206): Kohana_Response->body(Object(Twig))
#7 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#10 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/ERO/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/ERO/modules/twig/classes/Twig/Loader/CFS.php:48
2014-03-12 02:55:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Redsheepcore' not found ~ APPPATH/classes/Controller/Redsheep.php [ 92 ] in file:line
2014-03-12 02:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 02:55:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Redsheepcore' not found ~ APPPATH/classes/Controller/Redsheep.php [ 92 ] in file:line
2014-03-12 02:55:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 03:00:34 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Kohana_Redsheepcore::factory() should be compatible with Kohana_View::factory($file = NULL, array $data = NULL) ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 34 ] in /var/www/ERO/system/classes/Kohana/Core.php:511
2014-03-12 03:00:34 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/ERO/mo...', 34, Array)
#1 /var/www/ERO/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Kohana_Redsheep...')
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore.php(3): spl_autoload_call('Kohana_Redsheep...')
#4 /var/www/ERO/system/classes/Kohana/Core.php(511): require('/var/www/ERO/mo...')
#5 [internal function]: Kohana_Core::auto_load('Redsheepcore')
#6 /var/www/ERO/modules/redsheepcore/init.php(4): spl_autoload_call('Redsheepcore')
#7 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#8 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#9 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#10 {main} in /var/www/ERO/system/classes/Kohana/Core.php:511
2014-03-12 03:00:34 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Kohana_Redsheepcore::factory() should be compatible with Kohana_View::factory($file = NULL, array $data = NULL) ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 34 ] in /var/www/ERO/system/classes/Kohana/Core.php:511
2014-03-12 03:00:34 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', '/var/www/ERO/mo...', 34, Array)
#1 /var/www/ERO/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Kohana_Redsheep...')
#3 /var/www/ERO/modules/redsheepcore/classes/Redsheepcore.php(3): spl_autoload_call('Kohana_Redsheep...')
#4 /var/www/ERO/system/classes/Kohana/Core.php(511): require('/var/www/ERO/mo...')
#5 [internal function]: Kohana_Core::auto_load('Redsheepcore')
#6 /var/www/ERO/modules/redsheepcore/init.php(4): spl_autoload_call('Redsheepcore')
#7 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#8 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#9 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#10 {main} in /var/www/ERO/system/classes/Kohana/Core.php:511
2014-03-12 03:05:44 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 71 ] in file:line
2014-03-12 03:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 03:05:44 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 71 ] in file:line
2014-03-12 03:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 03:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 80 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:80
2014-03-12 03:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 80, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:80
2014-03-12 03:57:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: area ~ APPPATH/classes/Controller/Redsheep.php [ 80 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:80
2014-03-12 03:57:12 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(80): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/ERO/ap...', 80, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:80
2014-03-12 04:04:56 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Redsheep.php [ 103 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:103
2014-03-12 04:04:56 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/ERO/ap...', 103, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:103
2014-03-12 04:04:56 --- EMERGENCY: ErrorException [ 2 ]: Creating default object from empty value ~ APPPATH/classes/Controller/Redsheep.php [ 103 ] in /var/www/ERO/application/classes/Controller/Redsheep.php:103
2014-03-12 04:04:56 --- DEBUG: #0 /var/www/ERO/application/classes/Controller/Redsheep.php(103): Kohana_Core::error_handler(2, 'Creating defaul...', '/var/www/ERO/ap...', 103, Array)
#1 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#4 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/ERO/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/ERO/application/classes/Controller/Redsheep.php:103
2014-03-12 04:09:34 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in file:line
2014-03-12 04:09:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:09:34 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in file:line
2014-03-12 04:09:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:09:57 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 76 ] in file:line
2014-03-12 04:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:09:57 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 76 ] in file:line
2014-03-12 04:09:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:10:02 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Redsheepcore::run() should not be called statically ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 76 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:76
2014-03-12 04:10:02 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(76): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/ERO/mo...', 76, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(76): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:76
2014-03-12 04:10:02 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Redsheepcore::run() should not be called statically ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 76 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:76
2014-03-12 04:10:02 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(76): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/ERO/mo...', 76, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(76): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:76
2014-03-12 04:10:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in file:line
2014-03-12 04:10:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:10:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in file:line
2014-03-12 04:10:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:10:39 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:23
2014-03-12 04:10:39 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(23): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/ERO/mo...', 23, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(23): Kohana_Request::param()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(76): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:23
2014-03-12 04:10:39 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Kohana_Request::param() should not be called statically ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:23
2014-03-12 04:10:39 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(23): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/ERO/mo...', 23, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(23): Kohana_Request::param()
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(76): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:23
2014-03-12 04:11:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Request as array ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 24 ] in file:line
2014-03-12 04:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:11:40 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Request as array ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 24 ] in file:line
2014-03-12 04:11:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:12:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in file:line
2014-03-12 04:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:12:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 23 ] in file:line
2014-03-12 04:12:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:14:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Twig as array ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 265 ] in file:line
2014-03-12 04:14:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:14:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Twig as array ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 265 ] in file:line
2014-03-12 04:14:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 04:57:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: area ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 148 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:148
2014-03-12 04:57:55 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(148): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/mo...', 148, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(248): Kohana_Redsheepcore::getTemplate('area')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(67): Kohana_Redsheepcore::callTemplate('Twig')
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:148
2014-03-12 04:57:55 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: area ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 148 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:148
2014-03-12 04:57:55 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(148): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/mo...', 148, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(248): Kohana_Redsheepcore::getTemplate('area')
#2 /var/www/ERO/application/classes/Controller/Redsheep.php(67): Kohana_Redsheepcore::callTemplate('Twig')
#3 /var/www/ERO/system/classes/Kohana/Controller.php(84): Controller_Redsheep->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/ERO/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Redsheep))
#6 /var/www/ERO/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/ERO/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/ERO/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:148
2014-03-12 05:08:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 36 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:36
2014-03-12 05:08:51 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/ERO/mo...', 36, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(95): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:36
2014-03-12 05:08:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 36 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:36
2014-03-12 05:08:51 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(36): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/ERO/mo...', 36, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(95): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:36
2014-03-12 05:09:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 2 ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 45 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:45
2014-03-12 05:09:53 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(45): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/ERO/mo...', 45, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(104): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:45
2014-03-12 05:09:53 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 75 ] in file:line
2014-03-12 05:09:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:10:15 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in file:line
2014-03-12 05:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:10:15 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in file:line
2014-03-12 05:10:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:10:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:37 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(80): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/ERO/mo...', 80, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(109): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:37 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Request - assumed 'Request' ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:37 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(80): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/ERO/mo...', 80, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(109): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:54 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Response - assumed 'Response' ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:54 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(80): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/ERO/mo...', 80, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(109): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:54 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant Response - assumed 'Response' ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:10:54 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(80): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/ERO/mo...', 80, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(109): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:80
2014-03-12 05:15:07 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in file:line
2014-03-12 05:15:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:15:07 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in file:line
2014-03-12 05:15:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:16:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Request() ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in file:line
2014-03-12 05:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:16:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function Request() ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 80 ] in file:line
2014-03-12 05:16:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-03-12 05:17:39 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php on line 84 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:17:39 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/ERO/sy...', 43, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(84): Kohana_Controller->__construct(NULL, Object(Response))
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(113): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:17:39 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php on line 84 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:17:39 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/ERO/sy...', 43, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(84): Kohana_Controller->__construct(NULL, Object(Response))
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(113): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:27 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php on line 84 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:27 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/ERO/sy...', 43, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(84): Kohana_Controller->__construct(NULL, Object(Response))
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(112): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:27 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php on line 84 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:27 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/ERO/sy...', 43, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(84): Kohana_Controller->__construct(NULL, Object(Response))
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(112): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:28 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php on line 84 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:28 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/ERO/sy...', 43, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(84): Kohana_Controller->__construct(NULL, Object(Response))
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(112): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:28 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Controller::__construct() must be an instance of Request, null given, called in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php on line 84 and defined ~ SYSPATH/classes/Kohana/Controller.php [ 43 ] in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:18:28 --- DEBUG: #0 /var/www/ERO/system/classes/Kohana/Controller.php(43): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/ERO/sy...', 43, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(84): Kohana_Controller->__construct(NULL, Object(Response))
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(112): Kohana_Redsheepcore::run()
#3 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#4 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#5 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#6 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#7 {main} in /var/www/ERO/system/classes/Kohana/Controller.php:43
2014-03-12 05:23:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: version ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 140 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:140
2014-03-12 05:23:46 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(140): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/ERO/mo...', 140, Array)
#1 /var/www/ERO/application/classes/Controller/Backend.php(22): Kohana_Redsheepcore::getConfig('version')
#2 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(85): Controller_Backend->action_index()
#3 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(111): Kohana_Redsheepcore::run()
#4 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#5 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#6 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#7 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#8 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:140
2014-03-12 05:27:34 --- EMERGENCY: ErrorException [ 8 ]: Uninitialized string offset: 0 ~ MODPATH/redsheepcore/classes/Kohana/Redsheepcore.php [ 60 ] in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:60
2014-03-12 05:27:34 --- DEBUG: #0 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(60): Kohana_Core::error_handler(8, 'Uninitialized s...', '/var/www/ERO/mo...', 60, Array)
#1 /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php(133): Kohana_Redsheepcore::run()
#2 /var/www/ERO/modules/redsheepcore/init.php(4): Kohana_Redsheepcore::init()
#3 /var/www/ERO/system/classes/Kohana/Core.php(602): require_once('/var/www/ERO/mo...')
#4 /var/www/ERO/application/bootstrap.php(136): Kohana_Core::modules(Array)
#5 /var/www/ERO/index.php(103): require('/var/www/ERO/ap...')
#6 {main} in /var/www/ERO/modules/redsheepcore/classes/Kohana/Redsheepcore.php:60