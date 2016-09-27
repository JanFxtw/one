<?
session_start();
header("Cache-control: private");  // IE 6 Fix.

$db = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', '127eq63mau');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
function yumdata_master($sql, $array = ''){
  global $db;
	try {
		if(gettype($array) == 'array'){
			$stmt = $db->prepare($sql);
			$stmt->execute($array);
		} else {
			$stmt = $db->query($sql);
		}
		$rows = $stmt->fetch(PDO::FETCH_ASSOC);
		return $rows;
	} catch(PDOException $ex) {
		echo "Database Query Failed.";
	}
}

function yumdata_do($sql, $array = ''){
	global $db;
	try {
		if(gettype($array) == 'array'){
			$stmt = $db->prepare($sql);
			$stmt->execute($array);
		} else {
			$stmt = $db->query($sql);
		}
	} catch(PDOException $ex) {
		echo "Database Submit Failed.";
	}
}

function yumdata_master2($sql, $array = ''){
	global $db;
	$data = '';
	try {
		//echo gettype($array);
		if(gettype($array) == 'array'){
			$stmt = $db->prepare($sql);
			$stmt->execute($array);
		} else {
			$stmt = $db->query($sql);
		}
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//print_r($rows);
		foreach($rows AS $r){
			$data[] = $r;
		}
		return $data;
	} catch(PDOException $ex) {
		echo "Database Query Array Failed.";
	}
}
?>