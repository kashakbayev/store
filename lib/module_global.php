<?php
require $root."/php/tables/users.php";
$user = new Users();

function enter($obj) { 
    $root = $_SERVER['DOCUMENT_ROOT']."/store";
    require $root."/php/crud.php";  
    $error = array(); //массив для ошибок   
    
    $email = $obj->email;
    $pass = $obj->pass;

    try {
        $res = selectAll("users", "email", $email); //запрашивается строка из базы данных с логином, введённым пользователем      

        if ($res) //если нашлась строка, значит такой юзер существует в базе данных       

        {           
            $row = $res->fetch();             
            if (md5($pass) == $row['pass']) //сравнивается хэшированный пароль из базы данных с хэшированными паролем, введённым пользователем                        

            { 
            //пишутся логин и хэшированный пароль в cookie, также создаётся переменная сессии

                
                $user->setUserID($row['userID']);
                $user->setFname($row['Fname']);
                $user->setLname($row['Lname']);
                $user->setBirthday($row['birthday']);
                $user->setAddress($row['address']);
                $user->setPhone($row['phone']);
                $user->setEmail($row['email']);
                $user->setPass($row['pass']);
                $user->setRole($row['role']);
                $user->setGender($row['gender']);
                $user->setImg($row['img']);


                setcookie ("login", $user->email, time() + 50000, "/");                         
                setcookie ("password", md5($user->email.$user->pass), time() + 50000, "/");                    
                $_SESSION['id'] = $user->getUserID();   //записываем в сессию id пользователя               

                //$id = $_SESSION['id'];          
            }           
            else //если пароли не совпали           
            {               
                $error[] = "Incorrect email address or password";                                       
                return $error;          
            }       
        }       
        else //если такого пользователя не найдено в базе данных        
        {           
            $error[] = "There is no user with this email";           
            return $error;      
        }


    } catch(Exception $e) {
        echo "Database error: ".$e->getMessage();
    }
       
    

}





function login() {     
    ini_set ("session.use_trans_sid", true);    
    session_start();    
    if(isset($_SESSION['id']))//если сесcия есть   
    {       
        if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) //если cookie есть, обновляется время их жизни и возвращается true      
        {           
            SetCookie("login", "", time() - 1, '/');            
            SetCookie("password","", time() - 1, '/');          
            setcookie ("login", $_COOKIE['login'], time() + 50000, '/');            
            setcookie ("password", $_COOKIE['password'], time() + 50000, '/');          

            $id = $_SESSION['id'];        
            return true;        

        }       
        else //иначе добавляются cookie с логином и паролем, чтобы после перезапуска браузера сессия не слетала         
        {    

            try {
                $res = $conn->query("SELECT * FROM `users` WHERE `userID`='{$_SESSION['id']}'"); //запрашивается строка с искомым id

                if ($res) //если получена строка          
                {       
                    $row = $res->fetch(); //она записывается в ассоциативный массив               

                    $user->setId($row['userID']);
                    $user->setFname($row['Fname']);
                    $user->setLname($row['Lname']);
                    $user->setBday($row['birthday']);
                    $user->setAddress($row['address']);
                    $user->setPhone($row['phone']);
                    $user->setEmail($row['email']);
                    $user->setPass($row['pass']);
                    $user->setRole($row['role']);
                    $user->setGender($row['gender']);
                    $user->setImg($row['img']);

                    setcookie ("login", $user->email, time()+50000, '/');              

                    setcookie ("password", md5($user->email.$user->pass), time() + 50000, '/'); 

                    $id = $_SESSION['id'];
                    return true;            

                } 
                else return false; 

            } catch(Exception $e) {
                echo $e->getMessage();
            }          
            $conn = null;
                 
        }   
    }   
    else //если сессии нет, проверяется существование cookie. Если они существуют, проверяется их валидность по базе данных     
    {       
        if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) //если куки существуют      
        {         

            try {

                $res = $conn->query("SELECT * FROM `users` WHERE `email`='{$_COOKIE['login']}'"); //запрашивается строка с искомым логином и паролем             
                $row = $res->fetch();            

                if($res && md5($row['email'].$row['pass']) == $_COOKIE['password']) //если логин и пароль нашлись в базе данных           
                {               
                    $_SESSION['id'] = $row['userID']; //записываем в сесиию id              
                    $id = $_SESSION['id'];              
             
                    return true;            
                }           
                else //если данные из cookie не подошли, эти куки удаляются             
                {               
                    SetCookie("login", "", time() - 360000, '/');               

                    SetCookie("password", "", time() - 360000, '/');                    
                    return false;           

                }

            } catch(Exception $e) {
                echo $e->getMessage();
            }

            $conn = null;




                   
        }       
        else //если куки не существуют      
        {           
            return false;       
        }   
    } 
}



function is_admin($id) { 

    try {

       $res = $conn->query("SELECT `role` FROM `users` WHERE `id` = '$id'");  

        if ($res)  
        {       
            $role = $res->fetch();         

            if ($role == "admin") return true;       
            else return false; 

        }   
        else return false;  

    } catch(Exception $e) {
        echo $e->getMessage();
    }
    $conn = null;

      
}



function out() {   
    session_start();    
    $id = $_SESSION['id'];              
   
    unset($_SESSION['id']); //удалятся переменная сессии    
    SetCookie("login", ""); //удаляются cookie с логином    

    SetCookie("password", ""); //удаляются cookie с паролем     
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/'); //перенаправление на главную страницу сайта 
}
?>