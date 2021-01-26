<?php
    include __DIR__ . "/vars.php";
 ?>

<header>
    <div class="header-left">
        <img src="img/logo-spotify.png" alt="logo Spotify" class="img">
    </div>


    <div class="header-right">

            <select name="filteredGenre" v-model="filterGenre">
                <option value="">All</option>
                <?php foreach($allGenres as $genre) { ?>
                    <option value="<?= $genre ?>"><?= $genre ?></option>
                <?php } ?>
            </select>
            <button type="submit" name="button" @click="filterAlbums">Filtra per genere</button>

    </div>
</header>
