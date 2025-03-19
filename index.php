<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

if ($result === false) {
    die('Error en cURL: ' . curl_error($ch));
}

$data = json_decode($result, true);
curl_close($ch);

if ($data === null) {
    die('Error en JSON: ' . json_last_error_msg());
}
?>

<head>
    <meta charset="UTF-8">
    <title>La proxima pelicula de marvel</title>
    <meta name="description" content="la proxima pelicula de marvel">
    <meta name="viepowrt" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">

</head>
<main>
    <section>
        <img src="<?= $data["poster_url"];?> width="200" height="300" alt="Poster de la pelicula">
        
    </section>
    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"], " dias"; ?></h3>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>


</main>

<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }
    img {
        border-radius: 10px;
        height: 600px;
    }
</style>



