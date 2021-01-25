<?php
    include __DIR__ . "/partials/vars.php";
 ?>

<header>
    <div class="header-left">
        <img src="img/logo-spotify.png" alt="logo Spotify" class="img">
    </div>
    <div class="header-right">
        <select class="" name="">
            <?php foreach($allGenres as $genre) { ?>
                <option value="<?=$genre ?>"><?= $genre ?></option>
            <?php } ?>
        </select>
    </div>
</header>
