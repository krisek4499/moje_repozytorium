<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zgloszenie</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="usun.js" type="text/javascript"></script>
	 <!--<link rel="stylesheet" href="css/style.css">-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
  </head>
 <body>
   <div class="container" >
    <?php
         //include"skrypt.php";
         require_once "connect.php";
            function  walidacja_email($email) {
	                                          $sprawdz = '/^[a-zA-Z0-9.\-_]+@[a-zA-Z0-9\-.]+\.[a-zA-Z]{2,4}$/';
                                               $zm=0;
	                                                                    if (!preg_match($sprawdz, $email)) 
                                                                           {
                                                                            $zm=$zm+1;
                                                                            } 
                                                                            else 
                                                                            return $zm;
                                               }
                          $email = $_POST ["email"];		
                          $numer=$_POST["numer"];
                if (isset($_POST["submit"])) {

                
				if (empty($_POST["imie"]) ||

                    empty($_POST["nazwisko"]) ||

                    empty($_POST["zawod"]) || 
		
		            empty($_POST["urodziny"]) ||
		
		            empty($_POST["numer"]) ||
		
		            empty($_POST["email"])
		            )
					{
						echo "<p style=\"color:red\">Musisz wypełnić wszystkie pola!</p>";
                    echo "<p><a href=\"formularz.php\">Powrót do formularza</a></p>";
					}
                    elseif (walidacja_email($email)!=0){ echo "<p style=\"color:red\">Email niepoprawny</p>";
                    echo "<p><a href=\"formularz.php\">Powrót do formularza</a></p>";
					}
                    elseif (strlen($numer)!=9 && !is_int($numer)){ echo "<p style=\"color:red\">wprowadzony numer telefonu jest niepoprawny</p>";
                    echo "<p><a href=\"formularz.php\">Powrót do formularza</a></p>";
					}
                    else {
    ?>
            <div class="row">
             <div class="col-sm-6">
              <h3>Dziękujemy za wypełnienie formularza!</h3>

              <p>Twoje dane:</p>

             <ul>

             <li>Imię: <b><?= trim($_POST["imie"]); ?></b></li>

             <li>Nazwisko: <b><?= trim($_POST["nazwisko"]); ?></b></li>

             <li>Zawód: <b><?= trim($_POST["zawod"]); ?></b></li>
	  
	         <li>Numer telefonu: <b><?= trim($_POST["numer"]); ?></b></li>
	  
	         <li>Data urodzenia: <b><?= trim($_POST["urodziny"]); ?></b></li>

             <li>Adres email: <b><?= trim($_POST["email"]); ?></b></li>
 
    <?php
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	
         $imie=$_POST["imie"];

         $nazwisko=$_POST["nazwisko"];

         $zawod=$_POST["zawod"]; 
		
		 $nr_telefonu=$_POST["numer"]; 
		
		 $data_ur=$_POST["urodziny"];
		
		 $email=$_POST["email"];
	
	       $query="INSERT INTO testowa values ('','$imie','$nazwisko','$zawod','$nr_telefonu','$data_ur','$email')";
            $result = $polaczenie->query($query);
  
    ?>
  </div>
   <div class="row">
    <div class="col-sm-6">
      <!-- <button type="button" class="btn btn-success"  id="sender">usun</button>-->
	   <form action="usun.php" method="post">
	       <input type="hidden" name="telefon" value="<?php echo $nr_telefonu; ?>" />

	   <input type="submit" class="btn btn-success" name="usun" value="usun" />
        </form>
		
	   <form action="edycja.php" method="post">
	       <input type="hidden" name="telefon" value="<?php echo $nr_telefonu; ?>" />

	   <input type="submit" class="btn btn-success" name="edytuj" value="edytuj" />
        </form>
       </ul>
     <?php
    }
} 
  else {
        header("Location: formularz.php");
		}

      ?> 
    </div>
   </div>
  </div>
 </body>
</html>