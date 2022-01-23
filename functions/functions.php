<?php

$validationErrors = [];
function saveMessage($item) {
    $document = "../data/ticket.json";
    $content = json_decode(file_get_contents($document), true);
    $content[rand(1000,9999)] = $item;
    file_put_contents($document, json_encode($content));
}

function validate($data) {
    if(preg_match('/^[a-zA-Z0-9._-]/', $data['PersonalID'])){
        $validationErrors[] = "Neteisingai Ivestas Asmens Kodas";
    }
    if(preg_match('/[\d\s]/', $data["name"])){
        $validationErrors[] = "Neteisingai Ivestas Vardas";
    }
    if(preg_match('/^[a-zA-Z0-9._-]/', $data["price"])){
        $validationErrors[] = "Neteisingai Ivesta Kaina";
    }
    if(preg_match('/[\d\s]/', $data["lname"])){
        $validationErrors[] = "Neteisingai Ivesta Pavarde";
    }
}
function getData(){
    $data = json_decode(file_get_contents('../data/ticket.json'), true);
    return $data;
}