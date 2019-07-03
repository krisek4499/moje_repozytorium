<?php
require_once "connect.php";
$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
      $numer=$_POST["telefon"];
       //$nr_telefonu=$_POST['nr_telefonu'];
   
  $query="DELETE FROM testowa  WHERE nr_telefonu='$numer'";
$result = $polaczenie->query($query);
echo "Rekord zaktualizowany";
header("Location: usunieto.php");
mysqli_close();
?>