<?php

// Class declaration
class Movie {
    public $title;
    public $year;
    public $language;
    public $genre;
    public $img;

    // Construct fn for OBJ declaration
    public function  __construct(string $title, int $year, string $language, string $genre, string $img)
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
        return
            "Titolo: " . $this->title . "; <br>
            Anno di uscita: " . $this->year . "; <br>
            Lingua originale: " . $this->language . "; <br>
            Genere: " . $this->genre . '; <br>
            <img alt="Poster non disponibile"> <br>
            <hr>'
        ;
    }
}

// Objs eclaration using construct fn
$matrix = new Movie("The Matrix", 1999, "ENG", "Fantasy", "(da aggiungere)");
$matrix_reloaded = new Movie("The Matrix Reloaded", 2003, "ENG", "Fantasy", "(da aggiungere)");
$matrix_revolutions = new Movie("The Matrix Revolutions", 2003, "ENG", "Fantasy", "(da aggiungere)");
$matrix_resurretions = new Movie("The Matrix Resurrections", 2022, "ENG", "Fantasy", "(da aggiungere)");
//TODO: Add imgs

// Temporary echo print
echo $matrix->getData();
echo $matrix_reloaded->getData();
echo $matrix_revolutions->getData();
echo $matrix_resurretions->getData();