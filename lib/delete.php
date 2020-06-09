<?php 
session_start();
include 'db.php';
if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$del_result = mysqli_query($db_connect, "DELETE FROM automobile WHERE id = '$id'") or die(mysqli_error($del_result));
	$_SESSION['message'] = "Удалено, изменения внесены.";
	$_SESSION['msg_type'] = "danger";
}
header('Location: http://localhost/crud-mvc/', true, 301);
exit;
?>