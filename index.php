<?php
//session_start();
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">

<head>	
	<title>Учебный сайт, главная страница</title>
	<?php include './lib/head.php';?>
	<link rel="stylesheet" href="./styles/mainstyle.css">
</head>

<body>
	<div class="container-fluid">

		<?php
		include_once './lib/nav.php';	
		include './lib/db.php';
		include './lib/create.php';
		include './lib/read.php';
		include './lib/update.php';
		include './lib/delete.php';
		?>
		
		<input type="text" class="form-control mt-2" placeholder="1 поле" aria-label="Имя пользователя" aria-describedby="basic-addon1">
		<input type="text" class="form-control mt-2" placeholder="2 поле" aria-label="Имя пользователя" aria-describedby="basic-addon1">
		<input type="text" class="form-control mt-2" placeholder="3 поле" aria-label="Имя пользователя" aria-describedby="basic-addon1">
		<button type="button" class="btn btn-success mt-2 ml-1 mr-2">Создать</button>
		<button type="button" class="btn btn-info mt-2 ml-1 mr-1">Обновить</button>
		<button type="button" class="btn btn-danger mt-2 ml-2 mr-1">Удалить</button>





		<footer>
			<?php include './lib/footer.php';?>
		</footer>
	</div>
</body>

</html>
