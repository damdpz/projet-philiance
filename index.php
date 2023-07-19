
<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
// echo '<link href="assets/css/index.css" rel="stylesheet" type="text/css"';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>


<main>
    <div class="carroussel">
        <img src="assets/img/carroussel/home.jpg" alt="photo_01"/>
        <h2>La mode passe,<br> le style reste.</h2>
    </div>

    <section>
        <div class="title-product">
            <h2>Nouveautés</h2>
        </div>
        <div class="new-product">
            <div class="product">
                <img src="assets/img/nouveautes/sneakers.jpg" alt="sneakers"/>
                <div class="detail-product">
                    <div class="type-product">
                        <a href="#">WMNS DUNK LOW LX</a>
                        <div>Nike</div>
                    </div>
                    <a href="#" class="price-product">109.99€</a>
                </div>
            </div>
            <div class="product">
                <img src="assets/img/nouveautes/casquette.webp" alt="casquette"/>
                <div class="detail-product">
                    <div class="type-product">
                        <a href="#">HERITAGE86 FUTURA WASHED CAP</a>
                        <div>Nike</div>
                    </div>
                    <a href="#" class="price-product">22.99€</a>
                </div>
            </div>
            <div class="product">
                <img src="assets/img/nouveautes/lunette.webp" alt="casquette"/>
                <div class="detail-product">
                    <div class="type-product">
                        <a href="#">03.2 BLACK SUNGLASSES</a>
                        <div>Chimi Eyewear</div>
                    </div>
                    <a href="#" class="price-product">79.99€</a>
                </div>
            </div>
            <div class="product">
                <img src="assets/img/nouveautes/veste.webp" alt="veste"/>
                <div class="detail-product">
                    <div class="type-product">
                        <a href="#">X WALES BONNER KNIT TRACK TOP</a>
                        <div>Adidas</div>
                    </div>
                    <a href="#" class="price-product">279.99€</a>
                </div>
            </div>
            <div class="product">
                <img src="assets/img/nouveautes/pantalon.webp" alt="pantalon"/>
                <div class="detail-product">
                    <div class="type-product">
                        <a href="#">SPRINGDALE RELAXED</a>
                        <div>Closed</div>
                    </div>
                    <a href="#" class="price-product">269.99€</a>
                </div>
            </div>

        </div>
        </div>
    </section>

    <section>
        <div class="title-category">
            <h2>Catégories</h2>
        </div>
        <div class="category">
            <div class="category-product">
                <img src="assets/img/trois-blocs/vetement_03.jpg" alt="photo_vêtement"/>
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Vêtements</a>
                </div>
            </div>
            <div class="category-product">
                <img src="assets/img/trois-blocs/sneakers_01.jpg" alt="photo_sneakers"/>
                <div class="overlay-btn">
                    <a href="#" class="category-btn">Sneakers</a>
                </div>
            </div>
            <div class="category-product">
                <img src="assets/img/trois-blocs/accessoire_01.jpg" alt="photo_accessoires"/>
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
                <img src="assets/img/best-seller/produit-01/01.webp" alt="Article01"/>
                <div class="type-best-seller">
                    <a href="#" class="btn-best-seller">NIKEMLB TEXAS RANGERS OFFICIAL REPLICA JERSEY CITY CONNECT</a>
                </div>
                <a href="#" class="price-best-seller">269.99€</a>
            </div>
            <div class="best-seller-product">
                <img src="assets/img/best-seller/produit-02/01.webp" alt="Article02"/>
                <div class="type-best-seller">
                    <a href="#" class="btn-best-seller">NIKEAIR VAPORMAX 2023 FK</a>
                </div>
                <a href="#" class="price-best-seller">269.99€</a>
            </div>
            <div class="best-seller-product">
                <img src="assets/img/best-seller/produit-03/01.webp" alt="Article03"/>
                <div class="type-best-seller">
                    <a href="#" class="btn-product">NIKESPORTSWEAR TEE</a>
                </div>
                <a href="#" class="price-best-seller">269.99€</a>
            </div>
            <div class="best-seller-product">
                <img src="assets/img/best-seller/produit-04/01.webp" alt="Article04"/>
                <div class="type-best-seller">
                    <a href="#" class="btn-best-seller">CHIMI EYEWEAR04 LIGHT GREEN SUNGLASSES</a>
                </div>
                <a href="#" class="price-best-seller">269.99€</a>
            </div>
        </div>
    </section>

    <section class="about-container">
        <div class="grid-about">
            <div class="grid-video">
                <video src="assets/videos/carroussel.mp4" type="video.mp4" width="100%" autoplay="true" muted loop></video>
            </div>
            <div class="grid-text">
                <div class="grid-text-content">
                    <h2>Summer 2023</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora vero laudantium adipisci voluptatibus in dolorem expedita neque, suscipit repellendus illo, perferendis qui. </p>
                </div>
                <a href="#" class="btn-about">Bouton</a>
            </div>
        </div>
    </section>





</main>

<?php
require_once("inc/footer.inc.php");
