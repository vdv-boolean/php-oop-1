<?php

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