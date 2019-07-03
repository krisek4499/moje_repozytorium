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
  // Funkcja wyświetlająca formularz

  function formularz() 
  {

    ?>

    <form action="zgloszenie.php" method="post">
 
    <div>

    Imię:<br />

    <input name="imie" value="" /><br />

    Nazwisko:<br />

    <input name="nazwisko" value="" /><br />

    Zawód:<br />

    <input name="zawod" value="" /><br />
	
	Numer telefonu:<br />

    <input name="numer" value="" /><br />
	
	Data urodzenia:<br />
	
	<input type="date" name="urodziny" min="1890-01-01" max="2019-12-31" /><br />

    Adres e-mail:<br />

    <input name="email" value="" /><br />


    <input type="submit" class="btn btn-success" value="Wyślij" name="submit"/>

    </div>

    </form>   

   <?php

  }

   ?>

<body>

<?php

  formularz();

?>
</div>
 </div>
    </div>
</body>

</html>