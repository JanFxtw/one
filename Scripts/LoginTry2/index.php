<?
include('dbconnection.php');
?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Default Page Title</title>
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

<? if(!isset($_SESSION['tep_username'])){ ?>
<div>
<form id="board_login" name="board_login" method="post" action="#" onsubmit="return false;">
  <input name="do" type="hidden" value="login" />
  <table width="400" border="0" cellspacing="0" cellpadding="5">
	  <tr>
		<td width="109" align="right">Username:</td>
		<td width="271"><input name="b_username" type="text" id="b_username" maxlength="50" /></td>
	</tr>
	  <tr>
		<td align="right">Password:</td>
		<td><input name="b_password" type="password" id="b_password" maxlength="50" /></td>
	</tr>
	  <tr>
		<td> </td>
		<td>
		  <input type="submit" name="button" id="button" value="Login" />
	  </td>
	</tr>
  </table>
  </form>
</div>

<? } else { ?>

<div style="height:30px; display:block;"> </div>
<h1>Welcome!</h1>
<p>You are now logged in</p>
<? } ?>

</body>
</html>
