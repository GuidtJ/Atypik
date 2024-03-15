<?php require('actions/users/signupAction.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="card-body">
                <form class="container" method="POST">
                    <?php if (isset($errorMsg)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $errorMsg; ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3 row">
                        <label for="pseudo" class="col-sm-6 col-form-label">Pseudo</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="pseudo" placeholder="Votre pseudo" name="pseudo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lastname" class="col-sm-6 col-form-label">Nom</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="lastname" placeholder="Votre nom" name="lastname">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="firstname" class="col-sm-6 col-form-label">Prénom</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="firstname" placeholder="Votre prénom" name="firstname">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="password" class="col-sm-6 col-form-label">Mot de passe</label>
                        <div class="col-sm-12">
                            <input type="password" class="form-control" id="password" placeholder="Votre mot de passe" name="password">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-primary" name="validate">S'inscrire</button>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-12">
                            <a href="login.php" class="mt-3">J'ai déjà un compte, je me connecte</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>