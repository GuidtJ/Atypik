<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br>
    <h1 class="text-center">Les Desserts</h1>

    <div class="container">
        <div class="row g-4 mt-2 ms-5 me-5">
            <?php
            // Liste des plats avec leurs informations
            $plats = array(
                array(
                    "title" => "Fondant au chocolat",
                    "image" => "./assets/img/fondant.jpg",
                    "description" => "",
                    "items" => array(
                        "Assiette blanche carré",
                        "Ligne de cacao en poudre",
                        "Fondant au chocolat",
                        "Boule vanille sur le fondant",
                        "2 points de chantilly",
                    )
                ),
                array(
                    "title" => "Crème Brûlée",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Assiette blanche carré",
                        "Serviette carré",
                        "Crème brulée au Sucre de Canne",
                    )
                ),
                array(
                    "title" => "Mousse au chocolat",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Assiette carré",
                        "Serviette carré",
                        "Mousse Chocolat",
                        "1 point de chantilly",
                    )
                ),
                array(
                    "title" => "Baba au Rhum",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Récipient ovale",
                        "Baba couper en 2",
                        "Chantilly",
                        "Raison imbibé de rhum",
                    )
                ),
                array(
                    "title" => "Tiramisu",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Assiette carré",
                        "Serviette carré",
                        "Tiramisu",
                        "Spéculos",
                    )
                ),
                array(
                    "title" => "Café / Thé Gourmand",
                    "image" => "./assets/img/cafeGourmand.jpg",
                    "description" => "",
                    "items" => array(
                        "Mini-crème brulé",
                        "Mini-Baba",
                        "Mini-Tiramisu (choix)",
                        "Mini-Mousse (choix)",
                        "Boule de glace",
                    )
                ),

            );

            // Parcours des plats pour afficher les cartes
            foreach ($plats as $plat) {
            ?>
                <div class="col-md-3 mb-3">
                    <div class="card mx-auto">
                        <h5 class="card-title text-center bg-light"><?php echo $plat['title']; ?></h5>
                        <?php if (!empty($plat['image'])) { ?>
                            <img src="<?php echo $plat['image']; ?>" class="card-img-top" alt="...">
                        <?php } ?>
                        <div class="card-body">
                            <hr>
                            <p class="card-text">
                                <?php if (!empty($plat['description'])) { ?>
                            <h6><?php echo $plat['description']; ?></h6>
                        <?php } ?>
                        <?php if (!empty($plat['items'])) { ?>
                            <ul>
                                <?php foreach ($plat['items'] as $item) { ?>
                                    <li><?php echo $item; ?></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                        </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>

</html>