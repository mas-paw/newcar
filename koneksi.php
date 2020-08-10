<?php

$host = '127.0.0.1';//
$username = 'root';
$pass = '';
$db = 'db_car';

$conn = mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	echo "Gagal Connect Database";
}
