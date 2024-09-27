<?php

function getMenu() {
    return [
        [
            "name" => "Main",
            "href" => "/"
        ],
        [
            "name" => "Catalog",
            "href" => "/?page=catalog"
        ],
        [   "name" => "About us",
            "href" => "/?page=about"
        ],
        [   "name" => "Gallery",
            "href" => "/?page=gallery"
        ],
    ];
}

function renderMenu($menu) {
    $out = "";
    foreach ($menu as $submenu) {
        $out .= "<a class='link' href='{$submenu['href']}'>{$submenu['name']}</a>";
        if (isset($submenu['submenu'])) {
            $out .= renderMenu($submenu['submenu']);
        }
    }

    return $out;
}