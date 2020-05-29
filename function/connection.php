<?php
    setlocale (LC_TIME, 'id_ID'); 
    date_default_timezone_set('Asia/Jakarta');

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "lpi_paud";

    $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

    
    if (!$mysqli) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

?>