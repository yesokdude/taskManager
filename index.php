<!DOCTYPE html>
<html>
<head>
	<title>Менеджер задач</title>
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<h1>Я запомню все, что тебе нужно сделать сегодня.</h1>

	<!--Форма и кнопка-->
	<div class="container">

		<form method="POST" action="">
			<input type="text" name="taskarea" class="form-control" id="form-control" placeholder="Введите задачу...">
		<button class="btn btn-success">Отправить</button>
		</form>
		
	</div>

	<!--Получение данных с формы и отправка в БД. -->
	<?php include_once 'db.php';
		
		if (isset($_POST['taskarea']) && ($_POST['taskarea']) != null) {
			$sql = "INSERT INTO task_table (task) VALUES ('{$_POST['taskarea']}')";
			$query = mysqli_query($conn, $sql);
			
		
		}

		

	?>
	<h6>Список задач:</h6>

	<div class="taskList">
		<?php 

		$queryTaskList = "SELECT * FROM task_table";
		$result = mysqli_query($conn, $queryTaskList) or die('Ошибка вывода');
		
		while ($row = $result->fetch_assoc()) {
			echo $row['task'].'<br/>';

		}

		?>
	</div>


</body>
</html>