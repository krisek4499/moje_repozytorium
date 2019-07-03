
<?php require_once "connect.php";
 $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}


 $query = "DELETE FROM testowa WHERE id =9";
$result = $polaczenie->query($query);
    if($result) echo "Twoje zostaly usuniete poprawnie"; 
    else echo "Błąd nie udało się usunac rekordu";



?>

