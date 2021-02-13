
<?php
echo '<br>'.'1 task'.'<br><br>';
$star ='*';
for ($i = 0; $i < 8; $i++) {
    for ($j = 0; $j < 50; $j++) {
        echo $star;
    }
    echo $star.'<br>';
    
}

echo '<br>'.'2 task'.'<br>';

    for ($j = 0; $j < 300; $j++) {
       
        $x = rand(0,300).' ';
    //    if  ($x > 250) {
    //         echo "<font color=red>$x</font>";
    // } else {
    // echo $x;
    // }
    if ($x > 150) {
        $countBigNums++;
    }
    echo $x > 250 ? "<font color=red>$x</font>" : $x;
}
echo '<br>'.'<br>'."$countBigNums Numbers larger than 150 were randomly generated";

echo '<br><br><br>'.'3 task'.'<br>';
$numOfNumbers = 0;
$array = [];
for ($i=1; $i < rand(3000, 4000); $i++) {
      if (($i % 77) == 0) {
          $lastNumber = $i;
          array_push($array, $lastNumber.', ');
        

$numOfNumbers++;
}
}
array_splice($array, count($array)-1);
foreach($array as $v) {
    echo $v;
}
echo$lastNumber;
echo '<br>'."Rand generated $numOfNumbers numbers";

echo '<br><br><br>'.'<h2>4 task</h2>'.'<br>';
// display: grid;
$star ="<div class='star' style=' 
float: left; width: 15px; height: 15px; 
color: #696919;'>*</div>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo $star;
    }
 echo $star.'<br>';
    
}

echo '<br><br><br>'.'4 task V2'.'<br>';

$axis = 15;
$kvadratSize = ($axis * $axis) . 'px';

$kvadratDiv = 
"<div id='kvadrat'
style='display: grid; 
grid-template-columns: repeat($axis, 1fr); 
grid-template-rows: repeat($axis, 1fr); 
width: $kvadratSize; 
height: $kvadratSize;
background-color: #4949;'>";


$stars = str_repeat("<div class='star' style='display: grid; 
place-items: center; 
width: 15px; 
height: 15px; 
color: #191919;'>*</div>", ($axis * $axis));

$kvadratDiv .= $stars;
$kvadratDiv .= '</div>';

echo $kvadratDiv;
echo '<br><br>';


echo '<br>'.'<h2>task 5</h2>';
$star = '*';

$new = 10;
for ($i = 0; $i < 10; $i++) {
    echo '<br>';
    $new--;
        for ($j = 0; $j < 10; $j++) {
            // $star++;
            if ($i == $j || $new == $j) {
                echo "<span style=' color:red; padding:5px;'>$star</span>";
        } else echo "<span style=' color:blue; padding:5px;'>$star</span>";
        
    }
}


?>