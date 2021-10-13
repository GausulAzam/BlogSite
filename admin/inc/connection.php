<?php 

    $db = mysqli_connect('localhost', 'root', '', 'blogbuddy');
    if($db){
    	echo "Database Connected Successfully";
    } else{
    	echo "Database Connection error";
    }

?>