<?php
//подключение к бд
$host = 'localhost';
$db = 'crud';
$user = 'root';
$password = '';
$db_connect = mysqli_connect($host, $user, $password, $db);
if ($db_connect == false){
    print("<div class='alert alert-danger alert-dismissible fade show mb-2 mt-2' role='alert'>
			Невозможно подключиться к БД
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
		</div>" . mysqli_connect_error());
}
else {
    print(
		"<div class='alert alert-success alert-dismissible fade show bm-2 mt-2' role='alert'>
			подключено к БД
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
		</div>"
	);
}
mysqli_query($db_connect, "SET NAMES utf8");

?>