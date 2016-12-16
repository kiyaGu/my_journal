
<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
include("php/persistance.php");
    $query = "SELECT content FROM newusers WHERE email='".$_SESSION['id']."'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    //if($row != ""){
        $diary = $row['content'];
    
    
if($_SESSION['id']!= ""){
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
     <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header pull-left ">
                  
                <a href="" class="navbar-brand">My Journal</a>
            </div> 
            <div class="pull-right" id="logout-div"> 
                <a href="index.php?logout=1"><input type="button" class="btn btn-danger pull-right" value="log Out" id="logout" ></a>  </div>     
    </div>
</div>
  <div class="container"  id="container">
      <div class="row " id="textarea-row">
          <div class="col-sm-6 col-sm-offset-3  top-container">          
              <textarea name="diary" id="diary"  class="form-control" placeholder="Hello Diary.."><?php echo $diary; ?></textarea>
             
          </div>
      </div>
     
      
  </div>
 
<script>window.jQuery || document.write('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><\/script>')</script>   
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 <script src="js/main.js"></script>
       
</body>
</html>
<?php
    }else{
        header("Location:index.php");  
}
?>