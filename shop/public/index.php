<?php

include $_SERVER["DOCUMENT_ROOT"] . "/../config/config.php";

$page = "index";

if (isset($_GET["page"])) {
    $page = $_GET["page"];
}

$params["menu"] = getMenu();


if (isset($_GET["status"])) {
    $status = $_GET["status"];   
} else {
    $status = "";
}

$layout = "main";

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

    case "gallery":

        $layout = "gallery";
        
        if (!empty($_FILES)) {
            $status = uploadImg();
            header("Location:/?page=gallery&status=$status");
            die();
        }

        $params["title"] = "Gallery";
        $params["postTitle"] = "My Gallery";
        $params["images"] = getGallery();
        $params["message"] = getMessage($status);   
        break;

    case "image":

        $layout = "gallery";

        $id = (int)$_GET["id"];
        $params["title"] = "Image";
        $params["postTitle"] = "Image $id";
        $params["image"] = getImage($id);
        break;

    default: 
        echo "Error! 404!";
        die();
}

echo render($page, $params, $layout);