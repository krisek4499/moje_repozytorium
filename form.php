<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

  "http://www.w3.org/TR/html4/strict.dtd">

<html lang="pl">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <title>Formularz</title>

</head>

<?php

  // Funkcja wyświetlająca formularz

  function formularz() {

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

    <input type="checkbox" name="mailing" value="checked" />Chcę otrzymywać informacje handlowe<br /><br />

    <input type="submit" value="Wyślij" name="submit"/>

    </div>

    </form>   

    <?php

  }

?>

<body>

<?php

  formularz();

?>

</body>

</html>