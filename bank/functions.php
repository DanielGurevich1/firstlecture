<!-- create, read, update, delete -->
<?php

function readData() : ?array
{
    if(!file_exists(DIR.'data/BankDB.json')){
$data = json_encode([]);
file_put_contents(DIR.'data/BankDB.json');
    }
    $data = file_get_contents(DIR.'data/BankDB.json');
    return json_decode($data, 1);
}
// end of readdata

function writeData(array $data) : void
{
$data = json_encode($data);
file_put_contents(DIR.'data/BankDB.json');

}

// testine reiksme 1
function getClient(int $id)
{
foreach (readData() as $id => $accountOwner) {
    if ($accountOwner['Name'] == $name) {
       return $accountOwner;
    }
}
return null;
}

function createClient() : void
{
    $clients = readData();
    $name = getNextId();
    // undefined vars :
    $accountOwner = ['id' => $lineNumber,'Name' => $name, 'Surname' => $surname, 'ID number' => $idNum, 'Account number' => $accountNum];
    writeData($clients);
}
//update = add money / send money
function addMoney($name, int $sum) :void
{
$clients = readData();
$accountOwner = getClient($name);
if (!$accountOwner) {
    return;
}
$accountOwner['Name'] = $sum;
// deleteAccOWNER($name);

$clients = readData();
$clients[] = $accountOwner;
writeData($clients);
}

function deleteAccountOwner(int $name) : void

{
    $clients = readData();
    foreach ($clients as $key => $_) { // value not clear yet
        if($accountOwner['Name'] == $name)
        {
            unset($accountOwner['Name']);
            writeData($clients);
            return;
        }
    }
}

function getNextId():int
{
    if (!file_exists(DIR.'data/id.json')) {
        $key = json_encode(['id' => 1]);
        file_put_contents(DIR.'data/id.json', $key);
    }
    $key = file_get_contents('data/id.json');
    $key = json_decode($key, 1);
    $id = (int) $key['id'];
    $id['id'] = $id + 1;
    $key = json_encode($key);
    file_put_contents('data/id.json', $key);
    return $id;
}
/* 
client 
        'Name' => $_POST['A'],
        'Surname' => $_POST['B'],
        'ID number' => $_POST['C'],
        'Account number' => $_POST['D'],
*/

?>