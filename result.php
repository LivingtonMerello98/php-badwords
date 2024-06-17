<?php
//creo le variabili

$text = $_GET['text'];
$censure = $_GET['censure'];
$hideWord = '****';

// echo $text . '  ' . $censure;
echo "<p> il testo inserito è <br>
'$text' <br>
e la parola da censurare è $censure</p>";
