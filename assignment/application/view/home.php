<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web 3D Applications</title>
    <link rel="stylesheet" href="../assignment/application/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assignment/application/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <span class="logo">Coca Cola Diary</span>
                <em>Refresh your mind every time</em>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="me-auto"></div>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?drink">Drinks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact us</a>
                    </li>
                </ul>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">3D APP contact detail</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Haoran Tang Email：ht356@sussex.ac.uk
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <div>
            <img class="banner" src="../assignment/application/assets/images/banner.jpg" />
            <div class="banner-info">Win Kate Moss’ ultimate Diet Coke break</div>
        </div>
        <div class="container">
            <div class="row ">
                <!-- Coca Cola Column -->
                <div class="image-gallary">
                    <img src="../assignment/application/assets/images/cola-bg.jpg" />
                    <img src="../assignment/application/assets/images/cola-bg1.png" />
                    <img src="../assignment/application/assets/images/cola-bg2.png" />
                    <img src="../assignment/application/assets/images/fanta-bg.jpg" />
                    <img src="../assignment/application/assets/images/pepper-bg.jpg" />
                    <img src="../assignment/application/assets/images/sprite-bg.png" />
                    <img src="../assignment/application/assets/images/lilt-bg.jpg" />
                    <img src="../assignment/application/assets/images/oasis-bg.jpg" />
                    <img src="../assignment/application/assets/images/roses-bg.jpg" />
                    <img src="../assignment/application/assets/images/powerade-bg.jpg" />
                    <img src="../assignment/application/assets/images/schweppes-bg.jpg" />
                    <img src="../assignment/application/assets/images/appletiser-bg.jpg" />
                    <img src="../assignment/application/assets/images/costa-coffee-bg.jpg" />
                    <img src="../assignment/application/assets/images/smartwater-bg.jpg" />
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div>© 2023 3D Apps</div>
        <div id="statement" data-bs-toggle="modal" data-bs-target="#exampleModal1">Statement of Originality</div>
        <div>
            <div><strong>Reference</strong></div>
            <ul id="reference" class="reference">
            </ul>
        </div>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" >Statement of Originality</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    These web pages are submitted as part requirement for the degree of MSc Advanced Computer Science at the University of Sussex.  They are the product of my own labour except where indicated in the web page content. These web pages or contents may be freely copied and distributed provided the source is acknowledged". 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="../assignment/application/js/bootstrap.min.js"></script>
    <script src="../assignment/application/js/jquery-3.6.4.min.js"></script>
    <script src="../assignment/application/js/references.js"></script>
</body>
</html>
