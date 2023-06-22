<?php
class Movie {
    public $title;
    public $year;
    public $language;
    public $genre;
    public $img;
}

$matrix = new Movie;
$matrix->title = "The Matrix";
$matrix->year = 1999;
$matrix->language = "eng";
$matrix->genre = "fantasy";
$matrix->img = "(da aggiungere)"; //TODO: Add img

var_dump($matrix);
