<?php

// Class declaration
class Movie {
    public $title;
    public $year;
    public $language;
    public $genres;
    public $img;

    // Construct fn for OBJ declaration
    public function  __construct(string $title, int $year, string $language, array $genres, string $img)
    {
        $this->title = $title;
        $this->year = $year;
        $this->language = $language;
        $this->genres = $genres;
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
            "<li>
                Titolo: " . $this->title . ";
            </li>
            <li>
                Anno di uscita: " . $this->year . ";
            </li>
            <li>
                Lingua originale: " . $this->language . ";
            </li>
            <li>
                Genere: " . $this->genres . ';
            </li>
            <li>
                <img src="' . $this->img . '">' . $msg .
            "</li>"
        ;
    }
}