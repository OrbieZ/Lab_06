<?php
require 'functions.php';
?>

<html>
<head>
	<title>Lab_03</title>
	<style>
		.header {
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
		
		.sidebar {
			float: left;
			width: 200px;
			background-color: #f1f1f1;
			padding: 10px;
		}
		
		.content {
			margin-left: 220px;
			padding: 10px;
		}
		
		.footer {
			clear: both;
			background-color: #333;
			color: #fff;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="header">
		<h1>Сайт новин</h1>
		<p><nav>
	<ul>
		<li><a href="#about">Про нас</a></li>
		<li><a href="#services">Послуги</a></li>
		<li><a href="#contact">Контакти</a></li>
	</ul>
</nav></p>
	</div>
	
	<div class="sidebar">
		<h2>Таблиця курсу валют:</h2>
		<p><table>
		<tr>
			<th>Курс</th>
			<th>Валюта 1</th>
			<th>Валюта 2</th>
		</tr>
		<tr>
			<td>USD - UAH</td>
			<td>1 USD</td>
			<td>36,91 UAH</td>
		</tr>
		<tr>
			<td>EUR - UAH</td>
			<td>1 EUR</td>
			<td>40,96 UAH</td>
		</tr>
		<tr>
			<td>PLN - UAH</td>
			<td>1 PLN</td>
			<td>8,79 UAH</td>
		</tr>
	</table></p>
	</div>
	
	<div class="content">
		<h2>Новини</h2>
<h2>Таблиця АПЛ після 31 туру:</h2>
		<p><img src="https://img.tsn.ua/cached/249/tsn-28424b79aaed18622b3ebc9e28e9f35e/thumbs/608xX/e7/4e/6cc9e3f8fcbe791436906f27205d4ee7.png" alt="Випадкове зображення">
	
	<h2>Бойові втрати противника:</h2>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/eBykTXUie1M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</body></p>
	</div>
	
	<div class="footer">
		<p>© 2023, Усі права захищено</p>
	</div>
</body>
</html>
   
   <p>Дата: <?php echo date('Y-m-d'); ?></p> <!-- Відображення дати -->

   <h2>Коментарі</h2>
   <?php generate_comments('index'); ?> <!-- Відображення коментарів -->

   <h2>Додати коментар</h2>
   <?php
   if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Отримання даних з форми
      $name = $_POST['name'];
      $comment = $_POST['comment'];

      // Додавання коментаря
      add_comment('index', $name, $comment);
   }
   ?>

   <form method="POST" action="">
      <input type="text" name="name" placeholder="Ім'я" required><br>
      <textarea name="comment" placeholder="Коментар" required></textarea><br>
      <button type="submit">Додати коментар</button>
   </form>
</body>
</html>
