<?php
session_start();
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="ru">

<head>	
	<title>Простое CRUD прил-е</title>
	<?php include './lib/head.php';?>
	<link rel="stylesheet" href="./styles/mainstyle.css">
</head>

<body>
	<div class="container">
		<?php 
		include_once './lib/nav.php'; 
		include './lib/db.php';
		if (isset($_SESSION['message'])) :
		?>

		<div class='alert alert-<?=$_SESSION['msg_type'];?> alert-dismissible fade show mb-1 mt-1' role='alert'>
			<?php 
			echo $_SESSION['message'];
			unset($_SESSION['message']);
			?>	
			<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			<span aria-hidden='true'>&times;</span>
		</div>
		<?php endif; ?>
		<div class="row">
			<div class="col left">
				<?php include './lib/table.php'; ?>
			</div>
			<div class="col right">
				<form action="./lib/create.php" method="POST" class="FormA">
					<input type="text" class="form-control mt-2" placeholder="диллер" aria-label="dealer" aria-describedby="dealer" id="dealer" 
					name="dealer" value="<?php echo $dealer; ?>">
					<input type="text" class="form-control mt-2" placeholder="модель" aria-label="model" aria-describedby="model" id="model" 
					name="model" value="<?php echo $model; ?>">
					<input type="text" class="form-control mt-2" placeholder="год выпуска" aria-label="year" aria-describedby="year" id="year" 
					name="year" value="<?php echo $year; ?>">
					<select class="custom-select form-control mt-2" id="inputGroupSelect" 
					name="gearbox"  value="<?php echo $gearbox; ?>">
						<option selected>Выбор коробки передач</option>
						<option value="ручная">ручная</option>
						<option value="полуавтомат">полуавтомат</option>
						<option value="автомат">автомат</option>
					</select>
					<input type="text" class="form-control mt-2" placeholder="лошадинные силы" aria-label="horse_power" aria-describedby="horse_power" id="horse_power" 
					name="horse_power" value="<?php echo $horse; ?>">
					<input type="text" class="form-control mt-2" placeholder="мощность двигателя" aria-label="engine_power" aria-describedby="engine_power" id="engine_power" 
					name="engine_power"  value="<?php echo $PEngine; ?>">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<?php if ($update == true): ?>
						<button type="submit" class="btn btn-warning mt-2 ml-1 mr-2" name="update">
							Редактировать
						</button>
						<a href="http://localhost/crud-mvc/index.php" class="btn btn-success mt-2 ml-1 mr-2">
							Назад
						</a>
					<?php else: ?>
						<button type="submit" class="btn btn-success mt-2 ml-1 mr-2" name="create">
							Создать
						</button>
					<?php endif; ?>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<?php include './lib/footer.php';?>
	</footer>
</body>

</html>
