<?php
	$loggedin = 0;
		if($_POST['password'] == "asd") {
			$loggedin = 1;
		}
?>

<html>
<center>
<form action="#" method="post">
	<?php if($loggedin == 0) { ?>
		<input class="text" type="password" name="password" value="   " />
		<input class="button" type="submit" value="Anmelden" />
	<?php } else if($loggedin == 1) { ?>
		hii!
	<?php } ?>
</form>
</center>
</html>