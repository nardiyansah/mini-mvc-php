<?php

if( !session_id()) session_start();
// teknik bootstrapping untuk memanggil semua file berindex .php
require_once '../app/init.php';

$app = new App;
?>
