<?php
class Movie {
    public $title;
    public $genre;
    public $duration;
    public $releaseDate;

    // Costruttore che richiede i paramentri obbligatori
    public function __construct(string $_title, string $_genre, string $_duration, string $_releaseDate){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration . ' ' . 'min';
        $this->releaseDate = $_releaseDate;
    }

    // Funzione che torna una stringa con tutte le info del film
    public function getAllInfoFilm(){
        $title = $this->title;
        $genre = $this->genre;
        $duration = $this->duration;
        $releaseDate = $this->releaseDate;

        return $title . ' it\'s a ' . $genre . ' film ' . 'released in ' . $releaseDate . ' with a running time of ' . $duration . '.';
    }
}

// Messaggio con le info del primo film
$firstMovie = new Movie('Ritorno al futuro', 'Fantasy', 116, '03-07-1985');
var_dump($firstMovie);
echo $firstMovie->getAllInfoFilm();
// Messaggio con le info del secondo film
$secondMovie = new Movie('Ritorno al futuro II', 'Fantasy', 108, '22-11-1989');
var_dump($secondMovie);
echo $secondMovie->getAllInfoFilm();
?>