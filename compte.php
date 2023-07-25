<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/compte.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$message = "";
$email = "";
$password = "";


$messageEmail = "";

$msgError = array( "email" => "");

if (isset( $_POST["email"])) {


    
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
        <img src="assets/img/image-compte/coucher-de-soleil.jpg" alt="background">
        <!--FORMULAIRE-->
 <form action="traitement_connexion.php" method="POST" class="connexion">
    <h1>Mon compte</h1>

    <div class="champ">

        <?php if(isset($_GET['error']) && $_GET['error'] == 2) { ?>
        <span style="color:red">ERREUR authentification</span><br>
        <?php } ?>

        <input type="email" placeholder="Email" name="email" required> <br>
        <label for="email"></label>


        <input type="password" placeholder="Mot de passe" name="mdp"> <br>
        <label for="password"></label>
        
        <a href="#" class="pw">Mot de passe oublié</a><br>

        <input type="submit" value="Connexion" style="
         margin-top: 20px;">
    </div>
</form>
   
        <div class="champ1">
           <h3>Pas de compte ?</h3>
        
           <a href="inscription.php" class="compte"><input type="submit" value="Créer un compte"></a>
        </div>
 </form>
       
    </div>


</main>

<?php
require_once("inc/footer.inc.php");
?>