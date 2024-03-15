<?php
session_start();
require('actions/users/showOneUsersProfileAction.php');
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/navbar.php' ?>
    <br><br>

    <h1 class="text-center">Bienvenue sur votre profil</h1>

    <div class="container ">
        <?php if (isset($errorMsg)) {
            echo $errorMsg;
        }
        if (isset($getHisQuestions)) {
        ?>
            <div class="card w-50 mx-auto">
                <div class="card-body">
                    <h3 class="text-center">@<?= $user_pseudo; ?></h3>
                    <hr>
                    <h3 class="text-center"><?= $user_lastname . ' ' . $user_firstname; ?></h3>
                </div>
            </div>
            <br>
            <?php
            while ($question = $getHisQuestions->fetch()) {
            ?>
                <div class="card w-50 mx-auto">
                    <div class="card-header">
                        <a href="my-questions.php"><?= $question['titre']; ?></a>
                    </div>
                    <div class="card-body">
                        <?= $question['description']; ?>
                    </div>
                    <hr>
                    <div class="card-body">
                        <?= $question['contenu']; ?>
                    </div>
                    <div class="card-footer">
                        Par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                    </div>
                </div>
                <br>
        <?php
            }
        }
        ?>
    </div>




</body>

</html>