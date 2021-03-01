<?php

$accountOwner = [
    'bankClient'=> [

        'First Name' => 'John',
        'Last Name' => 'Johnson',
        'ID number' => '12345678'
    ]
];
$stringas = json_encode($accountOwner);
file_put_contents('BankDBase.json', $stringas);

$stringas = file_get_contents('BankDB.json');
_d($stringas);

$accountOwner = json_decode($stringas, 1);

_d($accountOwner);

$accountOwner['bankClient'][] =  'doumenys is addAccount formos';

$stringas = json_encode($accountOwner);

file_put_contents('BankDB.json', $stringas);

?>