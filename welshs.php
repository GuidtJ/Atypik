<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br>
    <h1 class="text-center">Les Welshs</h1>

    <div class="container">
        <div class="row g-4 mt-2 ms-5 me-5">
            <?php
            // Liste des plats avec leurs informations
            $plats = array(
                array(
                    "title" => "Welsh Complet",
                    "image" => "./assets/img/welshComplet.jpg",
                    "description" => "",
                    "items" => array(
                        "Pain grillé imbibé de bière",
                        "Jambon",
                        "Cheddar",
                        "Créme liquide",
                        "Oeufs au plat",
                        "déco",
                        "Frites"

                    )
                ),
                array(
                    "title" => "Welsh Saumon",
                    "image" => "./assets/img/saumon.jpg",
                    "description" => "",
                    "items" => array(
                        "Pain grillé + mélange tikka",
                        "Saumon cuit vapeur",
                        "Cheddar",
                        "Citron",
                        "Créme liquide",
                        "déco",
                        "Frite"
                    )
                ),
                array(
                    "title" => "Welsh Chorizo",
                    "image" => "./assets/img/chorizo.jpg",
                    "description" => "",
                    "items" => array(
                        "Pain imbibé de bière",
                        "Chorizo",
                        "Cheddar",
                        "3 rondelles de Chorizo",
                        "Créme liquide",
                        "déco",
                        "Frites",
                    )
                ),
                array(
                    "title" => "Welsh Maroilles",
                    "image" => "./assets/img/maroille.jpg",
                    "description" => "",
                    "items" => array(
                        "Pain imbibé de bière",
                        "Jambon",
                        "Cheddar",
                        "Créme liquide",
                        "1 Tranche de maroille",
                        "déco",
                        "Frites",
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