<?php
function path($path):string {
    return APP_PATH."$path";
}
function url($url):string {
    return APP_URL."$url";
}
function dd($data) {
    echo "<pre>";
    print_r($data);
    exit();
}