<?php
    include __DIR__ . "/partials/db.php";
    include __DIR__ . "/partials/vars.php";

    $genreSelected = $_GET["filteredGenre"];

    $filteredAlbums = [];

    foreach($albums as $album) {
        if ($album["genre"] == $genreSelected) {
            array_push($filteredAlbums, $album);
        }
    };

    header("Content-type: application/json");

    echo json_encode($filteredAlbums);
 ?>
