<?php
require 'page.html';

$str = isset($_POST['inputSub']) ? $_POST['inputStr'] : '';
echo revStr($str);

function revStr($inputString){
    $revString = '';
    $length = strlen($inputString);

    for ($i = ($length -1); $i >= 0; $i--){
        $revString.=$inputString[$i];
    }
    return $revString;
}