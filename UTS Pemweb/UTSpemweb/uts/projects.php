<?php
include 'database.php';

$sql = "SELECT judul, isi, judul2, isi2 FROM projects";
$resultprojects = $koneksi->query($sql);
$projects = null;

if ($resultprojects->num_rows > 0) {
    $projects = $resultprojects->fetch_assoc();
} else {
    echo "------------";
}

$koneksi->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Modern Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include "navbar.php";?>

            <!-- Projects Section-->
            <section class="py-5">
                <div class="container px-5 mb-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            <!-- Project Card 1-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder"><?php echo $projects ['judul']?></h2>
                                            <p class="pjustify"><?php echo $projects ['isi']?></p>
                                        </div>
                                        <img class="img-fluid" src="assets/project1.png" alt="Surya Input Barang" width="400" height="400"/>
                                    </div>
                                </div>
                            </div>
                            <!-- Project Card 2-->
                            <div class="card overflow-hidden shadow rounded-4 border-0">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder"><?php echo $projects ['judul2']?></h2>
                                            <p class="pjustify"><?php echo $projects ['isi2']?></p>
                                        </div>
                                        <img class="img-fluid" src="assets/proyek2.png" alt="Kasir Toko Buku DNA" />
                                    </div>
                                </div>
                            </div>

                            <!-- Project Card 3-->
                            <div class="card overflow-hidden shadow rounded-4 border-0 mt-5">
                                <div class="card-body p-0">
                                    <div class="d-flex align-items-center">
                                        <div class="p-5">
                                            <h2 class="fw-bolder">Augmented Reality E-Catalogue</h2>
                                            <p class="pjustify">Memanfaatkan
                                            fitur 3D dari Augmented Reality yang
                                            dapat membantu para konsumen agar dapat
                                            mempermudah untuk membayangkan desain baju
                                            tersebut. Dan fitur 3D tersebut mempunyai sistem
                                            rotate atau rotasi yang juga membantu
                                            mempermudah konsumen ketika ingin melihat desain
                                            baju dari sisi samping, sisi depan, dan sisi belakang
                                            baju tersebut </p>
                                        </div>
                                        <img class="img-fluid" src="assets/proyek3.jpeg" alt="Scan 3D" width="400" height="400"/>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- Call to action section-->
            <section class="py-5 bg-gradient-primary-to-secondary text-white">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="display-4 fw-bolder mb-4">Mari bekerja bersama dapa</h2>
                        <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.php">Contact me</a>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
