<?php

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


}

?>