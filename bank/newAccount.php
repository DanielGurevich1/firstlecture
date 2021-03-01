<?php include_once __DIR__.'/header.php';?>
<?php 
$individualAccountNum = rand(1234567890, 999999999999);

?>
<?php include 'dataBase.php'; ?>

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

if (!isset($_POST['testas'])) {
    echo 'field must be filled';
        } else {
            echo 'now is better';
            // _d($_POST['FN']);
            
    }


?>
<form class="row row-cols-lg-auto align-items-center" method="post">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" value="FN" name="testas">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" value="FF">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="ID number" aria-label="Last name" value="ID">
  </div>
  <div class="col">
    <input type="number" class="form-control" placeholder="Account Number" aria-label="Last name" value="<?=$individualAccountNum?>" value="AC">
  </div>
  <div class="col">
      <button type="submit" class="btn btn-outline-primary">Submit</button>
  </div>
</div>
    
</form>

</body>
</html>