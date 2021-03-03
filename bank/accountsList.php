<?php include_once __DIR__.'/header.php';
require __DIR__.'/bootstrap.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bank Account List</title>
</head>
<body>
    <!-- navigation -->
<?php
include 'dataBase.php'; //siuncia duomenys i lentele account list

?>
    
<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">ID</th>
      <!-- <th scope="col">Handle</th> -->
      <th scope="col">Delete Account</th>
      <th scope="col">Add Money Page</th>
      <th scope="col">Send Money Page</th>

    </tr>
  </thead>
<tbody>
 <?php foreach (json_decode(file_get_contents('BankDB.json'), 1) as $user)  { ?>
  <tr>
  <!-- // kaire puse - velue -->
        <th scope="row">#</th>
        <td><?=$user['Name']?></td>
        <td><?=$user['Surname']?></td>
        <td><?=$user['ID number']?></td>
        
        <!-- <td>@mdo</td> -->
        <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        <td><button type="button" class="btn btn-outline-primary">Go to Add Money</button></td>
        <td><button type="button" class="btn btn-outline-success">Go to Send Money</button></td>
    </tr> 
    <?php
    }
 ?>
    
  </tbody>
</table>

</body>
</html>



<!-- <button type="button" class="btn btn-outline-primary">Add Money</button>
<button type="button" class="btn btn-outline-secondary">Secondary</button>
<button type="button" class="btn btn-outline-success">Success</button>
<button type="button" class="btn btn-outline-danger">Delete</button>
<button type="button" class="btn btn-outline-warning">Warning</button>
<button type="button" class="btn btn-outline-info">Info</button>
<button type="button" class="btn btn-outline-light">Light</button>
<button type="button" class="btn btn-outline-dark">Dark</button> -->