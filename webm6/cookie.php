<?php

_d(rawurlencode ( 'sweet with almonds' ));
setcookie ( 'My-First_Cookie' , 'sweet with almonds' );
// setcookie ( 'My-First_Cookie' , 'sweet with almonds' , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false ) : bool;
setcookie ( 'My-Second_Cookie' , 'sweet with almonds', time() + 60, '/' );

_d($_COOKIE);