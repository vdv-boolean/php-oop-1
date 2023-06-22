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
/*
$matrix = new Movie;
$matrix->title = "The Matrix";
$matrix->year = 1999;
$matrix->language = "eng";
$matrix->genre = "fantasy";
$matrix->img = "(da aggiungere)"; //TODO: Add img

$matrix_reloaded = new Movie;
$matrix_reloaded->title = "The Matrix Reloaded";
$matrix_reloaded->year = 2003;
$matrix_reloaded->language = "eng";
$matrix_reloaded->genre = "fantasy";
$matrix_reloaded->img = "(da aggiungere)"; //TODO: Add img

$matrix_revolutions = new Movie;
$matrix_revolutions->title = "The Matrix Revolutions";
$matrix_revolutions->year = 2003;
$matrix_revolutions->language = "eng";
$matrix_revolutions->genre = "fantasy";
$matrix_revolutions->img = "(da aggiungere)"; //TODO: Add img

$matrix_resurretions = new Movie;
$matrix_resurretions->title = "The Matrix Resurrections";
$matrix_resurretions->year = 2022;
$matrix_resurretions->language = "eng";
$matrix_resurretions->genre = "fantasy";
$matrix_resurretions->img = "(da aggiungere)"; //TODO: Add img
*/

// Temporary var_dump print
var_dump($matrix);
var_dump($matrix_reloaded);
var_dump($matrix_revolutions);
var_dump($matrix_resurretions);
