<?php
setlocale (LC_TIME, 'id_ID'); date_default_timezone_set('Asia/Jakarta');
require_once "connection.php";

$i = $_POST;

if(isset($i['submit'])){
    // Data Siswa
    $namaLengkap   = $i['namaLengkap'];
    $namaPanggilan = $i['namaPanggilan'];
    $tempatLahir = $i['tempatLahir'];
    $tanggalLahir = $i['tanggalLahir'];
    $jenisKelamin = $i['jenisKelamin'];
    $anakKe = $i['anakKe'];
    $alamatLengkap = $i['alamatLengkap'];
    $nomorTelepon = $i['nomorTelepon'];
    $pendidikan = $i['pendidikan'];
    $kelasKelompok = $i['kelasKelompok'];
    $createdAt = strftime( "%e %B %G", time());

    // Data Ayah
    $namaAyah = $i['namaAyah'];
    $tempatLahirAyah = $i['tempatLahirAyah'];
    $tanggalLahirAyah = $i['tanggalLahirAyah'];
    $pekerjaanAyah = $i['pekerjaanAyah'];
    $pendidikanAyah = $i['pendidikanAyah'];

    // Data Ibu
    $namaIbu = $i['namaIbu'];
    $tempatLahirIbu = $i['tempatLahirIbu'];
    $tanggalLahirIbu = $i['tanggalLahirIbu'];
    $pekerjaanIbu = $i['pekerjaanIbu'];
    $pendidikanIbu = $i['pendidikanIbu'];

    $query = "INSERT INTO data_siswa(
        namaLengkap,
        namaPanggilan,
        tempatLahir,
        tanggalLahir,
        jenisKelamin,
        anakKe,
        alamatLengkap,
        nomorTelepon,
        pendidikan,
        kelasKelompok,
        namaAyah,
        tempatLahirAyah,
        tanggalLahirAyah,
        pekerjaanAyah,
        pendidikanAyah,
        namaIbu,
        tempatLahirIbu,
        tanggalLahirIbu,
        pekerjaanIbu,
        pendidikanIbu,
        created_at
    ) VALUES(
        '$namaLengkap', 
        '$namaPanggilan',
        '$tempatLahir',
        '$tanggalLahir',
        '$jenisKelamin',
        '$anakKe',
        '$alamatLengkap',
        '$nomorTelepon',
        '$pendidikan',
        '$kelasKelompok',
        '$namaAyah',
        '$tempatLahirAyah',
        '$tanggalLahirAyah',
        '$pekerjaanAyah',
        '$pendidikanAyah',
        '$namaIbu',
        '$tempatLahirIbu',
        '$tanggalLahirIbu',
        '$pekerjaanIbu',
        '$pendidikanIbu',
        '$createdAt'

        )";

    $result = $mysqli->query($query);

    if($result) echo "Berhasil Upload";
    else echo "Gagal upload";
}

?>