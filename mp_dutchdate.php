<?php
/*
Plugin Name: DutchDate
Plugin URI: http://multipop.org/
Description: Translates English months and days output from WordPress template tags to their Dutch equivalent.
Version: 1.8
Author: Barry Ceelen
Author URI: http://multipop.org/
Min WP Version: 1.5.1
Max WP Version: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

function multipop_date_replace($string) {
$english = array(
'Monday','Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun',
'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th',
);

$dutch = array(
'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag', 'Zondag',
'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za', 'Zo',
'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december',
'jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec',
'1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
);

return str_replace($english, $dutch, $string);
}

add_filter('the_time', 'multipop_date_replace');
add_filter('the_date', 'multipop_date_replace');
add_filter('get_the_time', 'multipop_date_replace');
add_filter('get_the_date', 'multipop_date_replace');
add_filter('the_modified_time', 'multipop_date_replace');
add_filter('the_modified_date', 'multipop_date_replace');
add_filter('get_the_modified_time', 'multipop_date_replace');
add_filter('get_the_modified_date', 'multipop_date_replace');

?>
