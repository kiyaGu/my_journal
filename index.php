<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
include("php/login.php");
include("php/signup.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Journal</title>
   <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!--======FontAwesome====-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--======google fonts=======-->
    <link href="https://fonts.googleapis.com/css?family=Jim+Nightshade|Yesteryear" rel="stylesheet">
    <!--======custom css=======-->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
     <header class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a href="" class="navbar-brand">My Journal</a>
            </div>        
        <div id="navbar" class="collapse navbar-collapse">          
            <form action="" class="navbar-form navbar-right" method="post">
                 <div class="form-group">
                 <input type="text" placeholder="Email" class="form-control" name="lEmail" value="<?php echo $_POST['lEmail'];?>">
                 </div>
                 <div class="form-group">
                 <input type="password" placeholder="password" class="form-control" name="lPassword">
                 </div>
                 <input class="btn btn-primary" type="submit" id="login" name="lSubmit" value=" log In">
            </form>            
        </div>        
    </div>
</header>
 <section data-type="background" data-speed="5" id="main">
  <div class="container">
      <div class="row " id="main-row">
          <div class="col-sm-4 col-sm-offset-4  top-container center">          
              <form action="" method="post"  role="form">
                  <div class="form-group">
                     <label for="name" class="text">Name :</label> 
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo addslashes($_POST["name"]); ?>">
                  </div>
                  <div class="form-group">
                      <label for="email" class="text">Email :</label>
                         <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo addslashes($_POST["email"]); ?>">
                  </div>
                  <div class="form-group">           
                      <label for="password" class="text">Password:</label>
                         <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo addslashes($_POST["password"]); ?>">
                  </div>
                  <div class="form-group">
                      <label for="cPassword" class="text">Confirm Password:</label>
                         <input type="password" class="form-control" name="cPassword" placeholder="Confirm Password" value="<?php echo addslashes($_POST["cPassword"]); ?>">                     
                  </div>
                  <div class="text-center">
                  <input type="submit" class="btn btn-success " name="submit" value="Sign UP"> 
                  </div>                 
              </form>
          </div>
          
      </div>
      <div class="row">
          <div class="col-sm-6 col-sm-offset-3"><hr>
              <div class="alert alert-success" id="success"><?php 
                   if($success != "")
                  echo "<script>document.getElementById('success').style.display='block'; document.getElementById('success').innerHTML='".$success."';</script>";
                  else if($message !="")
                   echo "<script>document.getElementById('success').style.display='block'; document.getElementById('success').innerHTML='".$message."';</script>";
                  ?></div>
              <div class="alert alert-danger" id="failure"><?php 
                  if($error != "")
                  {echo "<script>document.getElementById('failure').style.display='block'; </script>";
                  echo $error;}
                  else if($dbError != "")
                      {echo "<script>document.getElementById('failure').style.display='block'; </script>";
                       echo $dbError;
                      }
            ?></div>
              
          </div>
      </div>
      
  </div>
 </section>
<script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><\/script>');</script>   
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="js/main.js"></script>          
</body>
</html>