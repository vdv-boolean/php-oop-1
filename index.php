<?php

include __DIR__ . '/models/movie.php';

// Genre Class
class Genre {
    public $name;

    // Construct fn for OBJ declaration
    public function  __construct(string $name)
    {
        $this->name = $name;
    }

}

// Array declaration using construct fn
$movies = [
    new Movie(
        "The Matrix",
        1999,
        "ENG",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Reloaded",
        2003,
        "ENG",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Reloaded",
        2003,
        "ENG",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Revolutions",
        2003,
        "ENG",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Resurrections",
        2022,
        "ENG",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
] ;
// TODO: Add imgs

// Temporaty echo print
foreach ($movies as $movie) {
    echo $movie->getData();
 }
// TODO: print correctly genres array