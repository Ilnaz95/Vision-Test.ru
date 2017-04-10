
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Проверка зрения онлайн</title>
    <!-- Свои пользовательские стили -->
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>

<div class="field">

<ul class="top-menu">
<li><a href="#">Интересные факты о зрении</a></li>
<li><a href="#">Здоровье ваших глаз</a></li>
<li><a href="#">Как видеть лучше?</a></li>
<li><a href="#">Контакты</a></li>
</ul><br>

<div align="center">
	<form action="" method="post">
	   <input type="search" name="" placeholder="Поиск" class="input" />
	</form>
</div>

<h1>ТЕСТЫ ДЛЯ САМОСТОЯТЕЛЬНОЙ ПРОВЕРКИ ЗРЕНИЯ:
<br>ПРОВЕРКА ОСТРОТЫ ЗРЕНИЯ</h1>

<div class="recommendation">
<i><p><b>ДЛЯ ПОЛУЧЕНИЯ ЛУЧШЕГО РЕЗУЛЬТАТА ТЕСТИРОВАНИЯ НЕОБХОДИМО<br>
СОБЛЮДАТЬ СЛЕДУЮЩИЕ УСЛОВИЯ:</b></p>
<ol><li>Пожалуйста, сядьте на расстояние 50 - 70 см от экрана.</li>
<li>Во время проверки зрения на компьютере не жмурьтесь, держите голову ровно. Желательно, чтобы глаза и монитор
были на одном уровне.</li></ol></i>
</div>

<ul class="sub-menu">
<li><a href="#">Проверка остроты зрения</a></li>
<li><a href="#">Проверка контрастной чувствительности</a></li>
<li><a href="#">Проверка цветоощущения</a></li>
<li><a href="#">Дуохромный тест</a></li>
<li><a href="#">Лучистая фигура</a></li>
</ul><br>

<div class="block_eye_test1">
<input type="submit" id="button1" name="button1" value=" Кнопка1 "/><br>
<input type="submit" id="button2" name="button2" value=" Кнопка2 " />
<img align="middle" id="image" src="../img/image.png" >
<input type="submit" id="button3" name="button3" value=" Кнопка3 " /><br>
<input type="submit" id="button4" name="button4" value=" Кнопка4 " /><br>
</div>



<!-- Список офтальмологических клиник Перми:
<?php
/*$html = file_get_contents('C:\openserver\domains\Vision-Test.ru\1.txt');
preg_match_all('/\s+<a class="companies__item-title-text".*?>\s+(.+?)\s+<\/a>/', $html, $names);
preg_match_all('/\s+<div class="companies__item-address">\s+(.+?)\s+<\/div>/', $html, $adress);
echo '<select class="Clinics">'; $i=0;
foreach ($names[1] as $name) {
	$str=substr($adress[1][$i], 27); $i++;
	echo '<option>' . '"'. $name . '"' . $str . '</option>';
}
echo '</select>';*/
?> -->


<!-- PHP Simple HTML DOM Parser -->
Список офтальмологических клиник Перми:
<?php
require_once 'simple_html_dom.php';
$data = file_get_html('https://www.yell.ru/perm/top/glaznie-kliniki/');
if($data->innertext!='' and count($data->find('.companies__item-title'))){
	echo '<select class="Clinics" onchange="window.location.href=this.options[this.selectedIndex].value">'; $i=0;
		foreach($data->find('.companies__item-title > a') as $name){
		$adress = $data->find('.companies__item-address', $i)->plaintext; $i++;
		echo '<option value="https://www.yell.ru/'.$name->href.'">' . $name->plaintext . substr($adress, 52) .'</option>';
  		}
  		echo '</select>';
}

$data->clear();// подчищаем за собой
unset($data);
?>











<div id="footer">
   &copy; ЭТФ, Группа АСУ-14, Россия, 2017 г.<br>
  </div>
</div>


</body>
</html>
