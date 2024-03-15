<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=atipik;charset=utf8;', 'root');
} catch (PDOException $e) {
    die('Une erreur a été trouvée : ' . $e->getMessage());
}

// Démarrer la session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
