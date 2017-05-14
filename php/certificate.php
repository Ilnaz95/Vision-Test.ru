<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Проверка зрения онлайн</title>
    <!-- Свои пользовательские стили -->
    <link href="../css/style.css" rel="stylesheet" />
</head>
<body>

<div class="field">

<ul class="top-menu">
<li><a href="#">Интересные факты о зрении</a></li>
<li><a href="#">Здоровье ваших глаз</a></li>
<li><a href="#">Как видеть лучше?</a></li>
<li><a href="#">Контакты</a></li>
<li><a href="#">Получить сертификат</a></li>
</ul><br>

 <form  method="post" id="form">
  E-mail*:<input type="input" id="email" name="email">
  Имя*:<input type="input" id="name" name="name">
  Фамилия*:<input type="input" id="surname" name="surname">
  <input type="submit"></p>
 </form>

 <div id="res"></div>


<?
require_once 'check.php';
?>



<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="../js/validation.js"></script>

</div>
</body>
</html>