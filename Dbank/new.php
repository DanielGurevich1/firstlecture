<?php 
include_once __DIR__.'/header.php';
require __DIR__.'/bootstrap.php';
$balance = 0;
$individualAccountNum = rand(1234, 9876);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $client['name'] = $_POST['name'];
  $client['surname'] = $_POST['surname'];
  $client['id'] = $_POST['id'];
  $client['balance'] = $_POST['balance'];
  $client['AC'] = $_POST['AC'];
  // print_r($client);
  // die;
    createClient($client); // sukuria
    
    header('Location: '.URL.'main.php');
    die;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account</title>
</head>
<body>
<form class="row row-cols-lg-auto align-items-center" method="post">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="" name="name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" value="" name="surname">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="ID number" aria-label="ID Number" value="" name="id">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Balance" aria-label="Balance" value="<?=$balance?>" name="balance" >
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Account number" aria-label="Account_number" value="<?=$individualAccountNum?>" name="AC" >
  </div> -->
  <div class="col">
      <button type="submit" class="btn btn-outline-primary">Create New Account</button>
  </div>
</div>
    
</form>
</body>
</html>