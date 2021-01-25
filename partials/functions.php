<?php
    function getGenres ($dbArray, $array) {
        $array = [];
        foreach ($dbArray as $album) {
            foreach ($album as $element) {
                foreach($element as $element["genres"]) {
                    if (!in_array($element["genres"], $array) ) {
                        array_push($array, $element["genres"]);
                    }
                }
            }
        }
        return $array;
    };
 ?>
