<?php

// Language array
$arrLang = [
    "ITA",  // 0
    "ENG",  // 1
    "JAP",  // 2
    "FRA",  // 3
    "ESP",  // 4
];

// Genres array
$arrGenre = [
    "Horror",   // 0
    "Fantasy",  // 1
    "Action",   // 2
    "Drama",    // 3
    "Thriller", // 4
    "Sci-fi"    // 5
];

// Movie array
$movies = [
    new Movie(
        "The Matrix",
        1999,
        $arrLang[1],
        [
            new Genre($arrGenre[2]),
            new Genre($arrGenre[5]),
        ],
        ""
    ),
    new Movie(
        "The Matrix Reloaded",
        2003,
        $arrLang[1],
        [
            new Genre($arrGenre[2]),
            new Genre($arrGenre[5]),
        ],
        ""
    ),
    new Movie(
        "The Matrix Reloaded",
        2003,
        $arrLang[1],
        [
            new Genre($arrGenre[2]),
            new Genre($arrGenre[5]),
        ],
        ""
    ),
    new Movie(
        "The Matrix Revolutions",
        2003,
        $arrLang[1],
        [
            new Genre($arrGenre[2]),
            new Genre($arrGenre[5]),
        ],
        ""
    ),
    new Movie(
        "The Matrix Resurrections",
        2022,
        $arrLang[1],
        [
            new Genre($arrGenre[2]),
            new Genre($arrGenre[5]),
        ],
        ""
    ),
];
// TODO: Add imgs