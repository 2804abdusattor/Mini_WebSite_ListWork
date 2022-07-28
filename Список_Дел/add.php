<?php
	$task = $_POST['task'];

	 require  "configDB.php";
	 $sql = "INSERT INTO tasks(task) VALUES(:task)";
	 $query = $pdo->prepare($sql);
	 $query->execute(['task'=> $task]);

	 header('Location: /Список_Дел/index.php');

?>