<?php

    include __DIR__ . "/db.php";
    include __DIR__ . "/functions.php";

    $allGenres = [];

    foreach($albums as $album) {
        if (!in_array($album["genre"], $allGenres)) {
            array_push($allGenres, $album["genre"]);
        }
    }

 ?>
