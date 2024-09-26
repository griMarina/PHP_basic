<?php

function getDb() {
    static $db = null;
    if (is_null($db)) {
        $db = @mysqli_connect(HOST, USER, PASS, DB) or die("Could not connect: " . mysqli_connect_error());
    }
    return $db;
}

function getAssocResult($sql) {
    $result = @mysqli_query(getDb(), $sql) or die(mysqli_connect_error(getDb()));
    //$result->fetch_all();
    $arr_result = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $arr_result[] = $row;
    }
    return $arr_result;
}

function getOneResult($sql) {
    $result = @mysqli_query(getDb(), $sql) or die(mysqli_connect_error(getDb()));
    return mysqli_fetch_assoc($result);
}

function executeSql($sql) {
    $result = @mysqli_query(getDb(), $sql) or die(mysqli_connect_error(getDb()));
    return mysqli_affected_rows(getDb());
}