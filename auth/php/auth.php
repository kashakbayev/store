<?php

$obj = json_decode($_POST['data']);

$root = $_SERVER['DOCUMENT_ROOT']."/store";
require $root."/lib/module_global.php"; //подключается файл с глобальными функциями


if($_POST['action'] == "out") out(); //если передана переменная action, «разавторизируем» пользователя

if($_POST['action'] == "in") 
{
    if(login() == false)
    {
        $error = enter($obj);
        if($error == "") echo "<script>self.location='localhost/store'</script>";
        else echo $error;
    }
    else echo "success";
    
}




?>

