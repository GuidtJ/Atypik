<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>

<body>
    <?php include 'includes/navbar.php'; ?>
    <br>
    <h1 class="text-center">Les Planches<img src="./assets/img/planche.png" alt=""></h1>

    <div class="container">
        <div class="row g-4 mt-2 ms-5 me-5">
            <?php
            // Liste des plats avec leurs informations
            $plats = array(
                array(
                    "title" => "Planches Mixte",
                    "image" => "./assets/img/mixte.jpg",
                    "description" => "",
                    "items" => array(
                        "3 x 4 tranches de charcuteries",
                        "3 x 3 tranches de fromages"
                    )
                ),
                array(
                    "title" => "Planches Charcutière",
                    "image" => "./assets/img/charcutiere.jpg",
                    "description" => "Assortiment de Charcuteries",
                    "items" => array()
                ),
                array(
                    "title" => "Planches Fromagère",
                    "image" => "",
                    "description" => "Assortiment de Fromages",
                    "items" => array()
                ),

                array(
                    "title" => "Atypik Gourmande",
                    "image" => "./assets/img/atipikGourmande.jpg",
                    "description" => "",
                    "items" => array(
                        "Jambon blanc fumé",
                        "Jambon serrano",
                        "Terrine",
                        "Pot'je vleesch",
                        "Mousse de foie"
                    )
                ),
                array(
                    "title" => "Atypik Des fromages locaux",
                    "image" => "",
                    "description" => "",
                    "items" => array(
                        "Mont des cats",
                        "Bergues",
                        "Maroilles",
                        "Mimolette 1/3 vieille",

                    )
                ),
                array(
                    "title" => "Atypik De la mer",
                    "image" => "./assets/img/atipikMer.jpg",
                    "description" => "",
                    "items" => array(
                        "Saumon fumé",
                        "Rillettes de thon",
                        "crevettes (12)",
                        "(Filets de harengs)",
                    )
                ),
                array(
                    "title" => "Trio de croques",
                    "image" => "./assets/img/croque.jpg",
                    "description" => "3 croque-monsieur découpés en 4",
                    "items" => array(
                        "Le classique (Jambon, fromage)",
                        "Du Berger (tomate, chèvre)",
                        "Nordique (Saumon fumé, fromage frais)"
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
                    "title" => "Camemberts Roti",
                    "image" => "./assets/img/camembertRoti (2).jpg",
                    "description" => "",
                    "items" => array(
                        "Salade + déco",
                        "1 Camemberts Rôti",
                        "6 Toasts à l'huile d'olive et thym",

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