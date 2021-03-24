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
		<div id="header">
			<div id="logo"><span id="company_name">Страна пива</span><span id="company_name_shadow">Страна пива</span></div>
			<ul>
				<li id="menu_li_1"><a href="index.php">Главная</a></li>
			</ul>
		</div>
       <div id="content">
	   <form action="index.php" method="post" style="text-align: center;">
			<label>
				Логин <input type="text" name="login">
			</label>
			<br>
			<label>
				Пароль <input type="password" name="password">
			</label>
			<br>
			<input type="submit" value="Войти">
			<button onclick="window.location.href = 'registration.php';">Зарегестрироваться</button>
		</form>
		
	   </div> 
		

		<div id="footer">
			<span><a href="index.html">Главная</a>|<a href="about.html">О нас</a>|<a href="clients.html">Наши клиенты</a>|<a href="recomendation.html">Рекомендуем</a>|<a href="price.html">Цены</a>|<a href="contacts.html">Контактные данные</a>|<a href="new.html">Красивые таблички</a>
			</span>
			<p>&nbsp;&copy; 2009 ООО ПЕННОЕ.</p>
		</div>
	</body>
</html>