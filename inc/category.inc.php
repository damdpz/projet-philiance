<?php

$pdo_all_categories = get_connection();
$query = $pdo_all_categories->query("SELECT id, nom, parent_id, showcase_img FROM Categories where parent_id IS NULL");
$parents_categories = $query->fetchAll(PDO::FETCH_ASSOC);
foreach($parents_categories as $key => $parent_category) {
    $parents_categories[$key]['childs'] = array();
    // echo print_r($parents_categories[$key]["childs"]);

}
foreach($parents_categories as $key => $parent_category) {
    $parent_id = intval($parent_category['id']);
    // echo var_dump($parent_id);
    $pdo_child_categories = get_connection();
    $query = $pdo_child_categories->prepare("SELECT id, nom, parent_id, showcase_img FROM Categories where parent_id = :parent_id");
    $query->bindParam('parent_id', $parent_id, PDO::PARAM_INT);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $child) {
        array_push($parents_categories[$key]['childs'], $child);
    }
}

// $categories = array();
// foreach ($unbufferedResult as $row) {
    
//     if($_ENV == 'DEV') {
//         echo $row['nom'] . PHP_EOL;
//     }
// }


// echo var_dump($page);
// $categories = array(
//     "homme" => array(
//         "showcase" => "assets/img/category/01-homme.jpg",
//         "subcat" => array(
//             "jean" => "assets/img/category/jean.jpg",
//             "T-shirt" => "assets/img/category/t-shirt.jpg",
//             "Sneakers" => "assets/img/category/sneakers.jpg",
//             "Accessoires" => "assets/img/category/accessoires.jpg"
//         )
//     ),
//     "femme" => array(
//         "showcase" => "assets/img/category/01-femme.jpg",
//         "subcat" => array(
//             "jean" => "assets/img/category/jean.jpg",
//             "T-shirt" => "assets/img/category/t-shirt-femme.jpg",
//             "Sneakers" => "assets/img/category/sneakers-femme.jpg",
//             "Accessoires" => "assets/img/category/accessoires-femme.jpg"
//         )
//     ),
//     "sneakers" => array(
//         "showcase" => "assets/img/category/img-sneakers.jpg",
//         "subcat" => array(
//             "mocasin" => "assets/img/category/jean.jpg",
//             "talons" => "assets/img/category/t-shirt.jpg",
//             "bottes" => "assets/img/category/sneakers.jpg",
//             "espadrilles" => "assets/img/category/accessoires.jpg"
//         )
//     ),
//     "accessoires" => array(
//         "showcase" => "assets/img/category/img-accessoires.jpg",
//         "subcat" => array(
//             "ceintures" => "assets/img/category/jean.jpg",
//             "sac" => "assets/img/category/t-shirt.jpg",
//             "lunettes" => "assets/img/category/lunette-accessoires.jpg",
//             "casquette" => "assets/img/category/img-accessoires.jpg"
//         )
//     )
//     );

if(isset($_GET["page"])) {
    $page = $_GET["page"];
    // $list = $parents_categories[$page]; //$categories["homme"];
    $list = array();
    foreach($parents_categories as $key => $value) {
        foreach($value as $attribute => $attribute_value) {
            if( $attribute == 'nom' && $attribute_value == $page ) {
                $list = $value;
            }
        }
        // $list = array_search($page, $parents_categories);
    }
    // echo "<pre>";
    // echo var_dump($list);
    // echo "</pre>";
    $showcase = $list["showcase_img"];
    $subcat = $list["childs"];
    // echo var_dump($list);


}

?>