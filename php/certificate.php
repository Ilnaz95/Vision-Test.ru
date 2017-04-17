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
<li><a href="php/certificate.php">Получить сертификат</a></li>
</ul><br>

 <form  method="post">
  E-mail*:<input type="input" name="email">
  Имя*:<input type="input" name="name">
  Фамилия*:<input type="input" name="surname">
  <input type="submit"></p>
 </form>


<?
function validate($email, $name, $surname) {
    $answer = array(
        "emailValid" => true,
        "nameValid" => true,
        "surnameValid" => true,
        "errorEmail" => "",
        "errorName" => "",
        "errorSurname" => ""
    );

    if (empty($email)) {
        $answer["emailValid"] = false;
        $answer["errorEmail"] = "Поле E-mail обязательно для заполнения.";
    }
    if (!(preg_match('/^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/', $email))) {
        $answer["emailValid"] = false;
        $answer["errorEmail"] .= " Некорректный E-mail.";
    }

    if (empty($name)) {
        $answer["nameValid"] = false;
        $answer["errorName"] .= " Поле имя обязательно для заполнения.";
    }
    if (!(preg_match('/^.{2,20}$/', $name))) {
        $answer["nameValid"] = false;
        $answer["errorName"] .= " Имя должно содержать от 2 до 20 букв.";
    }
    if (!(preg_match('/[a-zа-я]+/i', $name))) {
        $answer["nameValid"] = false;
        $answer["errorName"] .= " Некорректное имя.";
    }

    if (empty($surname)) {
        $answer["surnameValid"] = false;
        $answer["errorSurname"] .= " Поле фамилия обязательно для заполнения.";
    }
    if (!(preg_match('/^.{2,20}$/', $name))) {
        $answer["surnameValid"] = false;
        $answer["errorSurname"] .= " Фамилия должна содержать от 2 до 20 букв.";
    }
    if (!(preg_match('/[a-zа-я]+/i', $name))) {
        $answer["surnameValid"] = false;
        $answer["errorSurname"] .= " Некорректная фамилия.";
    }

    return $answer;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valid = validate($_POST['email'],$_POST['name'], $_POST['surname']);
}

foreach ($valid as $key => $value) {
    echo $value . '</br>';
}



?>

</div>
</body>
</html>