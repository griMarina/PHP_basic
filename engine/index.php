<?php

const TEMPLATES_DIR = "templates/";
const LAYOUTS_DIR = "layouts/";

$page = "index";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

$params["menu"] = getMenu();

switch ($page) {
    case "index":
        $params["title"] = "Main";
        break;
    case "catalog":
        $params["title"] = "Catalog";
        $params["catalog"] = getCatalog();
        break;
    case "about":
        $params["title"] = "About Us";
        $params["phone"] = 123123;
        break;
    case "exercises":
        $params["title"] = "Exercises";
        break;
    default: 
        echo "Error! 404!";
        die();
}

echo render($page, $params);

function getMenu() {
    return [
        [
            "name" => "Main",
            "href" => "./"
        ],
        [
            "name" => "Catalog",
            "href" => "./?page=catalog"
        ],
        [   "name" => "About us",
            "href" => "./?page=about"
        ],
        [   "name" => "Exercises",
            "href" => "./?page=exercises"
        ],
    ];
}

function getCatalog() {
    return [
        [
            "name" => "Rucksack",
            "price" => 150,
            "image" => "item-1.jpg"
        ],
        [
            "name" => "Suit",
            "price" => 250,
            "image" => "item-2.jpg"
        ],
        [
            "name" => "Jumper",
            "price" => 200,
            "image" => "item-3.jpg"
        ],
    ];
}

function render($page, $params =[]) {
    return renderTemplate(LAYOUTS_DIR . "main", [
        "title" => $params["title"],
        "menu" => renderTemplate("menu", $params),
        "content" => renderTemplate($page, $params)
    ]);
}

function renderTemplate($page, $params =[]) {
    
    /* foreach ($params as $key => $value) {
        $$key = $value;
    } */

    extract($params);

    ob_start();
    include TEMPLATES_DIR . $page . ".php";
    return ob_get_clean();
}