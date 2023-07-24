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

    <!DOCTYPE html>
    <html>

    <head>
        <style>
            .panier {
                border-color: black;
                font-family: Arial, Helvetica, sans-serif;
                display: grid;

            }

            .h2 {
                text-align: left;
                font-family: Arial, Helvetica, sans-serif;
                margin-top: 100px;
            }

            .panier,h2 {
                border-width: 50px;
                border-color: black;
            }

            .ul {
                list-style-type: none;
            }

        </style>
    </head>

    <body>
        <main>
            <div id="panier-container">
                <div class="mon panier"></div>
                <div class="title-panier">
                </div>
                <h2>MON PANIER</h2>
                <ul>
                    <li>Article</li>
                    <li>Prix</li>
                    <li>Quantité</li>
                </ul>
                <div class="btn-panier">
                <tr>
                    <td><img src="img/category/lunette-accessoires.jpg"></td>
                    <span>260,99</span>
                    <td>1</td>
                    <td>
                        <button>Modifier</button>
                        <button>Supprimer</button>
                    </td>
                </div>
            </tr>
                <tr>
                    <td><img src="img/category/sneakers.jpg"></td>
                    <td>269,99</td>
                    <td>2</td>
                    <td>
                        <button>Modifier</button>
                        <button>Supprimer</button>
                    </td>
                </tr>


            </div>

            <div id="resume">
                <h2>Résumé de la commande</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>Sous-total:</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>Frais de livraison:</td>
                            <td>5€</td>
                        </tr>
                        <tr>
                            <td><strong>Total:</strong></td>
                            <td><strong>505€</strong></td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" value="Commander">
            </div>

            <div id="moyens-paiement-livraison">
                <h2>Moyens de paiement et livraison</h2>
                <p>Options de paiement et de livraison</p>
            </div>

            </div>

            </div>
            </div>

            </section>
        </main>
    </body>

    </html>




</main>

<?php
require_once("inc/footer.inc.php");
