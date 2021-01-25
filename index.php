<?php
    include __DIR__ . "/partials/db.php";
    include __DIR__ . "/partials/vars.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b954c4656e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Albums</title>
</head>
<body>

    <?php include __DIR__ . "/partials/header.php" ?>

    <main>

        <ul id="albums">
            <?php foreach ($albums as $album) { ?>
                <!-- struttura di ciascun album -->
                <li class="album">

                    <!-- locandina -->
                    <div class="album-top">
                        <img src="img/albums/<?php echo  $album["poster"] ?>.jpg" alt="<?php echo "Album " . $album["title"] ?>" class="img-fit">
                        <div class="layover">
                            <i class="far fa-play-circle"></i>
                        </div>
                    </div>
                    <!-- /locandina -->

                    <!-- infobox -->
                    <div class="album-bottom">
                        <h3>
                            <?php echo $album["title"] ?>
                        </h3>
                        <h4>
                            <?php echo $album["author"] ?>
                        </h4>
                        <p>
                            <?php echo $album["year"] ?>
                        </p>
                        <?php foreach($album["genres"] as $genre) { ?>
                            <span><?php echo $genre ?></span>
                        <?php } ?>
                    </div>
                    <!-- /infobox -->
                </li>
                <!-- /struttura di ciascun album -->
            <?php } ?>
        </ul>

    </main>

    <?php include __DIR__ . "/partials/footer.php" ?>

</body>
</html>
