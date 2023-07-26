<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");



// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/inscription.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

//session_start();
$host = "mysql:host=localhost;dbname=daikles"; // hôte + bdd
    $login = "root"; // login
    $password = "root"; // mot de passe
    $options = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // gestion des erreurs
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' // on force l'utf8 sur les données provenants de la bdd
    );
    // Création de l'objet PDO :
    $pdo = new PDO($host, $login, $password, $options);

if(isset($_POST['valider'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['email']) AND !empty($_POST['adresse']) AND !empty($_POST['mdp'])){

        $nom = htmlentities($_POST["nom"]);
        $prenom = htmlentities($_POST["prenom"]);
        $phone = htmlentities($_POST["phone"]);
        $email = htmlentities($_POST["email"]);
        $adresse = htmlentities($_POST["adresse"]);
        $mdp = sha1($_POST["mdp"]);
        //$mdp_validation = htmlentities($_POST["validation_password"]);

        $insertUser = $pdo->prepare('INSERT INTO clients(nom, prenom, email, mdp, adresse, phone)VALUE(?, ?, ?, ?, ?, ?)');
        $insertUser->execute(array($nom, $prenom, $email, $mdp, $adresse, $phone));

        // $recupUser = $bdd->prepare('SELECT * FROM clients WHERE email = ? AND mdp = ?');
        // $recupUser->execute(array($email, $mdp));
        // if($recupUser->rowCount() > 0){
        //     $_SESSION["email"] = $email;
        //     $_SESSION["mdp"] = $mdp;
        //     $_SESSION["prenom"] =$prenom;
        //     $_SESSION["id"] = $recupUser->fetch()["id"];
        // }

        $success = true; 

    }else{
        echo "Veuillez compléter tous les champs...";
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        // cas d'erreur sur le format d'email
        $erreur = true;
        $msgError["email"] .= 'Mail pas valide ';
    }

    
}


?>


<main>
    <div class="form1">

        <!--FORMULAIRE-->
        <form method="POST" action="" class="connexion1">
            <h1>Inscription</h1>

            <?php 
            if(isset($success) && $success == true)
            {
                echo "<span class='color:green'>Votre inscription a bien été pris en compte ! <br>Veuillez vous <a href='compte.php'>connecter ici</a></span><br>"; 
            }
            ?>            

            <input type="text" placeholder="Nom" name="nom" autocomplete="off" required>
            <label for="nom"></label>

            <input type="text" placeholder="Prénom" name="prenom" autocomplete="off" required>
            <label for="prenom"></label>

            <input type="text" placeholder="Numéro de téléphone" name="phone">
            <label for="number"></label>

            <input type="email" placeholder="Email" name="email" autocomplete="off" required>
            <label for="email"></label>
            <? $msgError["email"] ?>

            <input type="text" placeholder="Adresse" name="adresse" autocomplete="off" required>
            <label for="adresse"></label>

            <input type="password" placeholder="Mot de passe" name="mdp">
            <label for="password"></label>

            <!--<input type="password" placeholder="Répéter le mot de passe" name="validation_password">
            <label for="validation_password"></label>-->

            <a href="">
            <input class="btn-valider" type="submit" value="Valider" name="valider"></a>


        </form>

    </div>


</main>

<?php
require_once("inc/footer.inc.php");
