<?php include 'database.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") { #Buat ngirim data form
            $nama = $_POST['name']; #input field
            $email = $_POST['email'];
            $nohp = $_POST['phone'];
            $pesan = $_POST['message'];

            $stmt = $koneksi->prepare("INSERT INTO contactperson (nama, email, nohp, pesan) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $nama, $email, $nohp, $pesan); #mengikat parameter, tipe datanya string,string,int,string

            if ($stmt->execute()) {
                echo "<script>alert('Pesan Berhasil Terkirim!');</script>";
            } else {
                echo "<script>alert('Error bang: " . $stmt->error . "');</script>";
            }

            $stmt->close();
        }

        $sql = "SELECT email, nohp FROM kontakdapa";
        $resultkontak = $koneksi->query($sql);
        $kontakdap = null;

        if ($resultkontak->num_rows > 0) {
            $kontakdap = $resultkontak->fetch_assoc();
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
        <meta name="description" content />
        <meta name="author" content />
        <title>Modern Business - Contact</title>
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
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <?php include "navbar.php";?>

            <!-- Page content-->
            <section class="py-5 bg-contact">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="contact-card rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary text-white rounded-circle shadow-lg mb-3">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <h1 class="fw-bolder">Hubungi si Dapa</h1>
                            <p class="lead text-muted mb-0">Ayo Bekerja Bersama Dapa</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- Contact Form -->
                               <form id="contactForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                        <!-- Name input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">Nama Lengkap</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Masukkan Nama</div>
                                    </div>
                                    <!-- Email address input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Masukkan Email</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Emailnya ga valid</div>
                                    </div>
                                    <!-- Phone number input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="phone" name="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                        <label for="phone">No HP</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">Masukkan No HP</div>
                                    </div>
                                    <!-- Message input-->
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                        <label for="message">Pesan-Pesan</label>
                                        <div class="invalid-feedback" data-sb-feedback="message:required">Masukkan Pesan-Pesan</div>
                                    </div>

                                    <!-- Submit Button-->
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
                                    </div>
                                </form>
                                <!-- Contact Info -->
                                <div class="contact-info mt-5 text-center">
                                    <p><strong>Email: </strong><?php echo $kontakdap['email']; ?></p>
                                    <p><strong>No HP: </strong><?php echo $kontakdap['nohp']; ?></p>
                                </div>
                            </div>
                        </div>
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
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
