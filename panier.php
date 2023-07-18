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
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }
        
        h1 {
            text-align: center;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        thead {
            background-color: #333;
            color: #fff;
        }
        
        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        tfoot {
            font-weight: bold;
        }
        
        button {
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Produit 1</td>
                <td>29.99€</td>
                <td>2</td>
                <td>59.98€</td>
            </tr>
            <tr>
                <td>Produit 2</td>
                <td>19.99€</td>
                <td>1</td>
                <td>19.99€</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Total:</td>
                <td>79.97€</td>
            </tr>
        </tfoot>
    </table>
    
    <button type="button">Passer à la caisse</button>
</body>
</html>




</main>

<?php
require_once("inc/footer.inc.php");