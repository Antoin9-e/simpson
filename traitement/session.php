<?php
// Démarre la session
session_start();

// Détruit la session
session_destroy();

// Réponse au client
http_response_code(200);
?>