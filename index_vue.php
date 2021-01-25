<?php
    include_once __DIR__ . "/partials/vars.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b954c4656e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Vue Albums</title>
</head>
<body>

    <?php include __DIR__ . "/partials/header.php" ?>

    <main id="app">

        <ul id="albums">
            <li v-for="album in albums" class="album" v-if="album.genre.includes(filterGenre) || filterGenre == 'All'">
                <div class="album-top">
                    <img :src="'img/albums/' + album.poster + '.jpg'" :alt="'album: ' + album.title"  class="img-fit">
                    <div class="layover">
                        <i class="far fa-play-circle"></i>
                    </div>
                </div>
                <div class="album-bottom">
                    <h3>{{ album.title }}</h3>
                    <h4>{{ album.author }}</h4>
                    <p>{{ album.year }}</p>
                    <span>{{ album.genre }}</span>
                </div>
            </li>
        </ul>

    </main>

    <?php include __DIR__ . "/partials/footer.php" ?>

    <script src="js/main.js" charset="utf-8"></script>
</body>
</html>
