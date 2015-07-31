<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function p($data, $msg = "Hello"){
    echo "<pre>";
    print_r($data);
    echo $msg;
    echo "</pre>";
    exit();
}

function vd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    exit();
}

