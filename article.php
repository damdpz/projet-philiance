<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/article.css" rel="stylesheet" type="text/css"';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>



<main>
    <section>
        <div class="article-container">
            <div class="image-article">
                <div class="one">
                    <image src="../PROJET_PHILIANCE/assets/img/nouveautes/pull.jpg" alt="pull">
                </div>
                <div class="two">
                    <image src="../PROJET_PHILIANCE/assets/img/category/pullover-hand.webp" alt="pull">
                </div>
            </div>

            <div class="description-article">
                <div class="titre-article">
                    <h3>SWEETSHIRTS - CREW NECK</h3>
                </div>
                <div class="prix-article">
                <h3>199.99 €</h3>
                </div>
                <p> Le pull SWEATSHIRTS - CREW NECK de couleur bois de cèdre est disponible sur DAIKLES.
                    Ce pull oversize est 100% Cotton</p>

                <p>Numéro d'article: 15CMSS022AZE5086W-456
                    <br>
                    Sexe : Hommes
                    <br>
                    Couleur : Bois de cèdre
                    <br>
                    Matériel : 100% coton
                </p>
                <a href="panier.php" class="btn-article">Ajouter au panier</a>
            </div>
        </div>

        </div>

    </section>

    <section>
        <div class="title-selection">
            <h2>NOS SÉLÉCTIONS</h2>
        </div><br>

        <div class="selection">
            <div class="selection-article">
                <image src="../PROJET_PHILIANCE/assets/img/nouveautes/pantalon.webp" alt="pantalon">
                    <div class="titre-selection">
                        <a href="#" class="btn-selection">CARHARTT WIP NOLAN PANT
                        </a>
                    </div>
                    <a href="#" class="btn-price-selection">89.99€</a>
            </div>

            <div class="selection-article">
                <image src="../PROJET_PHILIANCE/assets/img/nouveautes/veste.webp" alt="veste">
                    <div class="titre-selection">
                        <a href="#" class="btn-selection">X WALES BONNER KNIT TRACK</a>
                    </div>
                    <a href="#" class="btn-price-selection">279.99€</a>
            </div>

            <div class="selection-article">
                <image src="../PROJET_PHILIANCE/assets/img/nouveautes/sneakers.jpg" alt="sneakers">
                    <div class="titre-selection">
                        <a href="#" class="btn-selection">Nike WMNS DUNK LOW LX</a>
                    </div>
                    <a href="#" class="btn-price-selection">119.99€</a>
            </div>
    </section>
</main>

<?php
require_once("inc/footer.inc.php");
