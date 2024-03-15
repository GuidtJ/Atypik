<?php
require('actions/database.php');
//Vérifier si l'id de la question est bien passé en paramètre dans l'url
if (isset($_GET['id']) && !empty($_GET['id'])) {

    $idOfQuestion = $_GET['id'];
    //Vérifier si la question existe
    $checkIfQuestionsExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionsExists->execute(array($idOfQuestion));

    if ($checkIfQuestionsExists->rowCount() > 0) {

        $questionInfos = $checkIfQuestionsExists->fetch();

        //Récupérer les données de la question
        if ($questionInfos['id_auteur'] == $_SESSION['id']) {

            $question_title = $questionInfos['titre'];
            $question_description = $questionInfos['description'];
            $question_content = $questionInfos['contenu'];

            $question_description = str_replace('<br />', '', $question_description,);
            $question_content = str_replace('<br />', '', $question_content,);
        } else {
            $errorMsg = "Vous n'êtes pas l'auteur de cette question";
        }
    } else {
        $errorMsg = "Aucune question trouvé";
    }
} else {
    $errorMsg = "Aucune question n'a été trouvé...";
}
