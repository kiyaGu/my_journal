<?php

$link = @mysqli_connect("localhost","root","","myJournal");
if(!$link){    
     $error = 'Opps!, it seems the connection to the database is not working at the moment. please, try again, later.'; 
}
?>