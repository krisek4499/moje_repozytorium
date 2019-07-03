<?php
require_once "connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	
	   $id=$_POST['id'];

       $imie=$_POST['imie'];
	
       $nazwisko=$_POST['nazwisko'];
	
       $zawod=$_POST['zawod'];
	  
       $nr_telefonu=$_POST['nr_telefonu'];
	 
       $data_ur=$_POST['data_ur'];
	 
       $email=$_POST['email'];



  $query="UPDATE testowa SET imie='$imie', nazwisko='$nazwisko',zawod='$zawod',nr_telefonu='$nr_telefonu',data_ur='$data_ur' ,email='$email' WHERE id='$id'";

$result = $polaczenie->query($query);
  
echo "Rekord zaktualizowany";
header("Location: formularz.php");
//mysqli_close();
?>