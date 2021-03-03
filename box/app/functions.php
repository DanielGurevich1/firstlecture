<?php

// Create, read, update and delete
// funkcija kuri nuskaito duomenys is json file
function readData() : array 
{
    if (!file_exists(DIR.'data/boxes.json')) { //absolute path to the folder. if empty  then it is first time
        $data = json_encode([]);
        file_put_contents(DIR.'data/boxes.json', $data);
        }

            $data = file_get_contents(DIR.'data/boxes.json');

                return json_decode($data, 1); // jei be 1 tai grazins objekta, jei su 1 tai grazins masyva

}
// uzkoduojame ir idedame i json per file put funkcija
function writeData(array $data) : void 
    {
        // var_dump($data);
        // die;
        $data = json_encode($data); // buvo klaida su empty array
        file_put_contents(DIR.'data/boxes.json', $data);

    }
// sukuriame next id, kad zinotu koki indeksa priskyrti
function getNextId() : int
    {
        if (!file_exists(DIR.'data/indexes.json')) { //absolute path to the folder. if empty  then it is first time
            $index = json_encode(['id' => 1]);
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

function getBox(int $id) : ?array 
{
    foreach (readData() as $box) {
        if ($box['id'] == $id) {
            return $box;
        }
    }
return null;
}

function create(int $count) : void
{
$boxes = readData();
$id = getNextId();
$box = ['id' => $id, 'banana' => $count];
$boxes[] = $box;
writeData($boxes);
}


function update(int $id, int $count) : void
{
$boxes = readData(); // visi boxai
$box = getBox($id);
if (!$box) {
    return;
}
$box['banana']= $count;
deleteBox($id);
$boxes = readData(); // dar karta nuskaitome - visi be istrinto box
$boxes[] =$box; // naujos dezes idejimas (tai yra redaguota sena deze makaline)
writeData($boxes);
}

// delete
function deleteBox(int $id) : void 
{
    $boxes = readData();
    foreach ($boxes as $key => $box) {
        if ($box['id'] == $id) {
            unset ($box[$key]); // delete or unset box, which you want to delete
            writeData($boxes); // po unset reikia irasyti
            return;
        }
    }
}

/*

[
    ['id' => 1,  'banana' => 0],
    ['id' => 2,  'banana' => 10],
    ['id' => 3,  'banana' => 110],

    ]
]
 */
?>
