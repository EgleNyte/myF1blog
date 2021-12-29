<?php

include 'db_config.php';

try {
    if (!$_POST) {
        die('Netinkamas metodas');
    }

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //prepare sql and bind parameters

    $stmt = $conn->prepare("INSERT INTO users (firstname, username, email, password)
        VALUES (:firstname, :username, :email, :password)");
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    //insert another row

    $firstname = $_POST['firstname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt->execute();

    echo "You've signed up successfully! Please go back! :)";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}