<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br>
    <h1 class="text-center">Les Plats</h1>

    <div class="container">
        <div class="row g-4 mt-2 ms-5 me-5">
            <?php
            // Liste des plats avec leurs informations
            $plats = array(
                array(
                    "title" => "Pot'Jevleesch",
                    "image" => "./assets/img/potch.jpg",
                    "description" => "",
                    "items" => array(
                        "Potch",
                        "Endives, tomates cerise, déco",
                        "Frites"

                    )
                ),
                array(
                    "title" => "Carbonnade Flamande",
                    "image" => "./assets/img/carbonnade.jpg",
                    "description" => "",
                    "items" => array(
                        "Grande assiette creuse",
                        "1 portion de carbonnade",
                        "Décoration",
                        "Frites"
                    )
                ),
                array(
                    "title" => "Fish and Chips Flamande",
                    "image" => "./assets/img/fish (2).jpg",
                    "description" => "",
                    "items" => array(
                        "Grande assiette noir",
                        "Salade + déco",
                        "citron",
                        "Sauce Fish",
                        "Frites",
                    )
                ),
                array(
                    "title" => "Pavé de RumSteak",
                    "image" => "./assets/img/pavé (2).jpg",
                    "description" => "",
                    "items" => array(
                        "Salades + déco",
                        "Purée de légumes",
                        "Sauce: Poivre, Maroilles, Roquefort",
                        "Frites"
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