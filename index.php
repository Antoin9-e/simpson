<?php

session_start();

require_once 'traitement/jsonHandler.php';

$data = loadJsonData('asset/json/punishment.json');

$_SESSION['data'] = $data;


include 'composants/header.php';

include 'composants/board.php';

include 'composants/parametre.php';

include 'composants/footer.php';


echo "Hello, World!";


?>