<?php

session_start();
define('URL','http://localhost:8888/firstlecture/box/' );
define('DIR',__DIR__.'/' );
require DIR. 'app/functions.php';

_d($_SESSION);