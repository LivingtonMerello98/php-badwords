<?php
//creo le variabili

$text = $_GET['text'];
$censure = $_GET['censure'];
$hide_word = '***';

$censured_word = str_replace($censure, $hide_word, $text);
$text_length = strlen($text);


echo "<p>Original text: '$text' <br>
        lenght of text: '$text_length' <br>
        Censured text: '$censured_word'</p>";
