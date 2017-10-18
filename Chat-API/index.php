<?php
error_reporting (E_ERROR| E_PARSE);

require_once 'src/whatsprot.class.php';
$username	= "6282165311530"; //Nomor pengirim
$identity	= "";
$nickname	= "Coba";
$password	= "dade2da6fc71394c1ca0fb8ff0a9c13d"; //password dari WART
$debug		= false;

$w = new Whatsprot($username,$indetity,$nickname,$debug);

$w->connect();
$w->loginWithpassword($password);

$target =  '6281266810022'; // isi nomor tujuan
$message = 'Pesan dari PHP Localhost'; //isi pesan

$w->sendMessage($target,$message);