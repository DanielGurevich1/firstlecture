<?php include_once __DIR__.'/header.php';?>
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
    

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">Delete Account</th>
      <th scope="col">Add Money Page</th>
      <th scope="col">Send Money Page</th>

    </tr>
</thead>
<tbody>
    <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        <td><button type="button" class="btn btn-outline-primary">Go to Add Money</button></td>
        <td><button type="button" class="btn btn-outline-success">Go to Send Money</button></td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        <td><button type="button" class="btn btn-outline-primary">Go to Add Money</button></td>
        <td><button type="button" class="btn btn-outline-success">Go to Send Money</button></td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry </td>
        <td>@twitter</td>
        <td><button type="button" class="btn btn-outline-danger">Delete</button></td>
        <td><button type="button" class="btn btn-outline-primary">Go to Add Money</button></td>
        <td><button type="button" class="btn btn-outline-success">Go to Send Money</button></td>
    </tr>
    
  </tbody>
</table>
</table>
<?php
include 'dataBase.php';
echo '<pre>';
var_dump($accountOwner);
echo '</pre>';
?>
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