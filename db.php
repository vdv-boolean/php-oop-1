<?php

// Language array
$language = [
    "ITA",
    "ENG",
    "JAP",
    "FRA",
    "ESP",
];

// Movie array
$movies = [
    new Movie(
        "The Matrix",
        1999,
        $language[1],
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Reloaded",
        2003,
        "$language[1]",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Reloaded",
        2003,
        "$language[1]",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Revolutions",
        2003,
        "$language[1]",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
    new Movie(
        "The Matrix Resurrections",
        2022,
        "$language[1]",
        [
            new Genre("Fantasy"),
            new Genre("Action"),
        ],
        ""
    ),
];
// TODO: Add imgs