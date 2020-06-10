<?php 
include 'db.php';
//переменные для работы с формой
$dealer = '';
$model = '';
$year = '';
$gearbox = '';
$horse = '';
$PEngine = '';
$update = false;
$id = 0;

if (isset($_GET['edit'])) {
	$id = $_GET['edit'];
	$update = true;
	$edit_result = mysqli_query($db_connect, "SELECT * FROM automobile WHERE id = '$id'") 
		or die(mysqli_error($db_connect));

	if ($edit_result && $edit_result->num_rows == 1) {
		$row = mysqli_fetch_array($edit_result);
		$dealer = $row['dealer'];
		$model = $row['model'];
		$year = $row['year'];
		$gearbox = $row['gearbox'];
		$horse = $row['horse_power'];
		$PEngine = $row['engine_power'];
	}
}
?>