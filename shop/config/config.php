<?php

define("ROOT", dirname(__DIR__));
define("TEMPLATES_DIR", ROOT . "/templates/");
define("IMG_DIR", $_SERVER["DOCUMENT_ROOT"] . "/img/gallery_img/");
define("IMG_BIG", $_SERVER["DOCUMENT_ROOT"] . "/img/gallery_img/big/");
define("IMG_SMALL", "/img/gallery_img/small/");
define("LAYOUTS_DIR", "layouts/");

define("HOST", "localhost:8889");
define("USER", "marina");
define("PASS", "1111");
define("DB", "shop");

include ROOT . "/engine/functions.php";
include ROOT . "/engine/db.php";
include ROOT . "/engine/catalog.php";
include ROOT . "/engine/menu.php";
include ROOT . "/engine/gallery.php";
include ROOT . "/engine/image.php";
include ROOT . "/engine/classSimpleImage.php";
include ROOT . "/engine/install.php";
include ROOT . "/templates/menu.php";