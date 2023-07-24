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
        <img src="assets/img/carroussel/home.jpg" alt="photo_01" />
        <h2>La mode passe,<br> le style reste.</h2>
    </div>

    <section>
        <div class="title-product">
            <h2>Nouveautés</h2>
        </div>
        <div class="new-product">
            <div class="product">
                <a href="#">
                    <img src="assets/img/produits/homme/sneakers/Luka 2-homme-129.99-01.jpg" alt="sneaker" />
                    <div class="detail-product">
                        <h4>LUKA 2</h4>
                        <p>Jordan</p>
                        <p>129.99€</p>
                    </div>
                </a>
            </div>

            <div class="product">
                <a href="#">
                    <img src="assets/img/produits/accessoires/casquette/NIKEHERITAGE86 FUTURA WASHED CAP-casquette-22.99-01.jpg" alt="casquette" />
                    <div class="detail-product">
                        <h4>HERITAGE86 FUTURA WASHED CAP</h4>
                        <p>Nike</p>
                        <p>22.99€</p>
                    </div>
                </a>

            </div>

            <div class="product">
                <a href="#">
                    <img src="assets/img/produits/accessoires/lunette/OAKLEYHSTN-lunette-275.99-01.jpg" alt="lunette" />
                    <div class="detail-product">
                        <h4>HSTN</h4>
                        <p>Oakley</p>
                        <p>275.99€</p>
                    </div>
                </a>

            </div>
            <div class="product">
                <a href="#">
                    <img src="assets/img/produits/femme/jean/Levi's® 501® CROP-femme-59.99-01.jpg" alt="jean" />
                    <div class="detail-product">
                        <h4>501® CROP</h4>
                        <p>Levi's</p>
                        <p>49.99€</p>
                    </div>
                </a>

            </div>
            <div class="product">
                <a href="#">
                    <img src="assets/img/produits/homme/t-shirt/NIKENIKE SOLO SWOOSH SHORT SLEEVE HEAVYWEIGHT TOP-homme-49.99-01.jpg" alt="pantalon" />
                    <div class="detail-product">
                        <h4>SOLO SWOOSH SHORT SLEEVE HEAVYWEIGHT</h4>
                        <p>Nike</p>
                        <p>269.99€</p>
                    </div>
                </a>

            </div>

        </div>

    </section>

    <section>
        <div class="title-category">
            <h2>Catégories</h2>
        </div>
        <div class="category">
            <div class="category-product">
                <img src="assets/img/trois-blocs/homme.jpg" alt="photo_vêtement" />
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Homme</a>
                </div>
            </div>
            <div class="category-product">
                <img src="assets/img/trois-blocs/femme.jpg" alt="photo_sneakers" />
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Femme</a>
                </div>
            </div>
            <div class="category-product">
                <img src="assets/img/trois-blocs/accessoires.jpg" alt="photo_accessoires" />
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Accessoires</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="title-best-seller">
            <h2>Best-Seller</h2>
        </div>
        <div class="best-seller">
            <div class="best-seller-product">
                <a href="#">
                    <img src="assets/img/produits/homme/t-shirt/A.P.C.TEE WILLY-homme-119.99-02.jpg" alt="t-shirt">
                    <h4>A.P.C.TEE WILLY</h4>
                    <p>119.99€</p>
                </a>
            </div>

            <div class="best-seller-product">
                <a href="#">
                    <img src="assets/img/produits/femme/sneakers/Nike Air Max Plus-femme-189.99-01.jpg" alt="sneaker" />
                    <h4>NIKE AIR MAX PLUS</h4>
                    <p>189.99€</p>
                </a>
            </div>


            <div class="best-seller-product">
                <a href="#">
                    <img src="assets/img/produits/homme/t-shirt/NIKENIKE SOLO SWOOSH SHORT SLEEVE HEAVYWEIGHT TOP-homme-49.99-01.jpg" alt="t-shirt" />
                    <h4>NIKE SHORT SLEEVE HEAVYWEIGHT TOP</h4>
                    <p>49.99€</p>
                </a>
            </div>

            <div class="best-seller-product">
                <a href="#">
                    <img src="assets/img/produits/accessoires/lunette/CHIMI EYEWEAR01M ALMOST BLACK-lunette-139.99-01.jpg" alt="lunette" />
                    <h4>CHIMI EYEWEAR01M ALMOST BLACK</h4>
                    <p>139.99€</p>
                </a>
            </div>

        </div>
    </section>





</main>

<?php
require_once("inc/footer.inc.php");
