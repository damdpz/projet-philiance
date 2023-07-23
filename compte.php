<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/compte.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

?>


<main>
    <div class="form1">

        <!--FORMULAIRE-->
        <form class="connexion">
            <h1>Mon compte</h1>

            <div class="champ">

                <input type="email" placeholder="Email"> <br>
                <label for="email"></label>


                <input type="password" placeholder="Mot de passe"> <br>
                <label for="password"></label>

                <a href="#" class="pw">Mot de passe oublié</a><br>
                <a href="connexion.php">
                <input class="btn-connexion" type="button" value="Connexion" style="
         margin-top: 20px;"></a>
            </div>
        </form>

        <div class="new-client">
        <h4>Nouveau chez Daikles ?</h4>
        </div>
            <div class="champ1">
                <a href="inscription.php">
                <input class="btn-create-compte"  type="button" value="Créer un compte"></a>
            </div>

    </div>


</main>

<?php
require_once("inc/footer.inc.php");
