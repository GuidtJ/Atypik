<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br>
    <h1 class="text-center">Tapas<img src="./assets/img/icons8-nuggets-53.png" alt=""> </h1>

    <div class="container">
        <div class="row g-4 mt-2 ms-5 me-5">
            <?php
            // Liste des plats avec leurs informations
            $plats = array(
                array(
                    "title" => "Tenders de Poulet",
                    "image" => "./assets/img/tenders.jpg",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "7 pcs tenders",
                    )
                ),
                array(
                    "title" => "Croquettes de Crevettes",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "3 pcs croquettes de crevettes",


                    )
                ),
                array(
                    "title" => "Camemberts Frits",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "5 pcs de camemberts frits",

                    )
                ),
                array(
                    "title" => "Sticks Mozza",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "11 Sticks Mozza",

                    )
                ),
                array(
                    "title" => "Oignons Rings",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "11 Oignons Rings",

                    )
                ),
                array(
                    "title" => "Toasts Chèvre",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "7 toasts chèvre",

                    )
                ),
                array(
                    "title" => "Accras de Morue",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "11 Accras de morue",

                    )
                ),
                array(
                    "title" => "Beignets de Calamars",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "2 pots de sauce",
                        "11 Beignets de Calamars",

                    )
                )
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