<?php
$firstMovie = new Movie('Ritorno al futuro', implode(', ', Movie::$genres), 116, '03-07-1985');
$secondMovie = new Movie('Ritorno al futuro II', implode(', ', Movie::$genres), 108, '22-11-1989');
$thirdMovie = new Movie('Ritorno al futuro III', implode(', ', Movie::$genres), 108, '25-05-1990');
$johnWickMovie = new Movie('John Wick', implode(', ', Movie::$genresWick), 101, '24-10-2014');
$johnWickIIMovie = new Movie('John Wick: Chapter 2', implode(', ', Movie::$genresWick), 122, '30-01-2017');
$johnWickIIIMovie = new Movie('John Wick: Chapter 3 – Parabellum', implode(', ', Movie::$genresWick), 131, '09-05-2019');

$movies = [
    $firstMovie, $secondMovie, $thirdMovie, $johnWickMovie, $johnWickIIMovie, $johnWickIIIMovie
]
?>