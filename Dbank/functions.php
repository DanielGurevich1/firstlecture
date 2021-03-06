<?php

function read() : array
{
    if (!file_exists(DIR.'data/client.json')) {// pirmas kartas
        $data = json_encode([]);
        file_put_contents(DIR.'data/client.json', $data);
    }

    $data = file_get_contents(DIR.'data/client.json');
    return json_decode($data, 1);
}


function write(array $data) : void
{
    $data = json_encode($data);
    file_put_contents(DIR.'data/client.json', $data);
}

function getNextID() : int 
{
    if(!file_exists(DIR.'data/indexes.json'))
    {
        $index = json_encode(['id'=>1]);
        file_put_contents(DIR.'data/indexes.json', $index);
    }

    $index = file_get_contents(DIR.'data/indexes.json');
    $index = json_decode($index, 1);

    $id = (int) $index['id'];
    $index['id'] = $id + 1;

    $index = json_encode($index);
    file_put_contents(DIR.'data/indexes.json', $index);
    return $id;
}

function getClient(int $id) : ?array
{
    foreach(readData() as $client) {
        if ($client['id'] == $id) {
            return $client;
        }
    }
    return null;
}

function createClient($name, $surname, $idNum) : void
{
    $clients = read();
    $id = getNextId();
    $accountOwner = ['A' => $id,'Name' => $name, 'B' => $surname, 'C' => $idNum, 'Account number' => $accountNum];

    $clients[] = $client;
    write($clients);
}
?>