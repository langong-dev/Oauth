<?php
require( 'gitauth/git.php' );

if($git->git_user_token()){
    $user = $git->git_user_data();
    $arr = json_decode($user, true);
	 $name=$arr['login'];
	 echo "User info is in 'arr'";
}else{
    echo 'Please Login to access this page';
}
?>
