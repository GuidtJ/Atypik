<?php
require('actions/database.php');

// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si l'utilisateur a bien rempli tous les champs
    if (!empty($_POST['pseudo']) && !empty($_POST['password'])) {

        // Données de l'utilisateur
        $user_pseudo = htmlspecialchars($_POST['pseudo']);
        $user_password = htmlspecialchars($_POST['password']);

        // Vérifier si l'utilisateur existe (si le pseudo est correct)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        try {
            $checkIfUserExists->bindParam(1, $user_pseudo);
            $checkIfUserExists->execute();
        } catch (PDOException $e) {
            die("Erreur de requête : " . $e->getMessage());
        }

        if ($checkIfUserExists->rowCount() > 0) {
            // Récupérer les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();
            // Vérifier si le mot de passe est correct
            if (password_verify($user_password, $usersInfos['mdp'])) {

                // Authentifier l'utilisateur sur le site et récupérer ses données dans les variables globales de session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['lastname'];
                $_SESSION['firstname'] = $usersInfos['firstname'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];

                // Rediriger l'utilisateur vers la page d'accueil
                header('Location: index.php');
            } else {
                $errorMsg = "Votre mot de passe est incorrect...";
            }
        } else {
            $errorMsg = "Votre pseudo est incorrect...";
        }
    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
