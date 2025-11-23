<?php

function loadJsonData($filename) {
    if (!file_exists($filename)) {
        echo "Fichier JSON non trouvé : " . htmlspecialchars($filename);
        return [];
    }
    $jsonData = file_get_contents($filename);

    $data = json_decode($jsonData, true);
   
    return $data;
}

function getSeason($saisonNumber,$data) {
   $_SESSION['saison'] = $data[$saisonNumber];
    
}

function getEpisode($saison,$episodeNumber){
    $key = array_keys($saison);
    $values = array_values($saison);
   
    var_dump($key);
    echo "Episode Number: " . htmlspecialchars($episodeNumber);
    $_SESSION['episode'] = $values[$episodeNumber - 1];
    
    
}


?>