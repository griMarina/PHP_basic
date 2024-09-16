<?php 

function add($arg1, $arg2)
{
    return $arg1 + $arg2;
}

function sub($arg1, $arg2)
{
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2)
{
    return $arg1 * $arg2;
}

function divide($arg1, $arg2)
{
    return ($arg2 != 0) ? $arg1 / $arg2 : "error: division by zero!"; 
}

function mathOperation($arg1, $arg2, $operation) 
{
    switch($operation) {
        case "+":
            return add($arg1, $arg2);
        case "-":
            return sub($arg1, $arg2);
        case "*":
            return multiply($arg1, $arg2);
        case "/":
            return divide($arg1, $arg2);
        default:
            return "There is no such math operation";
        }
}
