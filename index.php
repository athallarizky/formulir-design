<?php setlocale (LC_TIME, 'id_ID'); date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan Anak Usia Dini - Cahaya Insani</title>
    <link rel="stylesheet" href="bulma/css/bulma.min.css">
    <link rel="stylesheet" href="main.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <link rel="stylesheet" href="date-picker/datepicker.css">
    <script src="date-picker/datepicker.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <section class="paper-container box">
            <div class="header">
                <h5 class="title is-5">Lembaga Pendidikan Islam (LPI)</h5>
                <h5 class="title is-5">Pendidikan Anak Usia Dini (PAUD)</h5>
                <h5 class="title is-5">Cahaya Insani</h5>
                <p>
                    Jl. Prabu Siliwangi KP. Gembor RT. 003/001 Kel. Gembor Kec. Periuk Kota Tangerang
                    <br>
                    Telp. 085810719823
                </p>
                <hr>
            </div>
            <div class="content">
                <p class="content-date">
                    Formulir Pendaftaran Murid Baru
                    <br>
                    <span>Tahun <?= date("Y"); ?></span>
                </p>

                <div class="content-information">
                    <form action="function/input.php" method="POST">
                        <ol type="A" class="sub-content-info">
                            <li>Murid</li>
                            <div class="table-container">
                                <table class="table is-narrow ">

                                    <tr class="table-row">
                                        <td>1.</td>
                                        <td>Nama Lengkap</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Nama Lengkap" name="namaLengkap">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>2.</td>
                                        <td>Nama Panggilan</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Nama Panggilan" name="namaPanggilan">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>3.</td>
                                        <td>Tempat, Tanggal Lahir</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field birth-data">
                                                <div class="control">
                                                    <input class="input is-primary birth-place" type="text"
                                                        placeholder="Tempat Lahir" name="tempatLahir">
                                                </div>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <div class="control">
                                                    <input class="input is-primary birth-date" type="text"
                                                        placeholder="Tanggal Lahir" data-toggle="datepicker"
                                                        name="tanggalLahir">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>4.</td>
                                        <td>Jenis Kelamin</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <label class="radio">
                                                        <input type="radio" name="jenisKelamin" value="Laki-laki"
                                                            checked>
                                                        Laki-laki
                                                    </label>
                                                    <label class="radio">
                                                        <input type="radio" name="jenisKelamin" value="Perempuan">
                                                        Perempuan
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>5.</td>
                                        <td>Anak ke</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text" placeholder="Anak ke-"
                                                        name="anakKe">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>6.</td>
                                        <td>Alamat Lengkap</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <textarea class="textarea address is-primary"
                                                        placeholder="Alamat Lengkap" name="alamatLengkap"></textarea>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>7.</td>
                                        <td>No. Telp</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Nomor Telepon" name="nomorTelepon">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>8.</td>
                                        <td>Pendidikan yang sedang ditempuh</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text" placeholder="Pendidikan"
                                                        name="pendidikan">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row">
                                        <td>9.</td>
                                        <td>Diterima di kelas/kelompok</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Kelas/kelompok" name="kelasKelompok">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                            <!-- ORANG TUA -->
                            <li>Orang tua/Wali</li>
                            <div class="table-container">
                                <table class="table is-narrow parents-table">

                                    <!-- Nama Orangtua -->
                                    <tr class="table-row parents-row">
                                        <td>1.</td>
                                        <td>Nama Orang tua/Wali</td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>a. Ayah</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text" placeholder="Nama Ayah"
                                                        name="namaAyah">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>b. Ibu</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text" placeholder="Nama Ibu"
                                                        name="namaIbu">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Tempat Tanggal Lahir -->
                                    <tr class="table-row parents-row">
                                        <td>2.</td>
                                        <td>Tempat, Tanggal Lahir</td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>a. Ayah</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <div class="field birth-data">
                                                        <div class="control">
                                                            <input class="input is-primary birth-place" type="text"
                                                                placeholder="Tempat Lahir" name="tempatLahirAyah">
                                                        </div>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <div class="control">
                                                            <input class="input is-primary birth-date" type="text"
                                                                placeholder="Tanggal Lahir" data-toggle="datepicker"
                                                                name="tanggalLahirAyah">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>b. Ibu</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <div class="field birth-data">
                                                        <div class="control">
                                                            <input class="input is-primary birth-place" type="text"
                                                                placeholder="Tempat Lahir" name="tempatLahirIbu">
                                                        </div>
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <div class="control">
                                                            <input class="input is-primary birth-date" type="text"
                                                                placeholder="Tanggal Lahir" data-toggle="datepicker"
                                                                name="tanggalLahirIbu">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Pekerjaan -->
                                    <tr class="table-row parents-row">
                                        <td>3.</td>
                                        <td>Pekerjaan</td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>a. Ayah</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Pekerjaan Ayah" name="pekerjaanAyah">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>b. Ibu</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Pekerjaan Ibu" name="pekerjaanIbu">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Pendidikan -->
                                    <tr class="table-row parents-row">
                                        <td>4.</td>
                                        <td>Pendidikan</td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>a. Ayah</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Pendidikan Ayah" name="pendidikanAyah">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr class="table-row parents-row">
                                        <td>&nbsp;</td>
                                        <td>b. Ibu</td>
                                        <td>:</td>
                                        <td>
                                            <div class="field">
                                                <div class="control">
                                                    <input class="input is-primary" type="text"
                                                        placeholder="Pendidikan Ibu" name="pendidikanIbu">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>

                        </ol>
                        <div class="content-notes"><b>*)</b> Kosongkan yang tidak perlu</div>

                        <label class="checkbox">
                            <input type="checkbox" id="terms" onchange="isChecked()">
                            Saya mengisi form diatas dengan sebenar-benarnya.
                        </label>
                        <div class="content-signature">
                            <p>
                                (Tangerang,
                                <?= strftime( "%e %B %G", time());?>)
                            </p>
                        </div>
                        <div class="submit-button">
                            <button type="submit" class="button is-primary btn-send" name="submit">Kirim
                                Formulir</button>
                        </div>
                </div>
                </form>

            </div>
        </section>


    </div>

</body>
<script>
    $('[data-toggle="datepicker"]').datepicker()
    $('.btn-send').attr("disabled", true)
    $('#terms').prop('checked', false)

    const isChecked = () => {
        let checked = $('#terms:checked').length > 0!checked ? $('.btn-send').attr("disabled", true) : $(
            '.btn-send').attr("disabled", false)
    }
</script>

</html>