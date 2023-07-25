<?php
require_once("inc/init.inc.php");
require_once("inc/function.inc.php");


// // CODE PROPRE A LA PAGE PHP EN COURS
echo '<link href="assets/css/compte.css" rel="stylesheet" type="text/css">';

require_once("inc/head.inc.php");
require_once("inc/nav.inc.php");
require_once("inc/category.inc.php");

$messageError = [];
$req = "";

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $pseudo = trim($_POST["email"]);
    $message = trim($_POST["password"]);

    $erreur = false;

    if ($erreur == false) {

        // - 05 - Déclenchement d'une requête d'enregistrement pour enregistrer les saisies dans la BDD (INSERT INTO)
        $req = "INSERT INTO clients (email, password) VALUES ('$email', '$password', NOW())";
        $reponse = $pdo->query($req);

        // Avec prepare on se protège (au moins) des injections SQL 

        // Je prépare la requête
        $reponse = $pdo->prepare("INSERT INTO clients (email, password) VALUES (:email, :password, NOW())");

        // // Je bind les valeurs aux marqueurs
        $reponse->bindParam(':email', $email, PDO::PARAM_STR);
        $reponse->bindParam(':password', $password, PDO::PARAM_STR);

        // // J'exécute la requête
        $reponse->execute();
    }
}


//     if ($email !== "" && $password !== "") {
//         $requete = "SELECT count(*) FROM clients where nom = '" . $email . "' and password ='" . $password . "' ";


//         //nom d'utilisateur et mot de passe correctes
//         if ($count != 0) {
//             $_SESSION['email'] = $email;
//             header('location: index.php');
//         }
//         // utilisateur ou mot de passe incorrect
//         else {
//             header('location: connexion.php?erreur=1');
//         }
//     }
//     // utilisateur ou mot de passe vide
//     else {
//         header('location: connexion.php?erreur=2');
//     }
// } else {
//     header('location: connexion.php');

// // fermer la connexion
// mysqli_close($db);








// $email = trim($_POST["email"]);
// $password = trim($_POST["password"]);

// $erreur = false;

// if (empty($email) || empty($password)){
//     $erreur = true;
//     $message .= '<div class="alert alert-danger" role="alert">
//     Attention tous les champs sont obligatoires !
//   </div>';
// }

// if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
//     $erreur = true;
//     $msgError["email"] .= '<div class="alert alert-danger" role="alert">
//     Format d\'email n\'est pas valide !
//   </div>';

// }

// if ($erreur == false){
//      header("location:connexion.php?connexion=ok");
//  }

// password_hash(string $password, string|int|null $algo, array $options = []): string

// echo password_hash("", PASSWORD_DEFAULT);





?>


<main>
    <div class="form1">

        <!--FORMULAIRE-->
        <form class="connexion" method="post">
            <h1>Mon compte</h1>

            <div class="champ">

                <input type="email" placeholder="Email" name="email"> <br>
                <label for="email"></label>
                <?php
                if (isset($messageError["email"])) {
                    echo $messageError["email"];
                }

                ?>




                <input type="password" placeholder="Mot de passe" name="password"> <br>
                <label for="password"></label>
                <?php
                if (isset($messageError["password"])) {
                    echo $messageError["password"];
                }

                ?>

                <a href="#" class="pw">Mot de passe oublié</a><br>
                <!-- <a href="connexion.php"> -->
                <a href="#">
                    <input class="btn-connexion" type="button" value="Connexion" style="
         margin-top: 20px;"></a>
                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }




                
                ?>
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