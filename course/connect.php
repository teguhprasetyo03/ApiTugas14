<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'root');
define('DB', 'tugas14');

$db_connect = mysqli_connect(HOST, USER, PASS, DB) or die('Unable Connect');

header('Content-Type:application/json');
