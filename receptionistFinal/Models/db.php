
<?php
   function getConnection()
   {
   	$server="localhost";
   	$username="root";
   	$password="";
   	$dbName="receptionist";
   	$conn= new mysqli($server,$username,$password,$dbName);
   	return $conn; 
   }
?>