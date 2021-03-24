<!DOCTYPE HTML >
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">
		<title>Beer Company</title>
		<meta name="keywords" content="business, website">
		<meta name="description" content="Beer Company">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		
	</head>
	<body>
		
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

		<div id="header">
			<div id="logo"><span id="company_name">Страна пива</span><span id="company_name_shadow">Страна пива</span></div>
			<ul>
				<li id="menu_li_1"><a href="index.php">Главная</a></li>
				<li><a href="recomendation.php">Рекомендуем</a></li>
				<?php
					if ($_login==null){
						
						echo '<li><a href="login.php">Вход</a></li>';
					}
					else
					{
						echo '<li>'.$_login.'</li>';
					}
						
					
				?>
				
				
			</ul>
		</div>
		<div id="content">
			 <h1>Наши магазины</h1>
			 
			 <?php
				
				require_once 'classes.php';
				//вывод из базы через класс
				foreach ($_shops as $a){
					$a->show();
				}
			 ?>
			 
			 
			
			 
			 
		</div>
		
		
			
		<div id="footer">
			<span><a href="index.html">Главная</a>|<a href="about.html">О нас</a>|<a href="clients.html">Наши клиенты</a>|<a href="recomendation.html">Рекомендуем</a>|<a href="price.html">Цены</a>|<a href="contacts.html">Контактные данные</a>|<a href="new.html">Красивые таблички</a>
			</span>
			<p>&nbsp;&copy; 2009 ООО ПЕННОЕ.</p>
		</div>
	</body>
</html>