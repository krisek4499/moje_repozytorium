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
     <div class="row">
             <div class="col-sm-6">
                <h3>Usunąłęś swoje dane!</h3>
				 <form action="formularz.php" method="post">
	               <input type="hidden" name="another" value="true" />
                   <input type="submit" class="btn btn-success" name="powrót" value="powrót" />
                 </form>
			 </div>
	 </div>
   </div>
 </body>
</html>
			  