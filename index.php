<?php
require_once __DIR__ . './Models/Movie.php';

// Messaggio con le info del primo film
$firstMovie = new Movie('Ritorno al futuro', implode(', ', Movie::$genres), 116, '03-07-1985');
var_dump($firstMovie);
echo $firstMovie->getAllInfoFilm();
// Messaggio con le info del secondo film
$secondMovie = new Movie('Ritorno al futuro II', implode(', ', Movie::$genres), 108, '22-11-1989');
var_dump($secondMovie);
echo $secondMovie->getAllInfoFilm();
?>