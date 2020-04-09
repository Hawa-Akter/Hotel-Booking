<?php 
function connection(){
	$servername='localhost';
	$username='root';
	$password='';
	$db='woodlandsawayhawa';
	$conn= new mysqli($servername,$username,$password,$db);
	
	if(!$conn){
		echo"Not connected";
		
	}
	
	return $conn;
}
$con= connection();




?>