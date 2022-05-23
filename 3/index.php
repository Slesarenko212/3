<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!empty($_GET['save'])) {
        print('Форма сохранена.');
    }
    include('index.html');
    exit();
}

$errors = FALSE;
if (empty($_POST['name'])) {
    print('Напишите ФИО.<br/>');
    $errors = TRUE;
}

if (empty($_POST['email'])) {
    print('Напишите почту.<br/>');
    $errors = TRUE;
}

if (empty($_POST['date'])) {
    print('Напишите дату рождения.<br/>');
    $errors = TRUE;
}

if ( empty($_POST['gender']) ) {
    print('Укажите пол.<br/>');
    $errors = TRUE;
}

switch($_POST['gender']) {
    case 'm': {
        $gender='m';
        break;
    }
    case 'f':{
        $gender='f';
        break;
    }
};


if (empty($_POST['limbs'])) {
    print('Укажите количество конечностей.<br/>');
    $errors = TRUE;
}

switch($_POST['limbs']) {
    case '1': {
        $limbs='1';
        break;
    }
    case '2':{
        $limbs='2';
        break;
    }
    case '3':{
        $limbs='3';
        break;
    }
    case '4':{
        $limbs='4';
        break;
    }
};

if (empty($_POST['Superpowers'])) {
    print('Укажите суперспособность.<br/>');
    $errors = TRUE;
}

$power1=in_array('bessm',$_POST['Superpowers']) ? '1' : '0';
$power2=in_array('passing',$_POST['Superpowers']) ? '1' : '0';
$power3=in_array('fly',$_POST['Superpowers']) ? '1' : '0';

if (empty($_POST['biography'])) {
    print('Напишите биографию.<br/>');
    $errors = TRUE;
}

if (empty($_POST['agree'])) {
    print('Вы не согласились с условиями контракта<br/>');
    $errors = TRUE;
}
$agree = 'agree';

if ($errors) {
    exit();
}

$user = 'u47558';
$pass = '3872701';
$db = new PDO('mysql:host=localhost;dbname=u47558', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

try {
    $stmt = $db->prepare("INSERT INTO application SET name = ?, email = ?, date = ? ,gender = ?, limbs = ?, bessm = ?, passing = ? ,fly =?, biography = ?, agree = ?");
    $stmt -> execute(array($_POST['name'],$_POST['email'],$_POST['date'],$gender,$limbs,$power1,$power2,$power3,$_POST['biography'], $agree));
}
catch(PDOException $e){
    print('Error : ' . $e->getMessage());
    exit();
}

header('Location: ?save=1');
?>
