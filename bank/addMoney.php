<?php include_once __DIR__.'/header.php';
require __DIR__.'/bootstrap.php';

echo $accountOwner['misha']['kiki'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <title>Add Money </title>
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
  <!-- // cia turi atsisipindeti saskaitos savininko balansas -->
  <div class="col">
      <input type="number" class="form-control" placeholder="Account Balance" aria-label="Last name">
    </div>
    <!-- ivedame papildymo suma -->
    <div class="col">
      <input type="number" class="form-control" placeholder="Top up Sum" aria-label="Last name">
    </div>
    <div class="col">
      <button type="button" class="btn btn-outline-primary">Add Money</button>
    </div>
</div>
</form>

</body>
</html>

<!-- // Add Money Puslapis “pridėti lėšas”. Turi matytis savininko vardas, pavardė sąskaitos likutis ir laukelis sumai įvesti -->
<!-- variantas 1
sukurti vidini puslapi kiekvienam klientui ir ten isvesti visa info, ir apacioje  sumos laukelis  ir papildymo mygtukas -->

<!-- variantas 2 
dinaminis puslapis kuris isvestu pasirinkto kliento duomenys ir ivedimo migtukas -->

<!-- variantas 3 
imesti i kliento saskaita pinigus neiskvieciant jo duomenu 
naudojanti vardu, pav, id
panasiai kaip edit metodas crud-->