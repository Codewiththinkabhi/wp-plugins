<?php
/*
*Plugin Name: Current year Shortcode Plugin 
*Description: This plugin is used to create shortcode 
*Version:1.0
*Author: Abhishek Jaiswal 
*/


//Shortcode for current year Automatically keeps the year updated without editing your footer manually
//[year]
add_shortcode('year','current_year_shortcode');

function current_year_shortcode (){
return date ('Y');
}

?>
