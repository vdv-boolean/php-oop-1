<?php

// Class declarations

//Movie Class
class Movie {
    public $title;
    public $year;
    public $language;
    public $genre;
    public $img;

    // Construct fn for OBJ declaration
    public function  __construct(string $title, int $year, string $language, array $genre, string $img)
    {
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->genre = $genre;
        $this->img = $img;
    }

    // Get metadata fn
    public function getData()
    {
        if ($this->img === "") 
            $msg = "(Poster non disponibile)";
        else
            $msg = "";   
        return
            "Titolo: " . $this->title . "; <br>
            Anno di uscita: " . $this->year . "; <br>
            Lingua originale: " . $this->language . "; <br>
            Genere: " . $this->genre . '; <br>
            <img src="' . $this->img . '">' . $msg . '<br>
            <hr>'
        ;
    }
}

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
//TODO: Add imgs

//Temporaty echo print
foreach ($movies as $movie) {
    echo $movie->getData();
 }