<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function formatoData($data) {
    $array = explode("-", $data);
    // $data = 2016-04-14
    // $array[0]= 2016, $array[1] = 04 e $array[2]= 14;
    $novaData = $array[2] . "/" . $array["1"] . "/" . $array[0];
    return $novaData;
}

function dateUStoDateBR($dateUS) {
    $dateArray = explode("-", $dateUS);
    $novaData = $dateArray[2] . "/" . $dateArray[1] . "/" . $dateArray[0];
    return $novaData;
}
