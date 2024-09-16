<?php

function insertGallery() {
    $arr = getArrImg(IMG_SMALL);
    return mysqli_query(getDb(), "INSERT INTO `images` (`name_img`) VALUES ('".implode("'),('", $arr)."')");
}