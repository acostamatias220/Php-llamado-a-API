<main>
    <section>
        <img src="<?= $poster_url ?> width="200" height="300" alt="Poster de la pelicula">
        
    </section>
    <hgroup>
        <h3><?= $title ?> - <?= $until_message  ?></h3>
        <p>Fecha de estreno: <?= $release_date?></p>
        <p>La siguiente es: <?= $following_production["title"]?></p>
    </hgroup>
</main>