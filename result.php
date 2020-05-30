<?php 

    include "layout/head.php";
    @$status = $_GET['status'];
?>

<body>
    <div class="container">
    <section class="notification-container box">
        <div class="notifications">

            <?php if($status): ?>
                <div class="success">
                    <figure class="image is-128x128">
                        <img src="./images/happy.svg">
                    </figure>
                    <h3 class="title is-3">Selamat!</h3>
                    <p>Kamu berhasil mendaftar!</p>

                    <div class="submit-button">
                        <a href="index" class="button is-primary ">
                            Kembali
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="failed">
                    <figure class="image is-128x128">
                        <img src="./images/sad.svg">
                    </figure>
                    <h3 class="title is-3">Maaf!</h3>
                    <p>Pendaftaran Gagal.</p>
                    <p>Silahkan Coba Kembali.</p>

                    <div class="submit-button">
                        <a href="index" class="button is-danger ">
                            Coba lagi
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>  
    </section>
    </div>
</body>