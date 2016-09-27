<?php
$result = ""; $number1 = ""; $number2 = "";
if(isset($_POST['number1']) && isset($_POST['number2'])) {
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	if($_POST['dropdown'] == "option1") 		$result = $number1 + $number2;
	else if($_POST['dropdown'] == "option2") 	$result = $number1 - $number2;
	else if($_POST['dropdown'] == "option3")	$result = $number1 * $number2;
	else if($_POST['dropdown'] == "option4") 	$result = $number1 / $number2;
}
?>

<html>
<center>
<form action="#" method="post">
	<input class="text-input" 	type="text" 	name="number1" 		value="<?php echo $number1 ?>" />

    <select name="dropdown" class="input">
        <option value="option1">+</option>
        <option value="option2">-</option>
        <option value="option3">*</option>
        <option value="option4">/</option>
    </select>
    
    <input class="text-input" 	type="text" 	name="number2" 		value="<?php echo $number2 ?>" />
	<input class="button" 		type="submit" 	value="Ausrechnen" />
    <p />
    <input class="text-input" type="text" name="result" value="<?php echo $result ?>" />
</form>
</center>
</html>