<?php
require('actions/users/securityAction.php');
require('actions/questions/myQuestionsAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            if ($getAllMyQuestions->rowCount() == 0) {
                // Affiche le message si l'utilisateur n'a pas posé de question
            ?>
                <div class="col-md-10 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">Tu n'as rien publié pour l'instant.</p>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                while ($question = $getAllMyQuestions->fetch()) {
                ?>
                    <div class="col-md-10 mb-4">
                        <div class="card">
                            <h5 class="card-header">
                                <a href="questions.php?id=<?= $question['id']; ?>">
                                    <?= $question['titre']; ?>
                                </a>
                            </h5>
                            <div class="card-body">
                                <p class="card-text">
                                    <?= $question['description']; ?>
                                    <hr>
                                    <?= $question['contenu']; ?>
                                </p>
                                <div class="text-center">
                                    <a href="questions.php?id=<?= $question['id']; ?>" class="btn btn-primary">Accéder à la question</a>
                                    <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-warning">Modifier la question</a>
                                    <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger">Supprimer la question</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="container text-center">
            <a href="publish-question.php"><button type="button" class="btn btn-success">Publie une question</button></a>
        </div>
    </div>
</body>

</html>