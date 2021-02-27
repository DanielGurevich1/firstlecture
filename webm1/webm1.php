 
<?php
// if(isset($_GET['color']) && $_GET['color'] == 1) {
//     $color = 'red';
// } else {
//     $color = 'black';
// }

$color = isset($_GET['color'])?'red':'#000019';
?>

<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebM 1 </title>
</head>
<body style="background:<?=$color ?>;"> 
<!-- // php interpas i html -->

<a href="http://localhost:8888/firstlecture/webm1/webm1.php" style="color:white; font-size:30px; padding:10%">Black</a>
<a href="http://localhost:8888/firstlecture/webm1/webm1.php?color=1" style="color:white;font-size:30px;">Red</a>
    
</body>
</html>
