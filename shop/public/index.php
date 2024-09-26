<?php

session_start();

include $_SERVER["DOCUMENT_ROOT"] . "/../config/config.php";

$url_arr = explode('/', $_SERVER['REQUEST_URI']);

if ($url_arr[1] === "") {
    $page = "index";
} else {
    $page = $url_arr[1];
}

$action = $url_arr[2] ?? "";

$params = prepareVariables($page, $action);

echo render($page, $params);