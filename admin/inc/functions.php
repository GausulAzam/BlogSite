<?php 

	include "connection.php";



	function delete($table, $key, $d_id, $url){

			global $db;
			$query3 = "DELETE FROM $table WHERE $key = '$d_id'";

            $result3 = mysqli_query($db, $query3);

            if ($result3){
             header('Location: '.$url);
            } else {echo "error!";
            }
	}

 ?>