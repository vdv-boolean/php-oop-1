<?php

// Include other php files
include __DIR__ . '/models/movie.php';
include __DIR__ . '/models/genre.php';
include __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
        // Temporaty echo print
        foreach ($movies as $movie) {
            echo $movie->getData();
        }
        // TODO: print correctly genres array
    ?>
    </body>
</html>

