<?php
/*
Plugin Name: DutchDate
Plugin URI: http://multipop.org/dutchdate
Description: Translates english months and days output from WordPress template tags to their dutch equivalent.
Version: 1.9
Author: Barry Ceelen
Author URI: http://multipop.org

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function multipop_date_replace( $string ) {
	$english = array(
		'Monday','Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
		'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun',
		'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December',
		'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',
		'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th'
	);
	$dutch = array(
		'Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag', 'Zaterdag', 'Zondag',
		'Ma', 'Di', 'Wo', 'Do', 'Vr', 'Za', 'Zo',
		'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december',
		'jan', 'feb', 'mrt', 'apr', 'mei', 'jun', 'jul', 'aug', 'sep', 'okt', 'nov', 'dec',
		'1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
	);
	$string = str_replace( $english, $dutch, $string );
	return $string;
}

add_filter( 'the_time', 'multipop_date_replace' );
add_filter( 'the_date', 'multipop_date_replace' );
add_filter( 'get_the_time', 'multipop_date_replace' );
add_filter( 'get_the_date', 'multipop_date_replace' );
add_filter( 'the_modified_time', 'multipop_date_replace' );
add_filter( 'the_modified_date', 'multipop_date_replace' );
add_filter( 'get_the_modified_time', 'multipop_date_replace' );
add_filter( 'get_the_modified_date', 'multipop_date_replace' );
