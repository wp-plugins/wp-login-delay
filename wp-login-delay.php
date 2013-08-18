<?php
/*
Plugin Name: Wordpress Login Delay
Plugin URI: http://damoiseau.me
Description: Adds a one second delay to the login to avoid brute-force attack
Version: 1.0
Author: Mike
Author URI: http://damoiseau.me
License: GPL2
*/

// @see http://codex.wordpress.org/Function_Reference/add_filter
// @see https://codex.wordpress.org/Plugin_API/Filter_Reference/wp_authenticate_user
add_filter('wp_authenticate_user', 'wld_auth_login',1, 2);
function wld_auth_login ($user, $password) {
    sleep(1);
    return $user;
}

?>
