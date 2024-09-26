<?php

function getUser() {
    if (!empty($_SESSION)) {
        return $_SESSION["login"];
    }
}

function isAdmin() {
    if (!empty($_SESSION)) {
        return $_SESSION["login"] == "admin";
    }
}

function isAuthorized() {

    if (!isset($_SESSION["login"])) {
        if (isset($_COOKIE["hash"])) {
            $hash = $_COOKIE["hash"];
            $result = getOneResult("SELECT * FROM `users` WHERE `hash` = '{$hash}'");
            $user = $result["login"];
    
            if (!empty($user)) {
                $_SESSION["login"] = $user;
                $_SESSION["id"] = $result["id"];
            }
        }
    }
    return isset($_SESSION["login"]);
}

function authorization($login, $pass) {
    $login = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($login)));
    $result = getOneResult("SELECT * FROM users WHERE `login` = '{$login}'");

    if (isset($result)) {
        if (password_verify($pass, $result["pass"])) {
            $_SESSION["login"] = $login;
            $_SESSION["id"] = $result["id"];
            return true;
        }
        return false;
    }
}

function updateHash($hash, $id) {
    return executeSql("UPDATE users SET `hash`='{$hash}' WHERE `id`='{$id}'");
}