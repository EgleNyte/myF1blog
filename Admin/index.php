<?php

include '../loginCheck.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>You're logged out</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/layout.css">
    <link rel="stylesheet" href="../css/adminIndex.css">
</head>
<body>
<aside class="cele left">

</aside>
<header class="cele header">
    <div class="navbar" id="navbar">
        <a href="../index.html">Home</a>
        <a href="../news.html">News</a>
        <a href="../drivers.html">Drivers</a>
        <a href="../teams.html">Teams</a>
        <a href="../edits.html">Edits</a>
        <a href="../about.html">About</a>
    </div>
</header>
<main class="cele main">
   <div class="sendMessage">
       <h1>Send me a message</h1>
       <form action="/action_page.php" id="usrform">Name: <input type="text" name="nameOfThePerson"></form><br>
    <textarea rows="4" cols="50" name="comment" form="usrform">Enter your message here...</textarea><br><br>
       <button id="sendMeMessage">Send</button>
   </div>
</main>
<aside class="cele right">

</aside>
<footer class="cele footer">
    <div id="logOut">
    <h5>
        <a href="/logout.php">Log Out</a>
    </h5>
    </div>
</footer>
</body>
</html>
