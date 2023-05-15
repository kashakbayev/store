<?php

$obj = json_decode($_POST['data']);

$root = $_SERVER['DOCUMENT_ROOT']."/store";
require $root."/lib/module_global.php"; //подключается файл с глобальными функциями


if($_POST['action'] == "out") out(); //если передана переменная action, «разавторизируем» пользователя

if (login()) //вызываем функцию login, которая определяет, авторизирован пользователь или нет

{
    $UID = $_SESSION['id']; //если пользователь авторизирован, присваиваем переменной $UID его id
    $admin = is_admin($UID); //определяем, админ ли пользователь

}
else //если пользователь не авторизирован, проверяем, была ли нажата кнопка входа на сайт
{
    $error = enter($obj); //функция входа на сайт

    if (count($error) == 0) //если ошибки отсутствуют, авторизируем пользователя
    {
        $UID = $_SESSION['id'];

        $admin = is_admin($UID);
    }
    
} 




?>