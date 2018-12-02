<?php
/*
    Plugin Name: Mendrep-Mailchimp
    Plugin Script: Mendrep-Mailchimp.php
    Plugin URI:
    Description: Inserts the required HTML script tag necessary to verify Mail Chimp
    Author: Casey Smith
    License: GPL
    Version: 0.1-alpha
    Text Domain: myfogp
    Domain Path: languages/
*/

// PHP Code to verify Mailchimp
add_action('wp_head', 'injectMailChimpHTML');
function injectMailChimpHTML(){
    //HTML MailChimp script tag is placed between the closing and opening PHP tags
    // When we stop using our dev MailChimp account and move to Omar's account, we just need to replace the script tag with his tag.
    ?>
<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/f46c44e4bb3a07787df955e65/11f710908815a592ee18acd16.js");</script>
    <?php
}
?>
