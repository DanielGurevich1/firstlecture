<?php

$users = [
        ['name' => 'peter', 'surname' => 'peterson', 'pass' => password_hash('123', PASSWORD_DEFAULT)],  
        ['name' => 'Mark', 'surname' => 'peterson', 'pass' => password_hash('123', PASSWORD_DEFAULT)],   
        ['name' => 'Gary', 'surname' => 'peterson', 'pass' => password_hash('123', PASSWORD_DEFAULT)],
    ];

    file_put_contents(__DIR__.'/user.json', json_encode($users));