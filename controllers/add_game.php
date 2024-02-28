<?php

$currentTab = 'games';

$database = new PDO(
    'mysql:host=localhost;dbname=maBaseDeDonz',
    'gab',
    'motdepasse'
);

$query = $database->prepare(
    "INSERT INTO MaTable(maColonne1, maColonne2)"
    . " VALUES(:maColonne1, :maColonne2)"
);
$query->execute([
    "maColonne1" => 'maValeur1',
    "maColonne2" => 'maValeur2',
]);

if($_POST){
    $query = $database->prepare(
        "INSERT INTO Game(name, image, developers, releaseDate, link, description) "
        . "VALUES(:name, :image, :developers, :releaseDate, :link, :description)"
    );
    $query->execute([
        "name" => $_POST['name'],
        "developers" => $_POST['studio'],
        "releaseDate" => $_POST['date'],
        "image" => $_POST['image'],
        "link" => $_POST['url'],
        "description" => $_POST['description']
    ]);

    http_response_code(301);
    header("Location: /games");
    exit;
}

require ROOT . '/views/add_game.view.php';