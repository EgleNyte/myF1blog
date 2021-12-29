<?php
// Šią kodo dalį talpiname kiekviename puslapyje kurį norime apsaugoti

// Visuomet pirma startuojam sesija
session_start();

if (!isset($_SESSION['arPrisijunges']))
{
    header("Location: http://localhost/account.html");
}
