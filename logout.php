<?php

// Visuomet pirma startuojam sesija
session_start();

// Sunaikinus sesiją, išvalomas kintamasis $ _SESSION, tokiu būdu atjungiant vartotoją
// Tai taip pat įvyksta automatiškai, uždarius naršyklę

session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>You're logged out</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/design.css">
    </head>
    <body>

        <nav class="navMenu">
            <a href="index.html" class="goBack">Please go back to the main page</a>
        </nav>

    </body>


