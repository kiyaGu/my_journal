<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
if($_GET["logout"] == 1 AND $_SESSION['id']){
      session_destroy();
      $message = "You have been succesfuly logged out. Have a nice day!";
   
}
include("persistance.php");
if(isset($_POST["lSubmit"])){
       $email=$_POST["lEmail"];
       $error = "";
       $password =$_POST["lPassword"];       
         if ($email == "")
             $error.="Please, put your email<br/>";
         else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
             $error.="Please, your email <u><strong>".$email."</strong></u> is not a correct email<br/>";
        else if ($password == "") 
            $error.="Please, Put your Password";
//        else if (strlen($password)<8)$error.="Please, make your password is at least 8 characters long";
//        else if (!preg_match("'[A-Z]'",$password))$error.="Please, include at least one capital letter in your password";        
        if($error == ""){                
            $email= mysqli_real_escape_string($link, $email);
            $password = md5(md5($email).$password);            
            if($link){                
                $query = "SELECT * from newusers WHERE email ='".$email."' AND password ='".$password."'";
                $result = mysqli_query($link, $query);
                $results = mysqli_fetch_array($result);
                if(!$results){
                    $dbError = 'Opps!, it seems you forgot your email or password !';
                }else{                    
                    $_SESSION['id']=$results['email']; 
                    header('Location:./main.php'); 
                    
                }
                
            }
           
            }
        
        
    }
    

?>
