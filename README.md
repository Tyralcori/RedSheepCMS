# RedSheepCMS

RedSheepCMS based on Kohana (PHP Framework), Twig (Template engine) and RedSheepCore (Meh). I started developement on 11st March.
The first official RC called "OVIS" and will be released on 11st May.

## What is RedSheepCMS?
RedSheepCMS is an lightweight content management system (in developement progress!!, i just commit the files to keep back nothing).
The user is able to add plugins, to expand the functionally part. I don't wanna release a overstuffed cms, where you need only 1/4 functions.
The most important functions are integrated. All other parts are in your hands.


## How do i execute the crons?

[SHELL] Add following line to your "/etc/crontab":
*/5 * * * *  root            php5 /path/to/redsheepcms/index.php backend/cron

[DIRECT] Call following URL:
http://yourdomain.com/backend/cron


## Twig extensions
Add following lines in 
\modules\twig\classes\Kohana\Twig.php Line 67:
// Experimental
$env->addExtension(new Twig_Extension_StringLoader());


## Whats next?
Smarty as second template engine, SOLR plugin for whatever, caching methods like APC and redis (if it is usefull), some nice templates, and last but not least a full useable backend.

## FAQ
Are you ashamed for your english?
Yep.

How do i get support?
I would setup a community forum later.

Is it free?
Yes..


Thanks for using (If you still don't using, start, and convince yourself)!
Best wishes.
