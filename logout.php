<?php
require( 'gitauth/git.php' );

$redirect = 'http://arisharyanto.app-show.net/gitauth/';
$redirect = '/oauth/';
$git->git_user_logout($redirect);
?>
