<?php 

    include "layout/head.php";
    require_once "function/connection.php";

    @$id = $_GET['id'];
    $query = "SELECT * FROM data_siswa WHERE id='$id'";
    $result = $mysqli->query($query);

?>

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
            <?php if ($result->num_rows > 0): $i=1;?>
            <?php while($row = $result -> fetch_assoc()):?>
            <div class="content">
                <p class="content-date">
                    Formulir Pendaftaran Murid Baru
                    <br>
                    <span>Tahun <?= date("Y"); ?></span>
                </p>

                <div class="content-information">
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
                                                <input class="input is-primary" type="text" placeholder="Nama Lengkap"
                                                    name="namaLengkap" readonly value="<?= $row['namaLengkap'] ?>">
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
                                                <input class="input is-primary" type="text" placeholder="Nama Panggilan"
                                                    name="namaPanggilan" readonly value="<?= $row['namaPanggilan'] ?>">
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
                                                    placeholder="Tempat Lahir" name="tempatLahir" readonly value="<?= $row['tempatLahir'] ?>">
                                            </div>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <div class="control">
                                                <input class="input is-primary birth-date" type="text"
                                                    placeholder="Tanggal Lahir" data-toggle="datepicker"
                                                    name="tanggalLahir" readonly value="<?= $row['tanggalLahir'] ?>">
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
                                                <input class="input is-primary birth-place" type="text"
                                                    placeholder="Jenis Kelamin" name="jenisKelamin" readonly value="<?= $row['jenisKelamin'] ?>">
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
                                                    name="anakKe" readonly value="<?= $row['anakKe'] ?>">
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
                                                    placeholder="Alamat Lengkap" name="alamatLengkap"
                                                    readonly><?= $row['alamatLengkap'] ?></textarea>
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
                                                <input class="input is-primary" type="text" placeholder="Nomor Telepon"
                                                    name="nomorTelepon" readonly value="<?= $row['nomorTelepon'] ?>">
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
                                                    name="pendidikan" readonly value="<?= $row['pendidikan'] ?>">
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
                                                <input class="input is-primary" type="text" placeholder="Kelas/kelompok"
                                                    name="kelasKelompok" readonly value="<?= $row['kelasKelompok'] ?>">
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
                                                    name="namaAyah" readonly value="<?= $row['namaAyah'] ?>">
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
                                                    name="namaIbu" readonly value="<?= $row['namaIbu'] ?>">
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
                                                            placeholder="Tempat Lahir" name="tempatLahirAyah" readonly value="<?= $row['tempatLahirAyah'] ?>">
                                                    </div>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <div class="control">
                                                        <input class="input is-primary birth-date" type="text"
                                                            placeholder="Tanggal Lahir" data-toggle="datepicker"
                                                            name="tanggalLahirAyah" readonly value="<?= $row['tanggalLahirAyah'] ?>">
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
                                                            placeholder="Tempat Lahir" name="tempatLahirIbu" readonly value="<?= $row['tempatLahirIbu'] ?>">
                                                    </div>
                                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    <div class="control">
                                                        <input class="input is-primary birth-date" type="text"
                                                            placeholder="Tanggal Lahir" data-toggle="datepicker"
                                                            name="tanggalLahirIbu" readonly value="<?= $row['tanggalLahirIbu'] ?>">
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
                                                <input class="input is-primary" type="text" placeholder="Pekerjaan Ayah"
                                                    name="pekerjaanAyah" readonly value="<?= $row['pekerjaanAyah'] ?>">
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
                                                <input class="input is-primary" type="text" placeholder="Pekerjaan Ibu"
                                                    name="pekerjaanIbu" readonly value="<?= $row['pekerjaanIbu'] ?>">
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
                                                    placeholder="Pendidikan Ayah" name="pendidikanAyah" readonly value="<?= $row['pendidikanAyah'] ?>">
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
                                                <input class="input is-primary" type="text" placeholder="Pendidikan Ibu"
                                                    name="pendidikanIbu" readonly value="<?= $row['pendidikanIbu'] ?>">
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>

                    </ol>

                    <div class="content-notes" style="text-align:center">Dokumen ini dibuat pada tanggal: <b><?= $row['created_at'] ?></b> </div>

                    <div class="submit-button">
                        <a href="viewList" class="button is-info ">
                            Kembali
                        </a>
                    </div>
                </div>


            </div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>


    </div>

</body>