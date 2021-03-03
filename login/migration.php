<?php

$users = [
    [
        'name' => 'peter', 'surname' => 'peterson', 'pass' => password_hash(1235, PASSWORD_DEFAULT)],
    
    
        ['name' => 'Mark', 'surnema' => 'peterson', 'pass' => password_hash('1238', PASSWORD_DEFAULT)],
    
    
        ['name' => 'Gary', 'surnema' => 'peterson', 'pass' => password_hash('1239', PASSWORD_DEFAULT)]
    
    ];

    file_put_contents(__DIR__.'/user.json', json_encode($users));