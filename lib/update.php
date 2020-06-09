<?php 
session_start();
include 'db.php';
$dealer = '';
$model = '';
$year = '';
$gearbox = '';
$horse = '';
$PEngine = '';
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$edit_result = mysqli_query($db_connect, "DELETE FROM automobile WHERE id = '$id'") or die(mysqli_error($edit_result));
	if (count($edit_result) == 1) {
		$row = $edit_result->fetch_array();
		$dealer = $row['dealer'];
		$model = $row['model'];
		$year = $row['year'];
		$gearbox = $row['gearbox'];
		$horse = $row['horse_power'];
		$PEngine = $row['engine_power'];
	}
	$_SESSION['message'] = "Изменено, изменения внесены.";
	$_SESSION['msg_type'] = "success";
}
header('Location: http://localhost/crud-mvc/', true, 301);
exit;
?>