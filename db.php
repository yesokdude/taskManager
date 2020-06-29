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

		$outquery = mysqli_query($conn, "SELECT * FROM task_table");
	    	
		
	 ?>