<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-28 01:47:26 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ MODPATH/twig/classes/Kohana/Twig.php [ 21 ] in file:line
2014-02-28 01:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/www.de...', 21, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(21): mkdir('/var/www/www.de...', 493, true)
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(36): Kohana_Twig::_init_cache('/var/www/www.de...')
#3 /var/www/www.dev.gamestudiostycoon.com/modules/twig/init.php(4): Kohana_Twig::init()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Core.php(602): require_once('/var/www/www.de...')
#5 /var/www/www.dev.gamestudiostycoon.com/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(102): require('/var/www/www.de...')
#7 {main} in file:line
2014-02-28 01:47:26 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): File exists ~ MODPATH/twig/classes/Kohana/Twig.php [ 21 ] in file:line
2014-02-28 01:47:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): File e...', '/var/www/www.de...', 21, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(21): mkdir('/var/www/www.de...', 493, true)
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(36): Kohana_Twig::_init_cache('/var/www/www.de...')
#3 /var/www/www.dev.gamestudiostycoon.com/modules/twig/init.php(4): Kohana_Twig::init()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Core.php(602): require_once('/var/www/www.de...')
#5 /var/www/www.dev.gamestudiostycoon.com/application/bootstrap.php(129): Kohana_Core::modules(Array)
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(102): require('/var/www/www.de...')
#7 {main} in file:line
2014-02-28 01:47:50 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 01:47:50 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('ci_session', NULL)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('ci_session')
#2 /var/www/www.dev.gamestudiostycoon.com/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 01:47:50 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 01:47:50 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('ci_session', NULL)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('ci_session')
#2 /var/www/www.dev.gamestudiostycoon.com/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 02:38:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 02:38:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('ci_session', NULL)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('ci_session')
#2 /var/www/www.dev.gamestudiostycoon.com/index.php(118): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 02:38:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 02:38:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('ci_session', NULL)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('ci_session')
#2 /var/www/www.dev.gamestudiostycoon.com/index.php(118): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Cookie.php:67
2014-02-28 02:38:35 --- EMERGENCY: Twig_Exception [ 0 ]: The requested twig main could not be found ~ MODPATH/twig/classes/Twig/Loader/CFS.php [ 33 ] in /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php:48
2014-02-28 02:38:35 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php(48): Twig_Loader_CFS->find_template('main')
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(323): Twig_Loader_CFS->getSource('main')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Environment->loadTemplate('main')
#3 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('main', Array)
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(Twig))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php:48
2014-02-28 02:38:44 --- EMERGENCY: Twig_Exception [ 0 ]: The requested twig index could not be found ~ MODPATH/twig/classes/Twig/Loader/CFS.php [ 33 ] in /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php:48
2014-02-28 02:38:44 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php(48): Twig_Loader_CFS->find_template('index')
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(323): Twig_Loader_CFS->getSource('index')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Environment->loadTemplate('index')
#3 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('index', Array)
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(Twig))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php:48
2014-02-28 02:38:59 --- EMERGENCY: Twig_Exception [ 0 ]: The requested twig main could not be found ~ MODPATH/twig/classes/Twig/Loader/CFS.php [ 33 ] in /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php:48
2014-02-28 02:38:59 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php(48): Twig_Loader_CFS->find_template('main')
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(323): Twig_Loader_CFS->getSource('main')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Environment->loadTemplate('main')
#3 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('main', Array)
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(Twig))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Twig/Loader/CFS.php:48
2014-02-28 02:39:05 --- EMERGENCY: RuntimeException [ 0 ]: Unable to create the cache directory (/var/www/www.dev.gamestudiostycoon.com/modules/twig/cache/4f/11). ~ MODPATH/twig/vendor/twig/lib/Twig/Environment.php [ 1204 ] in /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php:323
2014-02-28 02:39:05 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(323): Twig_Environment->writeCacheFile('/var/www/www.de...', '<?php??/* main/...')
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Environment->loadTemplate('main/index')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('main/index', Array)
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(Twig))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#12 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php:323
2014-02-28 02:39:06 --- EMERGENCY: RuntimeException [ 0 ]: Unable to create the cache directory (/var/www/www.dev.gamestudiostycoon.com/modules/twig/cache/4f/11). ~ MODPATH/twig/vendor/twig/lib/Twig/Environment.php [ 1204 ] in /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php:323
2014-02-28 02:39:06 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(323): Twig_Environment->writeCacheFile('/var/www/www.de...', '<?php??/* main/...')
#1 /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php(288): Twig_Environment->loadTemplate('main/index')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/twig/classes/Kohana/Twig.php(120): Twig_Environment->render('main/index', Array)
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(228): Kohana_Twig->render()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Welcome.php(10): Kohana_Response->body(Object(Twig))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#12 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/twig/vendor/twig/lib/Twig/Environment.php:323
2014-02-28 02:54:45 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^index(?:(?P</...', '', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^index(?:(?P</...', 'favicon.ico', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^index(?:(?P</...', '', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:46 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 13 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^index(?:(?P</...', 'favicon.ico', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', '', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', 'favicon.ico', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:54 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', '', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:55 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', 'favicon.ico', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', 'test', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:56 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', 'favicon.ico', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', 'ignore', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:54:57 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: syntax error in subpattern name (missing terminator) at offset 8 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2014-02-28 02:54:57 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/var/www/www.de...', 423, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Route.php(423): preg_match('#^(?:(?P</path>...', 'favicon.ico', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(466): Kohana_Route->matches(Object(Request))
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(938): Kohana_Request::process(Object(Request), Array)
#4 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#5 {main} in file:line
2014-02-28 02:59:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_file' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 02:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 02:59:32 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_file' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 02:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 02:59:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_file' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 02:59:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 02:59:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_file' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 02:59:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:05 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:00:06 --- EMERGENCY: ErrorException [ 1 ]: Class 'Test_File' not found ~ APPPATH/classes/Controller/Launcher.php [ 12 ] in file:line
2014-02-28 03:00:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:12 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:30 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:03:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:03:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:15 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:45 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:04:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:04:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:50 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:50 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:51 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:52 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:53 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:53 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:04:53 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:23 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:23 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:23 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:24 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:26 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:26 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:26 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:26 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:27 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/View.php:137
2014-02-28 03:05:36 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:05:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:05:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:05:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:05:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:05:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:05:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:05:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:08:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:08:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:08:41 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_member' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:08:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:09:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:09:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 03:09:42 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-02-28 03:09:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:12:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'gst.configs' doesn't exist [ SHOW FULL COLUMNS FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/MySQL.php:359
2014-02-28 04:12:39 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('configs')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Model.php(26): Kohana_ORM->__construct()
#6 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(42): Kohana_Model::factory('config')
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/MySQL.php:359
2014-02-28 04:12:39 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'gst.configs' doesn't exist [ SHOW FULL COLUMNS FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/MySQL.php:359
2014-02-28 04:12:39 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('configs')
#2 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Model.php(26): Kohana_ORM->__construct()
#6 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(42): Kohana_Model::factory('config')
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#13 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/MySQL.php:359
2014-02-28 04:18:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method ORM::_construct() ~ APPPATH/classes/Model/config.php [ 35 ] in file:line
2014-02-28 04:18:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:18:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method ORM::_construct() ~ APPPATH/classes/Model/config.php [ 35 ] in file:line
2014-02-28 04:18:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:19:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT ("id")' in 'field list' [ SELECT `COUNT ("id")` AS `configElements` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:06 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT (...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:06 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT ("id")' in 'field list' [ SELECT `COUNT ("id")` AS `configElements` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:06 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT (...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `configElements` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `configElements` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:19:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `configElements` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:18 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `configElements` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/Kohana/Database.php [ 507 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database.php:507
2014-02-28 04:26:25 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/www.de...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#3 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#12 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database.php:507
2014-02-28 04:26:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH/database/classes/Kohana/Database.php [ 507 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database.php:507
2014-02-28 04:26:25 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', '/var/www/www.de...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query/Builder/Select.php(354): array_map(Array, Array)
#3 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#12 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database.php:507
2014-02-28 04:26:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:32 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:26:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:27:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: counter ~ APPPATH/classes/Model/config.php [ 35 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php:35
2014-02-28 04:27:09 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 35, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php:35
2014-02-28 04:27:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: counter ~ APPPATH/classes/Model/config.php [ 35 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php:35
2014-02-28 04:27:09 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 35, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php:35
2014-02-28 04:27:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `total_users` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:27:20 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(35): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:27:20 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `total_users` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:27:20 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(35): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:28:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Model/config.php [ 34 ] in file:line
2014-02-28 04:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:28:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::find_all() ~ APPPATH/classes/Model/config.php [ 34 ] in file:line
2014-02-28 04:28:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:28:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `total_users` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:28:46 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:28:46 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `total_users` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:28:46 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(34): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("username")' in 'field list' [ SELECT `COUNT("username")` AS `total_users` FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:17 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(37): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:17 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("username")' in 'field list' [ SELECT `COUNT("username")` AS `total_users` FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:17 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(37): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/config.php [ 37 ] in file:line
2014-02-28 04:30:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:30:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Model/config.php [ 37 ] in file:line
2014-02-28 04:30:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:30:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("username")' in 'field list' [ SELECT `COUNT("username")` AS `total_users` FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:54 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(37): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("username")' in 'field list' [ SELECT `COUNT("username")` AS `total_users` FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:30:54 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(37): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:31:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `total_users` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:31:23 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(36): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:31:23 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'COUNT("name")' in 'field list' [ SELECT `COUNT("name")` AS `total_users` FROM `configs` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:31:23 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `COUNT("...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Model/config.php(36): Kohana_Database_Query->execute()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(43): Model_Config->getCount()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:32:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Config::getCount() ~ APPPATH/classes/Controller/Launcher.php [ 43 ] in file:line
2014-02-28 04:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:32:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Config::getCount() ~ APPPATH/classes/Controller/Launcher.php [ 43 ] in file:line
2014-02-28 04:32:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:35:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Config' not found ~ APPPATH/classes/Controller/Launcher.php [ 41 ] in file:line
2014-02-28 04:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:35:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Config' not found ~ APPPATH/classes/Controller/Launcher.php [ 41 ] in file:line
2014-02-28 04:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:35:13 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `configs` (`name`, `value`) VALUES ('host', 'ASD') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:35:13 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(44): Kohana_ORM->save()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:35:13 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `configs` (`name`, `value`) VALUES ('host', 'ASD') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:35:13 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(44): Kohana_ORM->save()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/database/classes/Kohana/Database/Query.php:251
2014-02-28 04:36:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2014-02-28 04:36:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:36:33 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2014-02-28 04:36:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:36:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2014-02-28 04:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:36:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2014-02-28 04:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:42:32 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, string given, called in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php on line 42 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:775
2014-02-28 04:42:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/www.de...', 775, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(42): Kohana_ORM->values('name')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:775
2014-02-28 04:42:32 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, string given, called in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php on line 42 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 775 ] in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:775
2014-02-28 04:42:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/www.de...', 775, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(42): Kohana_ORM->values('name')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:775
2014-02-28 04:47:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The version property does not exist in the Model_Config class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:603
2014-02-28 04:47:49 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('version')
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(49): Kohana_ORM->__get('version')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:603
2014-02-28 04:47:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The version property does not exist in the Model_Config class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:603
2014-02-28 04:47:49 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('version')
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(49): Kohana_ORM->__get('version')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:603
2014-02-28 04:48:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getConfig() ~ APPPATH/classes/Controller/Launcher.php [ 52 ] in file:line
2014-02-28 04:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:48:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getConfig() ~ APPPATH/classes/Controller/Launcher.php [ 52 ] in file:line
2014-02-28 04:48:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:48:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getConfig() ~ APPPATH/classes/Controller/Launcher.php [ 52 ] in file:line
2014-02-28 04:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:48:16 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getConfig() ~ APPPATH/classes/Controller/Launcher.php [ 52 ] in file:line
2014-02-28 04:48:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 04:50:38 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Launcher::getConfig(), called in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php on line 55 and defined ~ APPPATH/classes/Controller/Launcher.php [ 22 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:22
2014-02-28 04:50:38 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/www.de...', 22, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(55): Controller_Launcher->getConfig()
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:22
2014-02-28 04:50:39 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Launcher::getConfig(), called in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php on line 55 and defined ~ APPPATH/classes/Controller/Launcher.php [ 22 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:22
2014-02-28 04:50:39 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(22): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/www.de...', 22, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(55): Controller_Launcher->getConfig()
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:22
2014-02-28 06:18:04 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Updater::set() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Launcher.php [ 105 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:105
2014-02-28 06:18:04 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/www.de...', 105, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:105
2014-02-28 06:18:05 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Updater::set() should not be called statically, assuming $this from incompatible context ~ APPPATH/classes/Controller/Launcher.php [ 105 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:105
2014-02-28 06:18:05 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/www.de...', 105, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:105
2014-02-28 06:29:54 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Updater.php [ 52 ] in file:line
2014-02-28 06:29:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:29:54 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/classes/Updater.php [ 52 ] in file:line
2014-02-28 06:29:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:33:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Updater.php [ 54 ] in file:line
2014-02-28 06:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:33:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Updater.php [ 54 ] in file:line
2014-02-28 06:33:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:35:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _currentVersion ~ APPPATH/classes/Updater.php [ 60 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:60
2014-02-28 06:35:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 60, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Updater::checkVersion('none')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:60
2014-02-28 06:35:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: _currentVersion ~ APPPATH/classes/Updater.php [ 60 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:60
2014-02-28 06:35:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 60, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Updater::checkVersion('none')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:60
2014-02-28 06:39:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:49 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:39:50 --- EMERGENCY: ErrorException [ 1 ]: Class 'Install' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:39:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:40:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Updates_Installer' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:40:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'Updates_Installer' not found ~ APPPATH/classes/Updater.php [ 80 ] in file:line
2014-02-28 06:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 06:40:32 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Updates_Installer::start() should not be called statically ~ APPPATH/classes/Updater.php [ 80 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:80
2014-02-28 06:40:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(80): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/www.de...', 80, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(80): Updates_Installer::start()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(67): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Updater::checkVersion('none')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:80
2014-02-28 06:40:32 --- EMERGENCY: ErrorException [ 2048 ]: Non-static method Updates_Installer::start() should not be called statically ~ APPPATH/classes/Updater.php [ 80 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:80
2014-02-28 06:40:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(80): Kohana_Core::error_handler(2048, 'Non-static meth...', '/var/www/www.de...', 80, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(80): Updates_Installer::start()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(67): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Updater::checkVersion('none')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:80
2014-02-28 06:49:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The version property does not exist in the Model_Config class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:702
2014-02-28 06:49:05 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('version', '0.4.0')
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Installer.php(30): Kohana_ORM->__set('version', '0.4.0')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Installer.php(19): Updates_Installer::updateVersion()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(80): Updates_Installer::start()
#4 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(67): Updater::doUpdates()
#5 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Updater::checkVersion('none')
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#12 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:702
2014-02-28 06:49:05 --- EMERGENCY: Kohana_Exception [ 0 ]: The version property does not exist in the Model_Config class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:702
2014-02-28 06:49:05 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('version', '0.4.0')
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Installer.php(30): Kohana_ORM->__set('version', '0.4.0')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Installer.php(19): Updates_Installer::updateVersion()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(80): Updates_Installer::start()
#4 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(67): Updater::doUpdates()
#5 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(105): Updater::checkVersion('none')
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#12 {main} in /var/www/www.dev.gamestudiostycoon.com/modules/orm/classes/Kohana/ORM.php:702
2014-02-28 06:50:02 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:02 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:07 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:50:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:18 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:18 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:34 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:51:35 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:12 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:12 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:12 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:24 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:37 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:37 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:52:38 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 06:53:43 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:95
2014-02-28 06:53:43 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(95): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:95
2014-02-28 06:53:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:95
2014-02-28 06:53:44 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(95): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:95
2014-02-28 07:00:12 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant versionPrefix - assumed 'versionPrefix' ~ APPPATH/classes/Updater.php [ 83 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:83
2014-02-28 07:00:12 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(83): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/www.de...', 83, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.4.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:83
2014-02-28 07:00:13 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant versionPrefix - assumed 'versionPrefix' ~ APPPATH/classes/Updater.php [ 83 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:83
2014-02-28 07:00:13 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(83): Kohana_Core::error_handler(8, 'Use of undefine...', '/var/www/www.de...', 83, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.4.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:83
2014-02-28 07:10:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function emtpy() ~ APPPATH/classes/Updater.php [ 102 ] in file:line
2014-02-28 07:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:10:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function emtpy() ~ APPPATH/classes/Updater.php [ 102 ] in file:line
2014-02-28 07:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:10:56 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ SYSPATH/classes/Kohana/Profiler.php [ 41 ] in file:line
2014-02-28 07:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:10:57 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ SYSPATH/classes/Kohana/Profiler.php [ 41 ] in file:line
2014-02-28 07:10:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:18:17 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 433 ] in file:line
2014-02-28 07:18:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:18:18 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 433 ] in file:line
2014-02-28 07:18:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:33:00 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 433 ] in file:line
2014-02-28 07:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:33:01 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Updater.php [ 99 ] in file:line
2014-02-28 07:33:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:33:50 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Updater.php [ 99 ] in file:line
2014-02-28 07:33:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:33:50 --- EMERGENCY: ErrorException [ 1 ]: Class name must be a valid object or a string ~ APPPATH/classes/Updater.php [ 99 ] in file:line
2014-02-28 07:33:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:34:36 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database.php [ 505 ] in file:line
2014-02-28 07:34:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:34:37 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database.php [ 505 ] in file:line
2014-02-28 07:34:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:41:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/Updater.php [ 102 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:41:47 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 102, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:41:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/Updater.php [ 102 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:41:47 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 102, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:42:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/Updater.php [ 102 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:42:04 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 102, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(105): Updater::checkVersion(Array)
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#4 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('none')
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#11 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:42:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: status ~ APPPATH/classes/Updater.php [ 102 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:42:04 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(102): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 102, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(105): Updater::checkVersion(Array)
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(68): Updater::doUpdates()
#4 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.4.0')
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#11 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:102
2014-02-28 07:46:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: updateClass ~ APPPATH/classes/Updater.php [ 84 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:46:06 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 84, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:46:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: updateClass ~ APPPATH/classes/Updater.php [ 84 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:46:06 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 84, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:47:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: update ~ APPPATH/classes/Updater.php [ 108 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:108
2014-02-28 07:47:24 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 108, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(81): Updater::getAvailableUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:108
2014-02-28 07:47:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: update ~ APPPATH/classes/Updater.php [ 108 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:108
2014-02-28 07:47:25 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(108): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 108, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(81): Updater::getAvailableUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:108
2014-02-28 07:47:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: updateClass ~ APPPATH/classes/Updater.php [ 84 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:47:54 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 84, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:47:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: updateClass ~ APPPATH/classes/Updater.php [ 84 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:47:54 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/www.de...', 84, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#9 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php:84
2014-02-28 07:55:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Updates_Archiv' not found ~ APPPATH/classes/Updater.php [ 87 ] in file:line
2014-02-28 07:55:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:55:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'Updates_Archiv' not found ~ APPPATH/classes/Updater.php [ 87 ] in file:line
2014-02-28 07:55:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:55:14 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/UpdatesUpdates_rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/UpdatesArchiv/Updates_rev50.php): No such file or directory ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:55:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:55:14 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/UpdatesUpdates_rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/UpdatesArchiv/Updates_rev50.php): No such file or directory ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:55:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:56:13 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Updates_rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Archiv/Updates_rev50.php): No such file or directory ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:56:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:56:13 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Updates_rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Archiv/Updates_rev50.php): No such file or directory ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:56:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:56:33 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Archiv/rev50.php): Permission denied ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:56:33 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Archiv/rev50.php): Permission denied ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:56:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:57:00 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Archiv/rev50.php): Permission denied ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:57:00 --- EMERGENCY: ErrorException [ 2 ]: rename(/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/rev50.php,/var/www/www.dev.gamestudiostycoon.com/application/classes/Updates/Archiv/rev50.php): Permission denied ~ APPPATH/classes/Updater.php [ 95 ] in file:line
2014-02-28 07:57:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'rename(/var/www...', '/var/www/www.de...', 95, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(95): rename('/var/www/www.de...', '/var/www/www.de...')
#2 /var/www/www.dev.gamestudiostycoon.com/application/classes/Updater.php(66): Updater::doUpdates()
#3 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(106): Updater::checkVersion('0.5.0')
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#7 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#10 {main} in file:line
2014-02-28 07:57:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Updates_' not found ~ APPPATH/classes/Updater.php [ 87 ] in file:line
2014-02-28 07:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 07:57:14 --- EMERGENCY: ErrorException [ 1 ]: Class 'Updates_' not found ~ APPPATH/classes/Updater.php [ 87 ] in file:line
2014-02-28 07:57:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 08:04:37 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database.php [ 505 ] in file:line
2014-02-28 08:04:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 08:04:38 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database.php [ 505 ] in file:line
2014-02-28 08:04:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 08:05:20 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database.php [ 505 ] in file:line
2014-02-28 08:05:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 08:05:21 --- EMERGENCY: ErrorException [ 1 ]: Maximum function nesting level of '500' reached, aborting! ~ MODPATH/database/classes/Kohana/Database.php [ 505 ] in file:line
2014-02-28 08:05:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 08:15:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: template ~ APPPATH/classes/Controller/Launcher.php [ 30 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:30
2014-02-28 08:15:31 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/www.de...', 30, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(115): Controller_Launcher->getConfig('template')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:30
2014-02-28 08:15:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: template ~ APPPATH/classes/Controller/Launcher.php [ 30 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:30
2014-02-28 08:15:32 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(30): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/www.de...', 30, Array)
#1 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(115): Controller_Launcher->getConfig('template')
#2 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#8 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:30
2014-02-28 08:15:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:15:59 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:00 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:01 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:11 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:11 --- EMERGENCY: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH/orm/classes/Kohana/ORM.php [ 966 ] in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94
2014-02-28 08:16:11 --- DEBUG: #0 /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php(94): Kohana_ORM->find()
#1 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Controller.php(84): Controller_Launcher->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Launcher))
#4 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/www.dev.gamestudiostycoon.com/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/www.dev.gamestudiostycoon.com/index.php(119): Kohana_Request->execute()
#7 {main} in /var/www/www.dev.gamestudiostycoon.com/application/classes/Controller/Launcher.php:94