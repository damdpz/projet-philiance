<?php


// echo var_dump($page);
$categories = array(
    "homme" => array(
        "showcase" => "assets/img/category/01-homme.jpg",
        "subcat" => array(
            "jean" => "assets/img/category/jean.jpg",
            "T-shirt" => "assets/img/category/t-shirt.jpg",
            "Sneakers" => "assets/img/category/sneakers.jpg",
            "Accessoires" => "assets/img/category/accessoires.jpg"
        )
    ),
    "femme" => array(
        "showcase" => "assets/img/category/01-femme.jpg",
        "subcat" => array(
            "jean" => "assets/img/category/jean.jpg",
            "T-shirt" => "assets/img/category/t-shirt-femme.jpg",
            "Sneakers" => "assets/img/category/sneakers-femme.jpg",
            "Accessoires" => "assets/img/category/accessoires-femme.jpg"
        )
    ),
    "sneakers" => array(
        "showcase" => "assets/img/category/img-sneakers.jpg",
        "subcat" => array(
            "mocasin" => "assets/img/category/jean.jpg",
            "talons" => "assets/img/category/t-shirt.jpg",
            "bottes" => "assets/img/category/sneakers.jpg",
            "espadrilles" => "assets/img/category/accessoires.jpg"
        )
    ),
    "accessoires" => array(
        "showcase" => "assets/img/category/img-accessoires.jpg",
        "subcat" => array(
            "ceintures" => "assets/img/category/jean.jpg",
            "sac" => "assets/img/category/t-shirt.jpg",
            "lunettes" => "assets/img/category/lunette-accessoires.jpg",
            "casquette" => "assets/img/category/img-accessoires.jpg"
        )
    )
    );
if(isset($page)) {
    $page = $_GET["page"];
    $list = $categories[$page]; //$categories["homme"];
    $showcase = $categories[$page]["showcase"];
    $subcat = $categories[$page]["subcat"];
    // echo var_dump($list);


}

?>