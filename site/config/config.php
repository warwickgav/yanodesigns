<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '880bb234182d952ba686d5c2765a7f44');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('cache', false);

c::set('cachebuster', true);

c::set('cache.ignore', array('sitemap'));

c::set('timezone','AUSTRALIA');

c::set('date.handler','date');

Dir::$defaults['permissions'] = 0775;