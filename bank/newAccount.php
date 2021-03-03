<?php include_once __DIR__.'/header.php';
require __DIR__.'/bootstrap.php';?>
<?php 
$individualAccountNum = rand(1234567890, 999999999999);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Account </title>
</head>
<body>
<?php

// print_r($_POST);
// neveikia ifas
$clients = [];
if (empty($_POST['A']))  {
    echo 'Name field must be filled';
        } elseif (empty($_POST['B'])) {
          echo 'Surname field must be filled';
        } elseif (empty($_POST['C'])) {
          echo 'ID field must be a number';
        } else {
     createClient($clients) ;
    //  'dataBase.php';      
        }
  
?>
<form class="row row-cols-lg-auto align-items-center" method="post">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="" name="A">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" value="" name="B">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="ID number" aria-label="Last name" value="" name="C">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Account number" aria-label="Last name" value="<?=$individualAccountNum?>" value="" name="D" disabled>
  </div>
  <div class="col">
      <button type="submit" class="btn btn-outline-primary">Create New Account</button>
  </div>
</div>
    
</form>

</body>
</html>