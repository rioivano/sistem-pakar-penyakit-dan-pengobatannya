
<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "sistem_pakar";

	$conn = mysql_connect($host, $user, $pass);
	
	if(!$conn){
		echo "Something error with the connection";
	}else{
		mysql_select_db($db);
	}

	
?>