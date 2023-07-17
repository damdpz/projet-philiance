<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/article.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
$page = $_GET["page"];
// echo var_dump($page);
$categories = array(
    "homme" => array(
        "showcase" => "assets/img/category/img-category.jpg",
        "subcat" => array(
            "jean" => "assets/img/category/jean.jpg",
            "T-shirt" => "assets/img/category/t-shirt.jpg",
            "Sneakers" => "assets/img/category/sneakers.jpg",
            "Accessoires" => "assets/img/category/accessoires.jpg"
        )
    ),
    "femme" => array(
        "showcase" => "assets/img/category/t-shirt.jpg",
        "subcat" => array(
            "robe" => "assets/img/category/jean.jpg",
            "T-shirt" => "assets/img/category/t-shirt.jpg",
            "Sneakers" => "assets/img/category/sneakers.jpg",
            "Accessoires" => "assets/img/category/accessoires.jpg"
        )
    ),
    "sneakers" => array(
        "showcase" => "assets/img/category/img-sneakers.jpg",
        "subcat" => array(
            "mocasin" => "assets/img/category/jean.jpg",
            "talons" => "assets/img/category/t-shirt.jpg",
            "bottes" => "assets/img/category/sneakers.jpg",
            "espadrilles" => "assets/img/category/accessoires.jpg"
        )
    ),
    "accessoires" => array(
        "showcase" => "assets/img/category/img-accessoires.jpg",
        "subcat" => array(
            "ceintures" => "assets/img/category/jean.jpg",
            "sac" => "assets/img/category/t-shirt.jpg",
            "lunettes" => "assets/img/category/sneakers.jpg",
            "chapeaux" => "assets/img/category/accessoires.jpg"
        )
    )
    );
if(isset($page)) {
    $list = $categories[$page]; //$categories["homme"];
    $showcase = $categories[$page]["showcase"];
    $subcat = $categories[$page]["subcat"];
    // echo var_dump($list);
}

?>



<main>
    <section>
        <div class="article-container">
            <image src="../PROJET_PHILIANCE/assets/img/nouveautes/pull.jpg" alt="pull">

                <div class="article-commander">
                    <div class="title-article">
                        <h3>SWEETSHIRTS - CREW NECK</h3>
                    </div>
                    <div class="btn-article">
                        <a href="panier.php"><input type="submit" value="commander" class="form-control" aria-label="EURO amount (with dot and two decimal places)"></a>
                        <span class="input-group-text">€</span>
                        <span class="input-group-text">199.99</span>
                    </div>



                    <div class="description-product">
                        <h3>DESCRIPTION</h3>
                        <p> Le pull SWEATSHIRTS - CREW NECK de couleur rose est disponible sur DAIKLES.
                            Ce pull oversize est 100% Cotton</p>
                    </div>

                </div>


    </section>

    <section>
        <div class="title-product">
            <h2>NOS SÉLÉCTIONS</h2>
        </div><br>

        <div class="product">
            <div class="product-for-you">
                <image src="../PROJET_PHILIANCE/assets/img/nouveautes/pantalon.webp" alt="pantalon">
                    <div class="type-product-for-you">
                        <a href="#" class="btn-product">Carhartt WIP Nolan Pant</a>
                    </div>
                    <a href="#" class="btn-price-product">89.99€</a>
            </div>

            <div class="product-for-you">
                <image src="../PROJET_PHILIANCE/assets/img/nouveautes/veste.webp" alt="veste">
                    <div class="type-product-for-you">
                        <a href="#" class="btn-product">X WALES BONNER KNIT TRACK</a>
                    </div>
                    <a href="#" class="btn-price-product">279.99€</a>
            </div>

            <div class="product-for-you">
                <image src="../PROJET_PHILIANCE/assets/img/nouveautes/sneakers.jpg" alt="sneakers">
                    <div class="type-product-for-you">
                        <a href="#" class="btn-product">Nike WMNS DUNK LOW LX</a>
                    </div>
                    <a href="#" class="btn-price-product">119.99€</a>
            </div>
    </section>
</main>

<?php
require_once("inc/footer.inc.php");
