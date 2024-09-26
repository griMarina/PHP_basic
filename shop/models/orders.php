<?php

function getOrders() {
    return getAssocResult("SELECT `id`, `name`, `surname`, `phone`, `status` FROM `orders` ORDER BY id DESC");
}

function getOneOrder($orderId) {
    $session = getOneResult("SELECT `session_id` FROM `orders` WHERE `id` = '$orderId'")["session_id"];
    
   return getAssocResult("SELECT `user_id`, items.item_id, `item_title`, `quantity`, cart.item_price FROM `cart`, `items` WHERE `session_id` = '$session' AND cart.item_id = items.item_id");
}

function getMyOrders($login) {
    if ($login) {
        $userId = getOneResult("SELECT `id` FROM `users` WHERE `login` = '$login'")["id"];

        return getAssocResult("SELECT orders.id, `status`, `item_title`, `quantity`, cart.item_price, `item_img` FROM `orders`, `cart`, `items` WHERE orders.user_id = '$userId' AND cart.item_id = items.item_id AND orders.session_id = cart.session_id");
    }  
}

function setOrderStatus($status, $orderId) {
    executeSql("UPDATE `orders` SET `status` = '$status' WHERE id = '$orderId'");
}

function getStatus($orderId) {
    return getOneResult("SELECT `status` FROM `orders` WHERE `id` = '$orderId'")["status"];
}