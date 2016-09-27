<?php
$is_ajax = $_REQUEST['is_ajax'];
if(isset($is_ajax) && $is_ajax) {

    $username = $_REQUEST['access_username'];
    $password = $_REQUEST['access_password'];

    if($username == 'demo' && $password == 'demo') {
        echo "success";
    } 
}
?>