<?php
require('actions/users/securityAction.php');
require('actions/questions/showAllQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container">
        <form method="GET">
            <div class="form-group row d-flex justify-content-center">
                <div class="col-4">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
        <br>
        <?php
        while ($question = $getAllQuestions->fetch()) {
        ?>
            <div class="card col-6 mx-auto">
                <div class="card-header">
                    <a href="questions.php?id=<?= $question['id']; ?>">
                        <?= $question['titre']; ?>
                    </a>
                </div>
                <div class="card-body">
                    <?= $question['description']; ?>
                </div>
                <div class="card-footer">
                    Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                </div>
            </div>
            <br>
        <?php
        }
        ?>
    </div>
</body>

</html>