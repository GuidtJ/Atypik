<?php

require('actions/database.php');

if (isset($_POST['validate'])) {

    if (!empty($_POST['answer'])) {

        $user_answer = nl2br(htmlspecialchars($_POST['answer']));

        $insertAnswers = $bdd->prepare('INSERT INTO answers (id_auteur, pseudo_auteur, id_question, contenu) VALUES (:id_auteur, :pseudo_auteur, :id_question, :contenu)');
        $insertAnswers->bindParam(':id_auteur', $_SESSION['id'], PDO::PARAM_INT);
        $insertAnswers->bindParam(':pseudo_auteur', $_SESSION['pseudo'], PDO::PARAM_STR);
        $insertAnswers->bindParam(':id_question', $idOfTheQuestion, PDO::PARAM_INT);
        $insertAnswers->bindParam(':contenu', $user_answer, PDO::PARAM_STR);
        $insertAnswers->execute();
    }
}
