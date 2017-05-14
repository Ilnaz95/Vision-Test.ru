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
    if (!(preg_match('/^.{2,20}$/', $surname))) {
        $answer["surnameValid"] = false;
        $answer["errorSurname"] .= " Фамилия должна содержать от 2 до 20 букв.";
    }
    if (!(preg_match('/[a-zа-я]+/i', $surname))) {
        $answer["surnameValid"] = false;
        $answer["errorSurname"] .= " Некорректная фамилия.";
    }

    return $answer;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valid = validate($_POST['email'],$_POST['name'], $_POST['surname']);
    echo json_encode($valid,JSON_UNESCAPED_UNICODE);
}




?>