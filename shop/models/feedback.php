<?php

function getFeedback() {
    return getAssocResult("SELECT * FROM `feedback` ORDER BY `id` DESC"); 
}

function getFeedbackMessage($status) {
    
    $messages = [
        "ok" => "Your message has been sent!",
        "delete" => "The message was deleted!",
        "edit" => "Your message has been changed.",
        "error" => "Error. Something went wrong :(",
        "" => "Please, leave your feedback here."
    ];

    return $messages[$status];
}

function addFeedback($name, $text) {
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $name)));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $text )));
    
    executeSql("INSERT INTO `feedback` (name, text) VALUES ('$name', '$text')");

    $status = "ok";
    header("Location:/feedback/?status=$status");
    die();
}

function deleteFeedback($id) {

    executeSql("DELETE FROM `feedback` WHERE `id` = '$id'");
   
    $status = "delete";
    header("Location:/feedback/?status=$status");
    die();
}

function editFeedback($id) {

    $result = getOneResult("SELECT * FROM `feedback` WHERE `id` = '$id'");
    $buttonText = "Edit message";
    $actionFeedback = "save";
   
    return [
        "result" => $result,
        "buttonText" => $buttonText,
        "actionFeedback" => $actionFeedback
    ];

}

function saveFeedback($name, $text, $id) {

    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $name)));
    $text = strip_tags(htmlspecialchars(mysqli_real_escape_string(getDb(), $text)));

    executeSql("UPDATE `feedback` SET `name` = '$name', `text` = '$text' WHERE `id` = '$id'");
   
    $status = "edit";
    header("Location:/feedback/?status=$status");
    die();
}

function doFeedbackAction($action, $name, $text, $id) {

    switch($action) {
        case "add":
            addFeedback($name, $text);
        case "delete":
            deleteFeedback($id);
        case "edit":
            return editFeedback($id);
        case "save":   
            $id = (int)$_POST['id'];
            saveFeedback($name, $text, $id);
    }
    
    return [
        "result" => ["id" => "", "name" => "", "text" => ""],
        "buttonText" => "Add message",
        "actionFeedback" => "add"
    ];
}