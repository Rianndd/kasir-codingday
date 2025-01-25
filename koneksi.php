<?php

$host = 'localhost';
$username= 'root';
$password = '';
$database = 'kasir';

try {
    $conn = mysqli_connect($host, $username, $password, $database);
} catch (Exception $e) {
    echo "<b>Koneksi gagal: </b>" . $e;
}

?>