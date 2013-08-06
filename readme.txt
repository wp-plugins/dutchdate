=== DutchDate ===
Contributors: mendezki
Tags: dutch, english, date, translate
Requires at least: 1.6
Tested up to: 3.1
Stable tag: trunk

Replaces english day and month names with their dutch equivalent

== Description ==

Using an English Wordpress install and publishing posts in Dutch? Those pesky English dates produced by `<?php the_time(); ?>` and `<?php the_date(); ?>` were getting on my nerves too, hence this plugin. Automatically converts english months and days (except for the initials, so far) to their dutch equivalent.

== Intended usage ==

Replacing dates like 'Thursday, October 22nd', for instance in your custom built theme or in themes that just use the date without 'posted by..'.

The plugin doesn't completely 'dutchify' your theme's date representation. Some template editing might be needed.

*Example:* Where some themes would say 'Posted by Harry on Thursday, October 22nd' only the date part is translated, resulting in 'Posted by Harry on Donderdag, Oktober 22'.

For complete dutchification one would  either, depending on your specific situation:

* Edit your Date Format settings under the Settings > General tab in your WordPress admin area.
* Edit your theme's template files, adapting `<?php the_time(); ?>` or `<?php the_date(); ?>` template tags or the english text around it appropriately.
For a howto on editing the time template tag, check the [Template Tags/the time Codex page](http://codex.wordpress.org/Template_Tags/the_time).
* Or, as an alternative to this plugin, use a dutch .mo language file for your theme.

== Installation ==

1. Copy the mp_dutchdate.php file to your Wordpress plugin directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. There you go!

== Changelog ==

* 1.8 Added more filters as [suggested](http://wordpress.org/support/topic/plugin-broken-due-to-non-use-of-relevant-filters) by [Marco Steinbrecher](http://wordpress.org/support/profile/macsteini)
* 1.7 Cleaned up code, Edited readme.txt
* 1.6 Repaired wrong translation of 'March' & translated months are now all lowercase. Fix by [Kim Alders](http://kimalders.nl).
* 1.5 added filter for `get_comment_date()`. To translate the comment date you'd need to swap `<?php comment_date(); ?>` with `<?php echo get_comment_date(); ?>` in your template files. Inspired by [Kim Alders](http://kimalders.nl).
* 1.4 Added translation for `<?php the_modified_time(); ?>`, `<?php the_date();?>` and `<?php the_modified_date(); ?>` template tags
* 1.3 Previously omitted August > Augustus, corrected in this version. Now also removes st, nd and th.

== Installation ==

1. Copy the mp_dutchdate.php file to your Wordpress plugin directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. There you go!
