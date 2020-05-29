<?php 

    include "layout/head.php";
    require_once "function/connection.php";

    $query = "SELECT id, namaLengkap, namaPanggilan, jenisKelamin FROM data_siswa";
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
            <div class="content">
                <p class="content-date">
                    Daftar Murid
                    <br>
                    <span>Tahun <?= date("Y"); ?></span>
                </p>

                <div class="content-information">
                    <!-- <div class="container"> -->
                    <div class="columns is-mobile is-multiline">

                        <?php if ($result->num_rows > 0): $i=1;?>
                        <?php while($row = $result -> fetch_assoc()):?>

                        <div class="column ">
                            <a href="view">
                                <div class="card student-card ">
                                    <div class="card-content">
                                        <div class="number"><?= $i++ ?></div>
                                        <figure class="image is-128x128">
                                            <?php if($row["jenisKelamin"] == 'Laki-laki'): ?>
                                                <img src="./images/male.svg">
                                            <?php else: ?>
                                                <img src="./images/female.svg">
                                            <?php endif; ?>
                                        </figure>
                                        <h6 class="title is-6"><?= $row["namaLengkap"] ?></h6>
                                        <p>(<?= $row["namaPanggilan"] ?>)</p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <?php endwhile; ?>
                        <?php endif; ?>

                        

                    </div>

                    <!-- </div> -->

                </div>




            </div>
        </section>


    </div>

</body>