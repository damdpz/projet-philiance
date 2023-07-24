<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/compte.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

// Validation du formulaire
echo "<pre>";
print_r($_POST);
echo "</pre>";

$email = "";
$password = "";
$message = "";

$messageEmail = "";
$messagePassword = "";

$messageError = array("email" => "", "password" => "");

if (isset($_POST["email"], $_POST["password"])){

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $erreur = false;

    if (empty($email) || empty($password)){
        $erreur = true;
        $message .= '<div class="alert alert-danger" role="alert">
        Attention tous les champs sont obligatoires !
      </div>';
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $erreur = true;
        $msgError["email"] .= '<div class="alert alert-danger" role="alert">
        Format d\'email n\'est pas valide !
      </div>';
      
    }

    if ($erreur == false){
         header("location:connexion.php?connexion=ok");
     }

    





    // password_hash(string $password, string|int|null $algo, array $options = []): string
    
    // echo password_hash("", PASSWORD_DEFAULT);

    

}

?>


<main>
    <div class="form1">

        <!--FORMULAIRE-->
        <form class="connexion" method="post">
            <h1>Mon compte</h1>

            <div class="champ">

                <input type="email" placeholder="Email" name="email"> <br>
                <label for="email"></label>
                <?= $messageError["email"] ?>


                <input type="password" placeholder="Mot de passe" name="password"> <br>
                <label for="password"></label>
                <?= $messageError["password"] ?>

                <a href="#" class="pw">Mot de passe oublié</a><br>
                <!-- <a href="connexion.php"> -->
                <a href="#">
                    <input class="btn-connexion" type="button" value="Connexion" style="
         margin-top: 20px;"></a>
            </div>
        </form>

        <div class="new-client">
            <h4>Nouveau chez Daikles ?</h4>
        </div>
        <div class="champ1">
            <a href="inscription.php">
                <input class="btn-create-compte" type="button" value="Créer un compte"></a>
        </div>

    </div>


</main>

<?php
require_once("inc/footer.inc.php"); ?>