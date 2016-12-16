<?php

include("persistance.php");
if(isset($_POST["submit"])){
       $name = $_POST["name"];
       $email=$_POST["email"];
       $password =$_POST["password"];
       $cPassword = $_POST["cPassword"];
       $error = "";
        if($name == "")
            $error="Please, put your name<br/>";
        else if ($email == "")
            $error.="Please, put your email<br/>";
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            $error.="Please, your email <u><strong>".$email."</strong></u> is not a correct email<br/>";
        else if ($password == "") 
            $error.="Please, Put your Password";
        else if (strlen($password)<8)
            $error.="Please, make your password is at least 8 characters long";
        else if (!preg_match("'[A-Z]'",$password))
            $error.="Please, include at least one capital letter in your password";        
        else if ($cPassword == "") 
            $error.="Please, put your Confirm Password";
        else if ($cPassword != $password) 
            $error.="Please, make sure that your passwords and its confirmation match";        
        if($error == ""){                
            $email= mysqli_real_escape_string($link, $email);
            $password = md5(md5($email).$password);            
            if($link){                
                $query = "SELECT * from newusers WHERE email ='".$email."'";
                $result = mysqli_query($link, $query);
                $results = mysqli_num_rows($result);
                if($results){
                    $dbError = 'Opps!, your email address is already registered with us!';
                }else{
                      
                    $query = "INSERT INTO newusers (`id`,`name`,`email`,`password`) values('".$id."','".$name."','".$email."','".$password."') ";
                    $result = mysqli_query($link, $query);
                    if($result){
                        $success =  'Thank you very much for signing up !!!';
                         $_POST['name'] ="";
                         $_POST['email'] ="";
                         $_POST['password'] ="";
                         $_POST['cPassword'] ="";
                         $_SESSION['id'] =$email; 
                    }
                }
                
            }
           
            }
        
        
    }
    
    


?>
