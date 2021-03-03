<?php require __DIR__.'/bootstrap.php';

// post scenarijus

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $banana = $_GET['id'] ?? 0;
    $banana = (int) $id;
    deleteBox($id, $banana); //trina banana
    header('Location :'.URL);
    die;
}

header('Location: '.URL);