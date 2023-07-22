<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
// echo '<link href="assets/css/index.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>

<main>


    <div class="carroussel">
        <img src="<?php echo $showcase ?>" alt="photo_01">
    </div>

    <section>
        <div class="title-category">
            <h2>Catégories</h2>
        </div>

        <div class="category">
            <?php foreach ($subcat as $key => $value) : ?>
                <div class="category-product">
                    <img src="<?php echo $value['showcase_img'] ?>" alt="<?php echo $value['nom'] ?>">
                    <div class="overlay-btn">
                        <a href="subcategory.php?id=<?php echo $value['id'] ?>" class="category-btn"><?php echo $value['nom'] ?></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>


    <section>
        <div class="title-nouveaute">
            <h2>Nouveauté</h2>
        </div>

        <div class="whatsnew">
            <div class="nouveaute-product">
                <a href="#">
                    <img src="assets/img/produits/homme/sneakers/Luka 2-homme-129.99-01.jpg" alt="sneaker" />
                    <div class="type-nouveaute">
                        <h4>LUKA 2</h4>
                        <p>129.99€</p>
                </a>
            </div>
        </div>


        <div class="nouveaute-product">
            <a href="#">
                <img src="assets/img/produits/accessoires/casquette/NIKEHERITAGE86 FUTURA WASHED CAP-casquette-22.99-01.jpg" alt="casquette" />
                <div class="type-nouveaute">
                    <h4>HERITAGE86 FUTURA WASHED CAP</h4>
                    <p>22.99€</p>
            </a>
        </div>
        </div>
        <div class="nouveaute-product">
            <a href="#">
                <img src="assets/img/produits/accessoires/lunette/OAKLEYHSTN-lunette-275.99-01.jpg" alt="lunette" />
                <div class="type-nouveaute">
                    <h4>HSTN</h4>
                    <p>275.99€</p>
            </a>
        </div>
        </div>
        <div class="nouveaute-product">
            <a href="#">
                <img src="assets/img/produits/femme/jean/Levi's® 501® CROP-femme-59.99-01.jpg" alt="jean" />
                <div class="type-nouveaute">
                    <h4>501® CROP</h4>
                    <p>49.99€</p>
            </a>
        </div>
        </div>

        </div>
        <section>
            <div class="notre-selection">
                <h2>Notre Selection</h2>
            </div>

            <div class="notre-selection">
                <div class="notre-selection-product">
                    <a href="#">
                        <img src="assets/img/produits/homme/t-shirt/A.P.C.TEE WILLY-homme-119.99-02.jpg" alt="t-shirt">
                        <div class="type-notre-selection">
                            <h4>A.P.C.TEE WILLY</h4>
                            <p>119.99€</p>
                        </div>
                    </a>
                </div>
                <div class="notre-selection-product">
                    <a href="#">
                        <img src="assets/img/produits/femme/sneakers/Nike Air Max Plus-femme-189.99-01.jpg" alt="sneaker" />
                        <div class="type-notre-selection">
                            <h4>NIKE AIR MAX PLUS</h4>
                            <p>189.99€</p>
                        </div>
                    </a>
                </div>
                <div class="notre-selection-product">
                    <a href="#">
                        <img src="assets/img/produits/homme/t-shirt/NIKENIKE SOLO SWOOSH SHORT SLEEVE HEAVYWEIGHT TOP-homme-49.99-01.jpg" alt="t-shirt" />
                        <div class="type-notre-selection">
                            <h4>NIKE SHORT SLEEVE HEAVYWEIGHT TOP</h4>
                            <p>49.99€</p>
                        </div>
                    </a>
                </div>
            </div>

</main>

<?php
require_once("inc/footer.inc.php");
