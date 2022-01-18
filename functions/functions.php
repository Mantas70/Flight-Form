<?php

$validationErrors = [];
function saveMessage($data){
    $file = '../data/messages.txt';
    $content = file_get_contents($file);
    $formData = implode(',',$data);
    $content .=$formData."/n";
    file_put_contents($file,$content);
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
    $tickets = file_get_contents('../data/messages.txt');
    $tickets = explode('/n', $tickets);
    return $tickets;
}