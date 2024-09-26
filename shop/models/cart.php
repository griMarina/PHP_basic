<?php

function getCount($session) {
    $res = getOneResult("SELECT SUM(quantity) as `quantity` FROM `cart` WHERE `session_id` = '$session'");
    return (int) $res["quantity"];
}

function getCartItems($session) {
    return getAssocResult("SELECT * FROM `cart`, `items`  WHERE `session_id` = '$session' AND cart.item_id = items.item_id"); 
}

function addToCart($itemId, $session, $itemPrice, $userId) {
    $result = getOneResult("SELECT `id` FROM `cart` WHERE `item_id` = '$itemId' AND `session_id` = '$session'");
    
    if (isset($result)) {
        executeSql("UPDATE `cart` SET quantity = quantity + 1 WHERE id = {$result['id']}");
    } else {
        executeSql("INSERT INTO `cart` (`session_id`, `item_id`, `item_price`) VALUES ('$session', '$itemId', '$itemPrice')");
    }

    if (isAuthorized()) {
        executeSql("UPDATE `cart` SET `user_id` = '$userId' WHERE `session_id` = '{$session}'");
    }
}

function deleteFromCart($cartId, $session) {
    $result = getOneResult("SELECT cart.id as cart_id, items.item_id as item_id, items.item_title as title, quantity, session_id FROM cart, items WHERE $cartId = cart.id AND cart.item_id = items.item_id AND session_id = '$session'");

    if ($result['quantity'] > 1) {
        executeSql("UPDATE `cart` SET quantity = quantity - 1 WHERE id = '$cartId'");
    } else {
        executeSql("DELETE FROM `cart` WHERE id = '$cartId'");
    }  
}

function getSumItems($session) {
   $result = getOneResult("SELECT SUM(`item_price` * `quantity`)as sum FROM cart  WHERE `session_id` = '$session'");
    return $result['sum'];
}

function addOrder($name, $surname, $phone, $session, $userId) {
    executeSql("INSERT INTO `orders` (`name`, `surname`, `phone`, `session_id`, `status`) VALUES ('$name', '$surname', '$phone', '$session', 'pending')");   

    if (isAuthorized()) {
        executeSql("UPDATE `orders` SET `user_id` = '$userId' WHERE `session_id` = '{$session}'");
    }
}