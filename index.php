<?php

setcookie('t2', $_POST['liczba1'] + $_POST['liczba2'], time() + 120); //kreujemy cookie
if (isset($_COOKIE['t2'])){
	echo '<br>'.$_COOKIE['t2']; // wyświetlamy zawartość
}
	else{}

//echo $cook.'<br>';

$name = $_POST['name'];
$email = $_POST['email'];

$f = fopen(text.txt, 'w') or die('FILE COULDNT BE OPENED'); // otwieramy lub kreujemy plik, następnie wypełniając go z formularza
fwrite($f, $name);
fwrite($f, $email);
fwrite($f, $br);
fwrite($f, $cook);
fclose($f); // zamykamy


?>

<form 
	action = 'index.php'
	method = 'POST'>
	Liczba 1: <input type = 'number' name = 'liczba1'><br> <!-- Liczby $_POST do obliczenia sumy-->
	Liczba 2: <input type = 'number' name = 'liczba2'><br>
	Imię: <input type = 'text' name = 'name'><br>
	Email: <input type = 'text' name = 'email'><br>
<?php
		if (isset($_COOKIE['t2'])){			
	}
	else{
		echo '<input type="submit" name="Send">';
	}
 ?>
</form>