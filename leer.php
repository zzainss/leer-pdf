<?php
include('PDF2Text.php');
$a = new PDF2Text();
$a->setFilename('x.pdf');
$a->decodePDF();
$extracted_plaintext = $a->output();

//cuenta el numero de palabras en el texto
echo "<br><br>Hay ".str_word_count($extracted_plaintext, 0). " palabras en la cadena <br><br>'$extracted_plaintext'";
//guardo las palabras en un array	
$array_cadena = str_word_count($extracted_plaintext, 1);
//saco cada elemento del array 
foreach ($array_cadena as $palabra) {
    echo $palabra . " ";
}