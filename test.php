<?php
//     $a = randString(rand(12,15));
// function randString($length){
//     $chars = "qwertyuiopasdfghjklzxcvbnm";
//     $size = strlen($chars);
//     for ($i=0; $i < $length; $i++) { 
//         $str = $chars[rand(0, $size-1)];
//         echo $str;
        
//     }
// }

// // echo $a;
// echo 'ddddd';
// $chars = "qwertyuiopasdfghjklzxcvbnm";
// $shuffled = str_shuffle($chars);

// echo ($shuffled);

// echo '<br>';
// function generateRandomString($length = 25) {
//     $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $charactersLength = strlen($characters);
//     $randomString = '';
//     for ($i = 0; $i < $length; $i++) {
//         $randomString .= $characters[rand(0, $charactersLength - 1)];
//     }
//     // return $randomString;
//     echo $randomString;
// }
// generateRandomString(5);

// $a = array();
// $a[0][0] = "a";
// $a[0][1] = "b";
// $a[1][0] = "y";
// $a[1][1] = "z";
for ($i=0; $i < 2; $i++) { 
$array55[] = ['user_id'=>'danik', 'place_in_row'=>rand(0,100) ];
foreach ($array55 as $v1) {
    foreach ($v1 as $v2) {
        $newArray = ['name' => 'Daniel', 'surname' => 'Gurevich'];
        $finalArray = $v1 + $newArray;
        // echo "$v2\n";
    }
}
}
echo '<pre>';
// print_r($array55);
// array_push($v1, 'location');
echo '<pre>';
print_r($finalArray);


// $new_input['name'] = array(
//     'type' => 'text', 
//     'label' => 'First name', 
//     'show' => true, 
//     'required' => true
// );
// $options['inputs']['name'] = $new_input['name'];
// array_push($options['inputs'], $new_input);
// echo '<pre>';
// print_r($options);
