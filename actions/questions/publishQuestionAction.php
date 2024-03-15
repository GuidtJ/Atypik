<?php
require('actions/database.php');

// Valider le formulaire
if (isset($_POST['validate'])) {

    // Vérifier si les champs ne sont pas vides
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {

        // Les données de la question
        $question_title = htmlspecialchars($_POST['title']);
        $question_description = nl2br(htmlspecialchars($_POST['description']));
        $question_content = nl2br(htmlspecialchars($_POST['content']));
        $question_date = date('d/m/y');
        $question_id_author = $_SESSION['id'];
        $question_pseudo_author = $_SESSION['pseudo'];

        // Insérer la question sur la question
        $insertQuestionOnWebsite = $bdd->prepare('INSERT INTO questions (titre, description, contenu, id_auteur, pseudo_auteur, date_publication) VALUES (:title, :description, :content, :id_author, :pseudo_author, :date)');
        $insertQuestionOnWebsite->bindParam(':title', $question_title);
        $insertQuestionOnWebsite->bindParam(':description', $question_description);
        $insertQuestionOnWebsite->bindParam(':content', $question_content);
        $insertQuestionOnWebsite->bindParam(':id_author', $question_id_author);
        $insertQuestionOnWebsite->bindParam(':pseudo_author', $question_pseudo_author);
        $insertQuestionOnWebsite->bindParam(':date', $question_date);

        $insertQuestionOnWebsite->execute();

        $successMsg = "Votre question a bien été publiée sur le site";
    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
