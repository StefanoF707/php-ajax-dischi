<?php
    include __DIR__ . "/partials/db.php";

    $genreSelected = $_GET["filteredGenre"];

    if (empty($genreSelected)) {
        $filteredAlbums = $albums;
    } else {
        $filteredAlbums = [];
        foreach($albums as $album) {
            if ($album["genre"] == $genreSelected) {
                array_push($filteredAlbums, $album);
            }
        };
    }


    header("Content-type: application/json");

    echo json_encode($filteredAlbums);
 ?>
