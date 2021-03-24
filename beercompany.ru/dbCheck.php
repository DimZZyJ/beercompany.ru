<?php
				require_once 'connection.php'; // подключаем скрипт
				
				// подключаемся к серверу
				$link = mysqli_connect($host,$user,$password,$database) 
					or die("Ошибка " . mysqli_error($link));
				
				// выполняем операции с базой данных
				$query ="SELECT * FROM shop";
				

				$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
				$n = mysqli_num_rows($result); 
   				$_shop = array(); 
   				for($i = 0; $i < $n; $i++) $_shop[] = mysqli_fetch_assoc($result); 
				foreach($_shop as $a)
				{               echo $a['id']. "<br>";
								echo $a['adress']. "<br>";
								echo $a['status']. "<br>"; 
								echo "<br>";
				} 
				echo "Выполнение запроса прошло успешно";
				require_once 'classes.php';
				// закрываем подключение
				mysqli_close($link);
				?>