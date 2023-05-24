<?php

function section (string $helper) {
    $end = "</section>";
    return "<section class='' id=''>".$helper.$end;
}
function div (string $helper) {
    $end = "</div>";
    return "<div class=''>".$helper.$end;
}
function h2 (string $helper) {
    $end = "</h2>";
    return "<h2>".$helper.$end;
}
function h3 (string $helper) {
    $end = "</h3>";
    return "<h3>".$helper.$end;
}
function h5 (string $helper) {
    $end = "</h5>";
    return "<h5>".$helper.$end;
}
function p (string $helper) {
    $end = "</p>";
    return "<p>".$helper.$end;
}
function a (string $helper,string $url = '#') {
    $end = "</a>";
    return "<a href='".$url."'>".$helper.$end;
}
function conn () {
    $server = "";
    $user = "";
    $password = "";
    $database = "";
    $port = "";
    $conn = new mysqli ($server,$user,$password,$database,$port);
    if ($conn->connect_errno) {
        return "";
    } else {
        return $conn; 
    }
}
