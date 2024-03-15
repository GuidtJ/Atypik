<?php require('actions/users/loginAction.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include 'includes/head.php'; ?>
</head>

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
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" placeholder="Votre pseudo" name="pseudo">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" placeholder="Votre mot de passe" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="validate">Se connecter</button>
                    <br><br>
                    <a href="signup.php">
                        <p>Je n'ai pas de compte, je m'inscris</p>
                    </a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>