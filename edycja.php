<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formularz</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<script src="js/jquery-1.11.1.min.js"><script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
     
      
     <div class="row">
     <div class="col-sm-12">


<?php
 require_once "connect.php";
 $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	$numer=$_POST["telefon"];
	$s="fgi";
	//echo $numer ;
	//echo $s;
	$query="SELECT id,imie,nazwisko,zawod,nr_telefonu,data_ur,email FROM testowa where nr_telefonu=$numer ";
	$result = $polaczenie->query($query);
	$wynik=$result;
//$wynik = mysql_query("SELECT id FROM testowa where nr_telefonu='.$numer.'")
//or die('Błąd zapytania');



//if($a == 'edit' and !empty($id)) {
    /* zapytanie do tabeli */
   // $query1 = "SELECT * FROM testowa WHERE id='.$wynik.'";
	//$result1 = $polaczenie->query($query1);
    //or die('Błąd zapytania');
//echo"$wynik";
    if(mysqli_num_rows($wynik) !=0) 
	{

        $r = mysqli_fetch_array($wynik);

        echo '<form action="zmien.php" method="post">
     
      <input type="hidden" name="id" value="'.$r['id'].'" />
          imie:<br />
      <input type="text" name="imie"
        value="'.$r['imie'].'" /><br />
        nazwisko:<br />
      <input type="text" name="nazwisko"
        value="'.$r['nazwisko'].'" /><br />
        zawod:<br />
      <input type="text" name="zawod"
        value="'.$r['zawod'].'" /><br />
        numer telefonu:<br />
      <input type="text" name="nr_telefonu"
        value="'.$r['nr_telefonu'].'" /><br />
        data urodzenia:<br />
      <input type="date" name="data_ur"
        value="'.$r['data_ur'].'" /><br />
		email:<br/>
	  <input type="text" name="email"
        value="'.$r['email'].'" /><br />
		
      <input type="submit" class="btn btn-success" value="popraw" />
          </form>';
    }
	?>
	         </div>
            </div>
       </div>
  </body>

</html>
