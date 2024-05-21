<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" id="#" href="index.php">ATYPIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                if (isset($_SESSION['auth'])) {
                    // Si l'utilisateur est connecté, afficher ces liens
                ?>
                    <!--DropDown Planches et Tapas -->
                    <div class="dropdown-center me-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Planches et Tapas
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="planches.php">Les Planches</a></li>
                            <li><a class="dropdown-item" href="tapas.php">Les Tapas</a></li>
                        </ul>
                    </div>
                    <!-- DropDown plats chauds -->
                    <div class="dropdown-center me-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Plats chauds
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="plats.php">Les Plats</a></li>
                            <li><a class="dropdown-item" href="welshs.php">Les Welshs</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="desserts.php">Les Desserts</a>
                    </li>
                    <div class="dropdown-center">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Forum
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="publish-question.php">Publier une question</a></li>
                            <li><a class="dropdown-item" href="allQuestions.php">Les questions</a></li>
                        </ul>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="my-questions.php">Mes questions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?> ">Mon profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="actions/users/logoutAction.php">Déconnexion</a>
                    </li>
                <?php
                } else {
                    // Si l'utilisateur n'est pas connecté, afficher les liens d'inscription et de connexion
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>