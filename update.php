<?php
session_start();
include("php/persistance.php");
$diary = htmlspecialchars(strip_tags($_POST["diary"]));
$query = "UPDATE newusers SET content='".mysqli_real_escape_string($link, $diary)."' WHERE email='".$_SESSION['id']."'LIMIT 1";
$result = mysqli_query($link,$query); 

?>
