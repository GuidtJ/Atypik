<?php
require('actions/users/securityAction.php');
require('actions/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="d-flex justify-content-center">
        <div class="card h-100 w-50">
            <div class="card-body">
                <form class="container" method="POST">
                    <?php
                    if (isset($errorMsg)) {
                        echo '<div class="alert alert-danger" role="alert">' . $errorMsg . '</div>';
                    } elseif (isset($successMsg)) {
                        echo '<div class="alert alert-success" role="alert">' . $successMsg . '</div>';
                    }
                    ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description de la question</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
                        <textarea class="form-control" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="validate">Publier la question</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>