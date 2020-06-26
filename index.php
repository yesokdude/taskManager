<!DOCTYPE html>
<html>
<head>
	<title>Менеджер задач</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<form method="POST" action="">
			<input type="text" name="taskarea" class="form-control" id="form-control" placeholder="Введите задачу...">
		<button class="btn btn-success">Отправить</button>
		</form>
		
	</div>
	<?php 
		$host = '127.0.0.1';
		$login = 'mysql';
		$password = 'mysql';
		$name_db = 'task_db';

		$conn = mysqli_connect($host, $login, $password, $name_db);

		if (isset($_POST['taskarea'])) {
			$sql = "INSERT INTO task_table (task) VALUES ('{$_POST['taskarea']}')";
			$query = mysqli_query($conn, $sql);
		
			if (query) {
				echo "добавил в бд";
			}else {
				echo "не добавил";
			}
		}

		
		
	 ?>
</body>
</html>