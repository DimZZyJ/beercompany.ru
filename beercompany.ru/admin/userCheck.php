


<?php



					$_login = !empty($_POST['login']) ? $_POST['login'] : '';
					$_password = !empty($_POST['password']) ? $_POST['password'] : '';
					//проверка соответствия пользователя
					if ($_login !=null){
							require_once 'connection.php';
						$link1 = mysqli_connect($host,$user,$password,$database) 
							or die("Ошибка " . mysqli_error($link1));
						$query1 ="SELECT * FROM user where emai='".$_login."'";
						$result1 = mysqli_query($link1, $query1) or die("Ошибка " . mysqli_error($link1)); 
						$_user = array();
						$_user[] = mysqli_fetch_assoc($result1);
						foreach($_user as $a)
						if ($a['password']!=$_password){
							$_login=null;
							
						}
							
							
					}
					

				?>