<?php

$pdo = new PDO("mysql:host=localhost;dbname=********",
"**********",
"**********",
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

function getAllImages()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM images ");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Image");
    return $results;
}

function getFilteredImage($filter)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM images WHERE imageFilter=? ");
    $statement->execute([$filter]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Image");
    return $results;

}


?>