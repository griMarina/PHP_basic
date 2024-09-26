<?php

function getCatalog() {
    return getAssocResult("SELECT * FROM items ORDER BY item_views DESC"); 
}



/*function getCatalog() {
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
}*/