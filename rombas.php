<?php
// rombas pirma eilute 1, antra 2 ...
echo '<br>'.'<h2>task 8</h2>';
$h = 11;

for ($i = 1; $i < $h; $i++) {
    echo '*'.'<br>';
    for ($j=0; $j < $i; $j++) {
        echo '*';
        
    }
}
// echo '<br>';
for ($i = 1; $i < $h; $i++) {
    echo '*'.'<br>';
    for ($j=10; $j > $i; $j--) {
        echo '*';
        
    }
}



?>