
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Проверка зрения онлайн</title>
    <!-- Свои пользовательские стили -->
    <link href="css/style.css" rel="stylesheet" />
	<script src="js/app.js" type="text/javascript"></script>
</head>
<body>

<div id="visionTest">

<ul class="top-menu">
<li><a href="#">Интересные факты о зрении</a></li>
<li><a href="#">Здоровье ваших глаз</a></li>
<li><a href="#">Как видеть лучше?</a></li>
<li><a href="#">Контакты</a></li>
<li><a href="php/certificate.php">Получить сертификат</a></li>
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


	<div id="sidebar">
		<ul>
			<li>
				<a href="#" onclick="showVA()">Проверка остроты зрения</a>
			</li>
			<li>
				<a href="#" onclick="showCS()">Проверка контрастной чувствительности</a>
			</li>
			<li >
				<a href="#" onclick="showCP()">Проверка цветоощущения</a>
			</li>
			<li>
				<a href="#" onclick="showDT()">Дуохромный тест</a>
			</li>
			<li>
				<a href="#" onclick="showAst()">Лучитая фигура(тест для выявления астигматизма)</a>
			</li>
		</ul>
	</div>

<div id="testArea">
		<h2 id="idH2"></h2>
		<div class="test" id="idCP" align="center">
			<img src="images\3.jpg" width="300" height="250" id="imageColorPerseption"><br />
			<input type="text" id="text">
			<input type="button" class="buttons" name="colorPerception" value="Проверка цветопередачи" onclick="fCP()">
       	</div>
			
		<div class="test" id="idDT" align="center">
			<img src="images\duoTest.jpg" width="810px" height="368px" id="imageDuoTest">
			<p>
				<input type="radio" name="duoTest" id="duoTest1" value="answer1">Буквы с обеих сторон одинаковые по темноте и четкости.<br/>
				<input type="radio" name="duoTest" id="duoTest2" value="answer2">Символы кажутся более четкими на красном фоне.<br/>
				<input type="radio" name="duoTest" id="duoTest3" value="answer3">Символы кажутся более четкими на зеленом фоне.<br/>
			</p>
				<input type="button" class="buttons" name="duoTest" id="duoTest" value="Проверить" onclick="fDT()">
		</div>
			
		<div class="test" id="idAst" align="center">
			<img src="images\astigmatismImg1.jpg" id="imageAstigm" width = "320px" height = "320px">
			<div  id="checkBox1">
				<input type="radio" name="astigmatism1" id="astigmatism1_1" value="vAstigmatism1_1">Лучи начинают сливаться ровно на половине своей длины.<br />
				<input type="radio" name="astigmatism1" id="astigmatism1_2" value="vAstigmatism1_2">Лучи сливаются в сплошную серую массу.<br />
				<input type="radio" name="astigmatism1" id="astigmatism1_3" value="vAstigmatism1_3">Лучи расплываются и начинают перекрываться между собой, либо сливаются с фоном.<br />
			</div>
			<div  id="checkBox2">
				<input type="radio" name="astigmatism2" id="astigmatism2_1" value="vAstigmatism2_1">Некоторые из линий становятся темнее, чем другие.<br />
				<input type="radio" name="astigmatism2" id="astigmatism2_2" value="vAstigmatism2_2">Изображение искаженное, в котором одни линии четкие, другие — размытые.<br />
				<input type="radio" name="astigmatism2" id="astigmatism2_3" value="vAstigmatism2_3">Нормальное изображение.<br />
			</div>
			<div id="checkBox3">
				<input type="radio" name="astigmatism3" id="astigmatism3_1" value="vAstigmatism3_1">Линованные квадраты одинаково черные.<br />
				<input type="radio" name="astigmatism3" id="astigmatism3_2" value="vAstigmatism3_2">Один и более квадратов выглядят серыми.<br />
			</div>
			<input type="button" class="buttons"name="bAstigmatism" value="Выполнить" onclick="fAstigmatism()">
		</div>
			
		<div class ="test" id="idVA">
			<input type="image" id="bVA1" class="bVA" src = "images\bVA1.jpg" onclick="fVA1()" id="idBVA1" width="68" height="68">
			<input type="image" id="bVA4" class="bVA" src = "images\bVA4.jpg" onclick="fVA4()" id="idBVA2" width="68" height="68"> 
			<input type="image" id="bVA2" class="bVA" src = "images\bVA2.jpg" onclick="fVA2()" id="idBVA3" width="68" height="68">
			<input type="image" id="bVA3" class="bVA" src = "images\bVA3.jpg" onclick="fVA3()" id="idBVA4" width="68" height="68">
			<img src="images\vA1.jpg" class="iVA" id="iIVA" width="68" height="68">
        </div>
			
		<div class="test" id="idCS" align="center">
			<h2 id="idTCS"></h2>
			<p><img src="images\contrastSensitivity1_1.jpg" class="classICS1" id="idICS1" width="146" height="146" onclick="trueAnswer()">
			<img src="images\contrastSensitivity1_2.jpg" class="classICS2" id="idICS2" width="146" height="146" onclick="trueAnswer()"></p>
			<img src="images\contrastSensitivity1_3.jpg" class="classICS3" id="idICS3" width="146" height="146" onclick="trueAnswer()">
			<img src="images\contrastSensitivity1_4.jpg" class="classICS4" id="idICS4" width="146" height="146" onclick="trueAnswer()">
		</div>
	</div>
<!--Парсинг-->
	<div id="clinics">
		<a href="clinics.php">
			<image src="images/clinics1.jpg" width="475px" height="200px">
		</a>
		</br>
		<a href="clinics.php" target="_blank"><div class="textA">Узнайте, где можно проверить зрение и подобрать очки или контактные линзы</div></a>
		
	</div>
		<!--Валидация-->
	<div id="letter">
		<a href="email.php">
			<image src="images/email.jpg" width="475px" height="200px">
		</a>
		</br>
		<a href="email.php" target="_blank"><div class="textA">Получить результаты тестов</div></a>
	</div>
	</div>
	<div id="clearDiv"></div>

	<div id="footer">
	&copy; ЭТФ, Группа АСУ-14, Россия, 2017 г.<br>
	</div>
</div>


</body>
</html>
