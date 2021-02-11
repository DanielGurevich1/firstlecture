<?php 
$num = 5;
$location = 'tree';
$location1 = 'bush';

$format = 'there are %d monkeys in the %s and in %s';

echo sprintf($format, $num,  $location, $location1, );
echo '<br>';
echo md5('123');
echo '<br>';
echo sha1('123');

echo '<br><br><br>';

echo '1 uzduotis';
echo '<br>';
$name = 'Omar';
$fname = 'Sy';
$format = 'I like french actor %s %s.';
echo sprintf($format, $name, $fname);
echo '<br>';

echo '2 uzduotis';
echo '<br>';
echo sprintf($format, strtoupper($name), strtolower($fname));
echo '<br><br><br>';

echo '3 uzduotis';
echo '<br>';
$name = 'Dan';
echo '<br>';
$fname = 'Gur';
printf($name);
echo ' ';
printf($fname);
echo '<br>';
// printf("%10.1s", $name);
// printf("%10.1s", $fname);
$initilals = $name[0].' '.$fname[0];
echo $initilals;
echo '<br><br><br>';

echo '4 uzduotis';
echo '<br>';
$name = 'Jonas';
$fname = 'Basanavicius';

echo '<br>';
echo $name.' '.$fname;
echo '<br>';
$last = substr($name, -3).' ir '. substr($fname, -3);
echo $last;

echo '<br><br><br>';

echo '5 uzduotis';
echo '<br>';
$sentence = "An American in Paris.";
echo $sentence;
$trans = array('A' => '*', 'a' => '*');

echo '<br>';
echo strtr('An American in Paris.', $trans);

echo '<br><br><br>';

echo '6 uzduotis';
echo '<br>';
$sentence = "An American in Parisaaaaa.";
echo $sentence;
// foreach (count_chars($sentence, 1) as $a => $val) {
    //     echo "there were $val instances of \"", chr($a), "\" in the string. \n";
    // }

    echo '<br>';
$a = substr_count($sentence, 'a');
$b = substr_count($sentence, 'A');
$rezultatas = $a + $b;
echo " Viso 'a' ir 'A' yra $rezultatas.";

echo '<br><br><br>';

echo '7 uzduotis';
// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. 
echo '<br>';
$sentence = "An American in Parisaaaaa.";
echo trim($sentence, "aAeEiI");
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U", "y");
$onlyconsonants = str_replace($vowels, "", $sentence);
echo '<br>';

echo "funny task! remove all vowels: $onlyconsonants";

$sentence = "Breakfast at Tiffany's";
$onlyconsonants = str_replace($vowels, "", $sentence);
echo '<br>';

echo "funny task! remove all vowels: $onlyconsonants";
$sentence = "It's a Wonderful Life";
$onlyconsonants = str_replace($vowels, "", $sentence);
echo '<br>';

echo "funny task! remove all vowels: $onlyconsonants";
$sentence = "2001: A Space Odyssey";
$onlyconsonants = str_replace($vowels, "", $sentence);
echo '<br>';

echo "funny task! remove all vowels: $onlyconsonants";


echo '<br><br><br>';

echo '8 uzduotis';
echo '<br>';
echo $str = 'Star Wars: Episode '.str_repeat(' ',
rand(0,5)). rand(1,9) . ' - A New Hope'; 
// $a = substr_count($sentence, 'int');
// echo $str[20];
$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
echo '<br>';
echo "Episode is: $int";

echo '<br><br><br>';

echo '9 uzduotis';
echo '<br>';

echo $sentence = "Don't Be a Menace to South Central While Drinking Your Juice
in the Hood";
echo '<br>';
// print_r(str_word_count($sentence,1 ));
$words = explode(" ", $sentence);
echo '<br>';
foreach($words as $value) {
    if(mb_strlen($value) <= 5){
        $shortWordsCount++;
    }
}

echo $shortWordsCount;
// for ($i=0; $i<15; $i++) {

//     if (strlen($words[$i]) < 5) {
//         print_r(str_word_count($words1, 1));
        
//     }
// }
// $str = str_split($sentence, 5);
// print_r($str);
?>