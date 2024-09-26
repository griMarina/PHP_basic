<?php

function getItem(int $id) {
    return getOneResult("SELECT * FROM `items` WHERE `item_id` = '$id'");
}

function updateItemViews(int $id) {
    return executeSql("UPDATE `items` SET item_views = item_views + 1 WHERE `item_id` = '$id'");
}