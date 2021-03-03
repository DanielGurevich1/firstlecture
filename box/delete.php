<?php require __DIR__.'/bootstrap.php';

// post scenarijus

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET['id'] ?? 0;
    $id = (int) $id;
    deleteBox($id, $bananas); //trina banana
    header('Location:'.URL);
    die;
}

header('Location: '.URL);
die;