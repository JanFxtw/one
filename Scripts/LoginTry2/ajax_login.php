<?
include('dbconnection.php');
if($_POST['do'] == 'login'){
  $usercount = yumdata_master("SELECT COUNT(*) AS TOT FROM `users` WHERE `username` = ? AND `password` = ?", array($_POST['b_username'], $_POST['b_password']));
	if($usercount['TOT'] == 1){
		$_SESSION['tep_username'] = $_POST['b_username'];
		echo 1;
	} else {
		echo 0;	
	}
	exit();
}
?>
