<?php

function getImage($id) {
    return getOneResult("SELECT * FROM images WHERE id = $id");
}

function updateViews($id) {
    return mysqli_query(getDb(), "UPDATE `images` SET views = views + 1 WHERE id = $id");
}