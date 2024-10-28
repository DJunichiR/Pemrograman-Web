<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Gallery" />
    <meta name="author" content="Your Name" />
    <title>Design</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

</head>
<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <?php include "navbar.php";?>

        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Design UI UX</span></h1>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Album 1</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Album 2</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Album 3</a>
                    </li>
                </ul>

                <!-- Tab content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                        <div class="row gx-5">
                            <div class="col-md-4 mb-5">
                                <div class="card shadow rounded-4 border-0">
                                    <img class="card-img-top" src="assets/uiux1.png" alt="Design 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card shadow rounded-4 border-0">
                                    <img class="card-img-top" src="assets/uiux2.jpeg" alt="Design 2" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)" />
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <div class="card shadow rounded-4 border-0">
                                    <img class="card-img-top" src="assets/uiux3.jpeg" alt="Design 3" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this.src)" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="Design" class="img-fluid" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="zoomIn()">Zoom In</button>
                    <button type="button" class="btn btn-primary" onclick="zoomOut()">Zoom Out</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        let skala = 1; 

        function showImage(src) {
            document.getElementById('modalImage').src = src; 
            skala = 1; 
            updateImageScale();
        }

        function zoomIn() {
            skala += 0.1; 
            updateImageScale();
        }

        function zoomOut() {
            if (skala > 0.1) { 
                skala -= 0.1; 
                updateImageScale();
            }
        }

        function updateImageScale() {
            document.getElementById('modalImage').style.transform = `scale(${skala})`; 
        }
    </script>
</body>
</html>