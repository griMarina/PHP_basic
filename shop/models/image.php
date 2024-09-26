<?php

function getImage(int $id) {
    return getOneResult("SELECT * FROM `images` WHERE `id` = '$id'");
}

function updateViews(int $id) {
    return executeSql("UPDATE `images` SET views = views + 1 WHERE `id` = '$id'");
}