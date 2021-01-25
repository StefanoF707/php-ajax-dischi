<?php
    include __DIR__ . "/partials/vars.php";
 ?>

<header>
    <div class="header-left">
        <img src="img/logo-spotify.png" alt="logo Spotify" class="img">
    </div>
    <div class="header-right">

        <form action="server.php" method="get">
            <select name="genres">
                <option value="All">All</option>
                <?php foreach($allGenres as $genre) { ?>
                    <option value="<?=$genre ?>"><?= $genre ?></option>
                <?php } ?>
            </select>
            <button type="submit" name="button">Filtra per genere</button>
        </form>
        
    </div>
</header>
