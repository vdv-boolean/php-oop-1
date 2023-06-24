<?php

include __DIR__ . '/models/movie.php';
include __DIR__ . '/models/genre.php';
include __DIR__ . '/db.php';

// Temporaty echo print
foreach ($movies as $movie) {
    echo $movie->getData();
 }
// TODO: print correctly genres array