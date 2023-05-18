<?php

function enter($object) {
    
    $root = $_SERVER['DOCUMENT_ROOT']."/store";
    require $root."/lib/connect.php";
    require $root."/php/tables/users.php";
    require $root."/php/crud.php";

    $email = $object->email;
    $pass = $object->pass;

    $res = selectAll("users", "email", $email);
    $obj = $res->fetch();
    if($obj)
    {
        if(md5($pass) == $obj['pass'])
        {
            session_start();
            $user = new Users();
            $user->setUserID($obj['userID']);
            $user->setFname($obj['Fname']);
            $user->setLname($obj['Lname']);
            $user->setBirthday($obj['birthday']);
            $user->setAddress($obj['address']);
            $user->setPhone($obj['phone']);
            $user->setEmail($obj['email']);
            $user->setPass($obj['pass']);
            $user->setRole($obj['role']);
            $user->setGender($obj['gender']);
            $user->setImg($obj['img']);
            
            setcookie("email", $user->getEmail());

            $_SESSION['id'] = $user->getUserID();
            return "";
        }
        else
        {
            return "Email or password is not correct!!!";
        }
    } 
    else 
    {
        return "There is no email like this, sign up, please!";
    }

}

function login() {
    $root = $_SERVER['DOCUMENT_ROOT']."/store";
    require $root."/lib/connect.php";
    require $root."/php/crud.php";

    ini_set ("session.use_trans_sid", true);
    session_start();
    session_destroy();
    if(isset($_SESSION['id'])) 
    {
        if(isset($_COOKIE['email']))
        {
            return true;
        }
        else 
        {
            $res = selectAll("users", "userID", $_SESSION['id']);
            $obj = $res->fetch();
            if($obj)
            {
                session_start();
                $user = new Users();
                $user->setUserID($obj['userID']);
                $user->setFname($obj['Fname']);
                $user->setLname($obj['Lname']);
                $user->setBirthday($obj['birthday']);
                $user->setAddress($obj['address']);
                $user->setPhone($obj['phone']);
                $user->setEmail($obj['email']);
                $user->setPass($obj['pass']);
                $user->setRole($obj['role']);
                $user->setGender($obj['gender']);
                $user->setImg($obj['img']);
                
                setcookie("email", $user->getEmail());

                return true;
            }
            else
            {
                return false;
            }

        }
    }
    else 
    {
        return false;
    }
}


?>