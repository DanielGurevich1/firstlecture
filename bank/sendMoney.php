<?php include_once __DIR__.'/header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Send Money </title>
</head>
<body>
<form class="row row-cols-lg-auto align-items-center">
<div class="row">
  <div class="col">
    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
  </div>
  <div class="col">
      <input type="number" class="form-control" placeholder="Account Balance" aria-label="Last name">
    </div>
    <div class="col">
      <input type="number" class="form-control" placeholder="Sum to send" aria-label="Last name">
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary">Send Money</button>
    </div>
</div>
</form>

</body>
</html>