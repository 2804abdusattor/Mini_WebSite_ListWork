<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Список дел</title>
	<link rel="stylesheet"  href="/Список_Дел/css/style.css">
	<link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<center><h1>Список дел</h1></center>
		<form action="/Список_Дел/add.php" method="post">
			<input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control" >
			<center><button type="submit" id ="submit" name="sendTask" class="btn btn-success">Добавить</button></center>
		</form>
		<?php
			require  "configDB.php";

			echo '<ul>';
			$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id`');
			while($row=$query->fetch(PDO::FETCH_OBJ)) {
				echo '<li><b>'.$row->task.'</b><a href="/Список_Дел/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
			}
			echo '</ul>';
		?>
	</div>
</body>
</html>

