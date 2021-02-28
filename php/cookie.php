<?php

// _d(rawurlencode ( 'sweet with almonds' ));
// setcookie ( 'My-First_Cookie' , 'sweet with almonds' );
// // setcookie ( 'My-First_Cookie' , 'sweet with almonds' , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool;
// setcookie ( 'My-Second_Cookie' , 'sweet with almonds', time() + 60, '/' );


// $num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
// $num++;
// setcookie("num", $num, time() + 5);
// echo "refreshed $num times";
// _d($_COOKIE);

session_start();
$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
$num++;
$_SESSION["num"] = $num;
echo "refreshed $num times";
_d($_COOKIE);

session_destroy();  