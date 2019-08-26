<?php

$host = 'localhost';
$user = 'root';
$pass = '0sampai1';
$dbnm = 'db_project';

try {

    $pdo = new PDO("mysql:host=$host;dbname=$dbnm", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Koneksi Berhasil<br>";

} catch (PDOException $e) {
    echo "Gagal Koneksi " . $e->getMessage();
}