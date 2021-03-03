<?php

$accountOwner = 
     [
        'Name' => $_POST['A'],
        'Surname' => $_POST['B'],
        'ID number' => $_POST['C'],
        // 'Account number' => $_POST['D'],
    
];
// $stringas = json_encode($accountOwner);
// file_put_contents('BankDBase.json', $stringas);

$stringas = file_get_contents('BankDB.json');
_d($stringas);


$bank = json_decode($stringas, 1);

_d($accountOwner);

$bank[] =  $accountOwner;

$stringas = json_encode($bank);

file_put_contents('BankDB.json', $stringas);

?>