<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/compte.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$message = "";
$email = "";
$password = "";


$messageEmail = "";

$msgError = array("email" => "");

if (isset($_POST["email"])) {



    $email = trim($_POST["email"]);

    $erreur = false;

    if (empty($email)) {

        $erreur = true;
        $message .= '<div class="alert>
        Attention tous les champs sont obligatoires !
      </div>';
    }
}

?>


<main>
    <div class="form1">

        <!--FORMULAIRE-->
        <form action="traitement_connexion.php" method="POST" class="connexion">
            <div class="form1-title">
                <h2>Mon compte</h2>
            </div>

            <div class="champ">

                <?php if (isset($_GET['error']) && $_GET['error'] == 2) { ?>
                    <span style="color:red">ERREUR authentification</span><br>
                <?php } ?>

                <input type="email" placeholder="Email" name="email" required> <br>
                <label for="email"></label>


                <input type="password" placeholder="Mot de passe" name="mdp"> <br>
                <label for="password"></label>

                <a href="#" class="pw">Mot de passe oublié</a><br>

                <input class="btn-connexion" type="submit" value="Connexion" style="
         margin-top: 20px;">
            </div>
        </form>

        <div class="new-client">
            <h4>Nouveau chez Daikles ?</h4>
        </div>
        <div class="champ1">
            <a href="inscription.php" class="compte">
                <input type="button" class="btn-create-compte" value="Créer un compte">
            </a>
        </div>


    </div>


</main>

<?php
require_once("inc/footer.inc.php");
