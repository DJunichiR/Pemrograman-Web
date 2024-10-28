<?php
include 'database.php'; #buat koneksi file ke database.php

$sql = "SELECT vocational, university FROM education"; #ngambil data dari tabel education di database
$resulteducation = $koneksi->query($sql); #menjalankan query SQL pake objek $koneksi terus disimpan di $resulteducation
$education = null;

if ($resulteducation->num_rows > 0) { #buat cek data yang diambil dari tabel education di database
    $education = $resulteducation->fetch_assoc();
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
        <title>Personal - Start Bootstrap Template</title>
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
            
            <!-- Page Content-->
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
                </div>
                        <!-- Education Section-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Pendidikan</h2>
                            <!-- Education Card 1-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2017 - 2020</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Vocational High School Prima Unggul</div>
                                                    <div class="small text-muted">Tangerang</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Graduate</div>
                                                    <div class="small text-muted">Computer Network Engineering</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><?php echo $education ['vocational'] ?></div>    
                                    </div>
                                </div>
                            </div>
                            <!-- Education Card 2-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row align-items-center gx-5">
                                        <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                            <div class="bg-light p-4 rounded-4">
                                                <div class="text-secondary fw-bolder mb-2">2022 - Present</div>
                                                <div class="mb-2">
                                                    <div class="small fw-bolder">Pembangunan Jaya University</div>
                                                    <div class="small text-muted">South Tangerang</div>
                                                </div>
                                                <div class="fst-italic">
                                                    <div class="small text-muted">Undergraduate</div>
                                                    <div class="small text-muted">Informatics</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8"><?php echo $education ['university']?></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Prestasi-->
                        <section>
                            <h2 class="text-secondary fw-bolder mb-4">Prestasi</h2>
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <div class="row gx-5 gy-4">
                                        <!-- Achievement 1 -->
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                                    <i class="bi bi-award"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fw-bolder mb-1">Juara 1 Lomba Mengaji Kota Tangerang</h5>
                                                    <p class="mb-0 text-muted">Kompetisi Tangerang Mengaji</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Achievement 2 -->
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">
                                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3">
                                                    <i class="bi bi-star-fill"></i>
                                                </div>
                                                <div>
                                                    <h5 class="fw-bolder mb-1">Pernah Ranking 1</h5>
                                                    <p class="mb-0 text-muted">Perlombaan Adu Pintar DiSekolah</p>
                                                </div>
                                            </div>
                                        </div>
                        </section>


                        <!-- Divider-->
                        <div class="pb-5"></div>
                        <!-- Skills Section-->
                        <section>
                            <!-- Skillset Card-->
                            <div class="card shadow border-0 rounded-4 mb-5">
                                <div class="card-body p-5">
                                    <!-- Professional skills list-->
                                    <div class="mb-5">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Hardskills</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Analisis</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Pengembangan Web</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Jaringan</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Desain User Interface</div></div>
                                        </div>
                                    </div>
                                    <!-- Languages list-->
                                    <div class="mb-0">
                                        <div class="d-flex align-items-center mb-4">
                                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                            <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Bahasa Pemrograman</span></h3>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3 mb-4">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div></div>
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Java</div></div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-3">
                                            <div class="col mb-4 mb-md-0"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Python</div></div>
                                            <div class="col"><div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">C</div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <?php include 'footer.php'; ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
