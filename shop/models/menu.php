<?php

function getMenu($count) {
    return [
        [
            "name" => "Main",
            "href" => "/"
        ],
        [   "name" => "About us",
            "href" => "/about"
        ],
        [   "name" => "Gallery",
            "href" => "/gallery"
        ],
        [   "name" => "Calculator",
            "href" => "/calculator"
        ],
        [
            "name" => "Catalog",
            "href" => "/catalog"
        ],
        [
            "name" => "Cart ($count)",
            "href" => "/cart"
        ],
        [   "name" => "Feedback",
            "href" => "/feedback"
        ],
        [   "name" => "My orders",
            "href" => "/my_orders"
        ],
        [   "name" => "Admin panel",
            "href" => "/admin"
        ],
    ];
}

function renderMenu($menu) {
    $out = "";
    foreach ($menu as $submenu) {
        $out .= "<a class='menu_link' href='{$submenu['href']}'>{$submenu['name']}</a>";
        if (isset($submenu['submenu'])) {
            $out .= renderMenu($submenu['submenu']);
        }
    }

    return $out;
}