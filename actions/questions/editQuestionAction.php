<?php
require('actions/database.php');

// Validation du formulaire
if (isset($_POST['validate'])) {

    // Vérifier si les champs sont remplis
    if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {

        // Les données à faire passer dans la requête
        $new_question_title = htmlspecialchars($_POST['title']);
        $new_question_description = nl2br(htmlspecialchars($_POST['description']));
        $new_question_content = nl2br(htmlspecialchars($_POST['content']));

        // Modifier les informations de la question qui possède l'id rentré en paramètre dans l'URL
        $editQuestionOnWebsite = $bdd->prepare('UPDATE questions SET titre = :title, description = :description, contenu = :content WHERE id = :questionId ');

        // Liaison des paramètres
        $editQuestionOnWebsite->bindParam(':title', $new_question_title);
        $editQuestionOnWebsite->bindParam(':description', $new_question_description);
        $editQuestionOnWebsite->bindParam(':content', $new_question_content);
        $editQuestionOnWebsite->bindParam(':questionId', $idOfQuestion, PDO::PARAM_INT);

        try {
            $editQuestionOnWebsite->execute();
        } catch (PDOException $e) {
            die("Erreur de requête : " . $e->getMessage());
        }

        // Redirection vers la page d'affichage des questions de l'utilisateur
        header('Location: my-questions.php');
    } else {
        $errorMsg = "Veuillez compléter tous les champs...";
    }
}
