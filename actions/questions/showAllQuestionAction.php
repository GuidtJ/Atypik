<?php
require('actions/database.php');

// Récupérer les questions par défaut sans recherche
$getAllQuestions = $bdd->prepare('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication FROM questions ORDER BY id DESC LIMIT 0,5');
$getAllQuestions->execute();

// Vérifier si une recherche a été rentrée par l'utilisateur
if (isset($_GET['search']) && !empty($_GET['search'])) {

    // La recherche
    $userSearch = '%' . $_GET['search'] . '%';
    // Récupérer toutes les questions qui correspondent à la recherche (en fonction du titre)
    $getAllQuestions = $bdd->prepare('SELECT id, id_auteur, titre, description, pseudo_auteur, date_publication 
    FROM questions 
    WHERE titre LIKE :search OR description LIKE :search OR pseudo_auteur LIKE :search 
    ORDER BY id DESC');
    $getAllQuestions->bindParam(':search', $userSearch, PDO::PARAM_STR);
    $getAllQuestions->execute();
}
