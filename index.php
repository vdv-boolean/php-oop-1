<?php

// Class declaration
class Movie {
    public $title;
    public $year;
    public $language;
    public $genre;
    public $img;

    // Construct fn for OBJ declaration
    public function  __construct($title,$year, $language, $genre, $img)
    {
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->genre = $genre;
        $this->img = $img;
    }
}


// Objects declarations

// Manual declaration
/*
$matrix = new Movie;
$matrix->title = "The Matrix";
$matrix->year = 1999;
$matrix->language = "ENG";
$matrix->genre = "Fantasy";
$matrix->img = "(da aggiungere)"; //TODO: Add img

$matrix_reloaded = new Movie;
$matrix_reloaded->title = "The Matrix Reloaded";
$matrix_reloaded->year = 2003;
$matrix_reloaded->language = "ENG";
$matrix_reloaded->genre = "Fantasy";
$matrix_reloaded->img = "(da aggiungere)"; //TODO: Add img

$matrix_revolutions = new Movie;
$matrix_revolutions->title = "The Matrix Revolutions";
$matrix_revolutions->year = 2003;
$matrix_revolutions->language = "ENG";
$matrix_revolutions->genre = "Fantasy";
$matrix_revolutions->img = "(da aggiungere)"; //TODO: Add img

$matrix_resurretions = new Movie;
$matrix_resurretions->title = "The Matrix Resurrections";
$matrix_resurretions->year = 2022;
$matrix_resurretions->language = "ENG";
$matrix_resurretions->genre = "Fantasy";
$matrix_resurretions->img = "(da aggiungere)"; //TODO: Add img
*/

// Declaration using construct fn
$matrix = new Movie("The Matrix", 1999, "ENG", "Fantasy", "(da aggiungere)");
$matrix_reloaded = new Movie("The Matrix Reloaded", 2003, "ENG", "Fantasy", "(da aggiungere)");
$matrix_revolutions = new Movie("The Matrix Revolutions", 2003, "ENG", "Fantasy", "(da aggiungere)");
$matrix_resurretions = new Movie("The Matrix Resurrections", 2022, "ENG", "Fantasy", "(da aggiungere)");
//TODO: Add imgs


// Temporary var_dump print
var_dump($matrix);
var_dump($matrix_reloaded);
var_dump($matrix_revolutions);
var_dump($matrix_resurretions);
