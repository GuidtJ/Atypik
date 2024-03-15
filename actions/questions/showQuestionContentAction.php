<?php

require('actions/database.php');

// Vérifier si l'id de la question est rentrée dans l'URL
if (isset($_GET['id']) && !empty($_GET['id'])) {

    // Récupérer l'identifiant de la question
    $idOfTheQuestion = $_GET['id'];
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = :questionId');
    $checkIfQuestionExists->bindParam(':questionId', $idOfTheQuestion, PDO::PARAM_INT);
    $checkIfQuestionExists->execute();

    if ($checkIfQuestionExists->rowCount() > 0) {

        // Récupérer toutes les datas de la question
        $questionInfos = $checkIfQuestionExists->fetch();

        // Stocker les datas de la question dans des variables propres.
        $question_title = $questionInfos['titre'];
        $question_content = $questionInfos['contenu'];
        $question_id_author = $questionInfos['id_auteur'];
        $question_pseudo_author = $questionInfos['pseudo_auteur'];
        $question_publication_date = $questionInfos['date_publication'];
    } else {
        $errorMsg =  "Aucune question n'a été trouvée";
    }
} else {
    $errorMsg = "Aucune question n'a été trouvée";
}
