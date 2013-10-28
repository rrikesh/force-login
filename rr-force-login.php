<?php

/**
   Plugin name: Force Login
   Plugin URI: https://github.com/rrikesh/force-login
   Author: Rikesh Ramlochund
   Author URI: http://rrikesh.com
   Description: Plugin that restricts access only to logged-in users. Can be used as a must-use plugin too.
   Version: 1.0
*/

class RR_ForceLogin{

function __construct(){
  add_action( 'template_redirect', array( $this, 'redirect_user_to_the_login_page' ) );
}

/**
 * Force users not logged in to the login page
 */
function redirect_user_to_the_login_page() {
  if ( !is_user_logged_in() ) {
    wp_redirect( wp_login_url(), 302 );
    exit;
  }
}

}

new RR_ForceLogin();
