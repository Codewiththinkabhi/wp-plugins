<?php
**/
*Plugin name: my firat plugin 
*Description: A sample wordpress plugin example.
*version : 1.0
*Author Name: Abhishek Jaiswal
*/


function add_custom_messgae_to_posts ($content) {
if (is_single()){
$content.='<p><em>Thankyou for  reading this post !</em></p>';
}
return $content;
}

add_filter('the_content','add_custom_message_to_post');


?>
