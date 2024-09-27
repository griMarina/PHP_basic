<?php

define("ROOT", dirname(__DIR__));
define("TEMPLATES_DIR", ROOT . "/templates/");
define("IMG_DIR", $_SERVER["DOCUMENT_ROOT"] . "/img/gallery_img/");
define("IMG_BIG", $_SERVER["DOCUMENT_ROOT"] . "/img/gallery_img/big/");
define("IMG_SMALL", $_SERVER["DOCUMENT_ROOT"] . "/img/gallery_img/small/");
define("LAYOUTS_DIR", "layouts/");

include ROOT . "/engine/functions.php";
include ROOT . "/engine/catalog.php";
include ROOT . "/engine/menu.php";
include ROOT . "/engine/classSimpleImage.php";
include ROOT . "/engine/gallery.php";