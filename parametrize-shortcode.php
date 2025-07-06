<?php
/*
*Plugin Name: Shortcode Plugin 
*Description: This plugin is used to create shortcode 
*Version:1.0
*Author: Abhishek Jaiswal 
*/



//parametrize shortcode its not defult part of WordPress core. but can be utilize to write shortcode with parameters.
/*Step-by-Step Explanation
✅ 1. add_shortcode("student", "sp_handle_student_data");
What it does: This line is telling WordPress:

"Hey WordPress! When you see the shortcode [student] in a post or page, run the function sp_handle_student_data."

"student" – This is the name of the shortcode. So in WordPress, you would use it like this:
[student name="Alice" email="alice@example.com"]

"sp_handle_student_data" – This is the function that will handle the data when the shortcode is used.

✅ 2. function sp_handle_student_data($attributes) {
You're defining the function called sp_handle_student_data.

$attributes – This will hold the values passed from the shortcode (like name and email).

✅ 3. shortcode_atts(...)
This is a helper function in WordPress that:

Takes default values you want.

Replaces them if the user has provided different values via the shortcode.*/
//[student name"ram" email ="ram@mail"]

add_shortcode("student","sp_handle_student_data");

function sp_handle_student_data($attributes){

    $attributes = shortcode_atts(array(
      "name" => "Default Student",
      "email"=>:"Default Email"
    ), $attributes,"Student");
}
?>
