<?php

require('actions/database.php');

// Récupérer l'identifiant de l'utilisateur
if (isset($_GET['id']) && !empty($_GET['id'])) {

    // L'id de l'utilisateur
    $idOfUser = $_GET['id'];

    // Vérifier si l'utilisateur existe
    $checkIfUserExists = $bdd->prepare('SELECT pseudo, lastname, firstname FROM users WHERE id = ? ORDER BY id DESC');
    $checkIfUserExists->bindParam(1, $idOfUser, PDO::PARAM_INT);
    $checkIfUserExists->execute();

    if ($checkIfUserExists->rowCount() > 0) {

        // Récupérer toutes les données de l'utilisateur
        $usersInfos = $checkIfUserExists->fetch();

        $user_pseudo = $usersInfos['pseudo'];
        $user_lastname = $usersInfos['lastname'];
        $user_firstname = $usersInfos['firstname'];

        // Récupérer toutes les questions publiées par l'utilisateur
        $getHisQuestions = $bdd->prepare('SELECT * FROM questions WHERE id_auteur = ?');
        $getHisQuestions->bindParam(1, $idOfUser, PDO::PARAM_INT);
        $getHisQuestions->execute();
    } else {
        $errorMsg = "Aucun utilisateur trouvé";
    }
} else {
    $errorMsg = "Aucun utilisateur trouvé...";
}
