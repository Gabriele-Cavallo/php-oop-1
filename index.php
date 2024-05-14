<?php
require_once __DIR__ . './Models/Movie.php';
require_once __DIR__ . './db.php';

// // Messaggio con le info del primo film
// var_dump($firstMovie);
// echo $firstMovie->getAllInfoFilm();
// // Messaggio con le info del secondo film
// var_dump($secondMovie);
// echo $secondMovie->getAllInfoFilm();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Movie DB</title>
</head>
<body>
    <div class="container">
        <h1>OUR MOVIES</h1>
        <?php foreach($movies as $movie) { ?>
            <div class="card">
                <h3>Title : <?php echo $movie->title ?></h3>
                <div>Release date: <?php echo $movie->releaseDate ?></div>
                <div>Genres: <?php echo $movie->genre ?></div>
                <div>Duration: <?php echo $movie->duration ?></div>
            </div>
        <?php } ?>
    </div>
</body>
</html>