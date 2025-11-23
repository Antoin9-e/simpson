<?php

session_start();

if (isset($_POST['saison']) && isset($_POST['episode'])) {
    $saison  = $_POST['saison'];
    $episode = $_POST['episode'];

    $_SESSION['saisonChoisie']  = $saison;
    $_SESSION['episodeChoisi']  = $episode;



    $data = $_SESSION['data'];
    $_SESSION['phrase'] = $data['saisons'][$saison][$episode];

} 
header("Location: ../index.php");

?>