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
			require_once 'userCheck.php';
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
			<script src="scripts\functionsAdmin.js"></script>
			<script>
				var ControlsCount=0;
			</script>
			 <input type="button" id="addshopbutton" onclick="ShowAddControls()" value="Добавить новый магазин"><input id="delshopbutton" style="margin-left: 10px;" type="button" value="Удалить магазин"><br>
			 <table id="addshopcontrol" style="visibility: collapse;">
				<tr><td><input type="button" value="+" onclick="AddAddControls()"></td><td><input type="button" value="-" onclick="DeleteAddControls()"></td></tr> 
				<tr id="shop0"><td>ID</td><td><input name="IDInput" type="text"></td><td>Адресс</td><td><input name="AdressInput" type="text"></td><td>Статус</td><td><input name="StatusInput" type="text"></td></tr>
				 
			 </table>
			 <br>
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