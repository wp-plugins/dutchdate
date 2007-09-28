=== DutchDate ===Contributors: mendezkiTags: dutch, english, date, translateRequires at least: 1.5Tested up to: 2.2.2Stable tag: 1.3

Replaces english day and month names with their dutch equivalent == Description ==Using an English Wordpress install and publishing posts in Dutch? Those pesky English dates produced by `<?php the_time(); ?>` were getting on my nerves too, hence this plugin. Automagically converts english months and days (except for the initials, so far) to their dutch equivalent.

**Intended usage:**

Replacing dates like 'Thursday, October 22nd', for instance in your custom built theme or themes that just use the date without 'posted by..'.
It doesn't completely 'dutchify' your theme's date representation.

Example: Where some themes would say 'Posted by Harry on Thursday, October 22nd' only the date part is translated, resulting in 'Posted by Harry on Donderdag, Oktober 22'. For complete dutchification one would either need to edit the template files, adapt `<?php the_time(); ?>` (changing 'Oktober 22 to 22 oktober) or use a dutch .po language file.
 
**Update:**

1. Previously omitted August > Augustus, corrected in this version.
2. Now also removes st, nd and th.

== Installation ==1. Copy the mp_dutchdate.php file to your Wordpress plugin directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. There you go!
