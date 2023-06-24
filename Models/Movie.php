<?php

// Class declarations

//Movie Class
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
            "Titolo: " . $this->title . "; <br>
            Anno di uscita: " . $this->year . "; <br>
            Lingua originale: " . $this->language . "; <br>
            Genere: " . $this->genres . '; <br>
            <img src="' . $this->img . '">' . $msg . '<br>
            <hr>'
        ;
    }
}