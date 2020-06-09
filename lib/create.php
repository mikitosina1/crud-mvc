<?php 
session_start();
include './db.php';
// $row = '';
// $dealer = '';
// $model = '';
// $year = '';
// $gearbox = '';
// $horse = '';
// $PEngine = '';
if (isset($_POST['create'])) {
	$dealer = trim(filter_var($_POST['dealer'], FILTER_SANITIZE_STRING));
	$model = trim(filter_var($_POST['model'], FILTER_SANITIZE_STRING));
	$year = $_POST['year'];
	$gearbox = $_POST['gearbox'];
	$horse = $_POST['horse_power'];
	$PEngine = $_POST['engine_power'];

	$result = mysqli_query($db_connect, "INSERT INTO automobile (dealer, model, year, gearbox, horse_power, engine_power) VALUES ('$dealer', '$model', '$year', '$gearbox', '$horse', '$PEngine' )") or die(mysqli_error($result));
	$_SESSION['message'] = "Сохранено, изменения внесены.";
	$_SESSION['msg_type'] = "success";
}

	header('Location: http://localhost/crud-mvc/', true, 301);
	exit;
?>