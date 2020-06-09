<?php 
include 'db.php';
$car_result = mysqli_query($db_connect, "SELECT * FROM automobile") or die(mysqli_error($car_result));
//pre_r($car_result);
//pre_r($car_result->fetch_assoc()); проверочки
?>

<div class="col">
	<table class="table">
		<thead>
			<tr>
				<th class="hat">диллер</th>
				<th class="hat">модель</th>
				<th class="hat">год</th>
				<th class="hat">коробка передач <br>вид</th>
				<th class="hat">лошадинные силы <br>л.с.</th>
				<th class="hat">мощность двигателя<br>кВт</th>
				<th class="hat" colspan="2">Действия</th>
			</tr>
		</thead>
		<?php while ($row = $car_result->fetch_assoc()): ?>
		<tr>
			<td><?php  echo $row['dealer']; ?></td>
			<td><?php  echo $row['model']; ?></td>
			<td><?php  echo $row['year']; ?></td>
			<td><?php  echo $row['gearbox']; ?></td>
			<td><?php  echo $row['horse_power']; ?></td>
			<td><?php  echo $row['engine_power']; ?></td>
			<td>
				<a href="./lib/update.php?edit=<?php echo $row['id']; ?>" class = "btn btn-info mb-1">Редактировать</a>
				<a href="./lib/delete.php?delete=<?php echo $row['id']; ?>" class = "btn btn-danger">Удалить</a>
			</td>
		</tr>	
	<?php endwhile; ?>
	</table>

</div>

<?php
function pre_r($array) {
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}
?>