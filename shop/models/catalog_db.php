<?php

function getItems() {
    return getAssocResult("SELECT * FROM items ORDER BY item_views DESC"); 
}