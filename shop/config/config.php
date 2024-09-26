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

include ROOT . "/engine/render.php";
include ROOT . "/engine/controller.php";
include ROOT . "/engine/db.php";
include ROOT . "/engine/authorization.php";
include ROOT . "/models/menu.php";
include ROOT . "/models/classSimpleImage.php";
include ROOT . "/models/catalog.php";
include ROOT . "/models/cart.php";
include ROOT . "/models/item.php";
include ROOT . "/models/gallery.php";
include ROOT . "/models/image.php";
include ROOT . "/models/install.php";
include ROOT . "/models/calculator.php";
include ROOT . "/models/feedback.php";
include ROOT . "/models/orders.php";