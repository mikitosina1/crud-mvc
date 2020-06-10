<?php 
session_start();
include 'db.php';
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
	header('Location: http://localhost/crud-mvc/', true, 301);
	exit;
}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$dealer = trim(filter_var($_POST['dealer'], FILTER_SANITIZE_STRING));
	$model = trim(filter_var($_POST['model'], FILTER_SANITIZE_STRING));
	$year = $_POST['year'];
	$gearbox = $_POST['gearbox'];
	$horse = $_POST['horse_power'];
	$PEngine = $_POST['engine_power'];

	$update_result = mysqli_query($db_connect, "UPDATE automobile 
		SET dealer = '$dealer', model = '$model', year = '$year', gearbox = '$gearbox', horse_power = '$horse', engine_power = '$PEngine' 
		WHERE id = $id") or die(mysqli_error($update_result));
	$_SESSION['message'] = "Отредактировано, изменения внесены.";
	$_SESSION['msg_type'] = "warning";
	header('Location: http://localhost/crud-mvc/', true, 301);
	exit;
}

	
?>