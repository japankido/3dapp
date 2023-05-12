<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web 3D Applications</title>
    <link rel="stylesheet" href="../assignment/application/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assignment/application/css/style.css">
    <script type='text/javascript' src='https://www.x3dom.org/download/x3dom.js'> </script>
    <link rel='stylesheet' type='text/css' href='https://www.x3dom.org/download/x3dom.css'></link>
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
                        <a class="nav-link" aria-current="page" href="./">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./?about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./?drink">Drinks</a>
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
        <div class="row p-5">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button id="roses" type="button" class="btn btn-primary">Roses</button>
                            <button id="oasis" type="button" class="btn btn-primary">Oasis</button>
                            <button id="monster_energy" type="button" class="btn btn-primary">Monster Energy</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <x3d id="x3d" width='100%' height='400px'>
                                <scene>
                                    <Viewpoint id="front" DEF="CA_Camera"
                                               centerOfRotation="0 0 0"
                                               position="20.00 -0.00 0.00"
                                               orientation="-3.304e-005 -1 -3.304e-005 -1.571"
                                               fieldOfView="0.237"
                                    ></Viewpoint>
                                    <Viewpoint id="left" DEF="CA_Camera"
                                               centerOfRotation="0 0 0"
                                               position="0.00 -0.00 20.00"
                                               orientation="0.85 0.50 1.89 0.00"
                                               fieldOfView="0.237"
                                    ></Viewpoint>
                                    <Viewpoint id="right" DEF="CA_Camera"
                                               centerOfRotation="0 0 0"
                                               position="-20.00 -0.00 0.00"
                                               orientation="0 1 0 -1.571"
                                               fieldOfView="0.237"
                                    ></Viewpoint>
                                    <Viewpoint id="back" DEF="CA_Camera"
                                               centerOfRotation="0 0 0"
                                               position="0.00 -0.00 -20.00"
                                               orientation="0 -1 0 -3.142"
                                               fieldOfView="0.237"
                                    ></Viewpoint>
                                    <Viewpoint id="top" DEF="CA_Camera"
                                               centerOfRotation="0 0 0"
                                               position="0.00 20.00 0.00"
                                               orientation="1 0 0 -1.571"
                                               fieldOfView="0.237"
                                    ></Viewpoint>
                                    <Viewpoint id="bottom" DEF="CA_Camera"
                                               centerOfRotation="0 0 0"
                                               position="0.00 -20.00 -0.10"
                                               orientation="0 -0.7071 0.7071 -3.142"
                                               fieldOfView="0.237"
                                    ></Viewpoint>

                                     <!-- CONTROLS ROTATION OF THE MODEL-->
                                    <Transform DEF='Drink_Wrapper'>
                                        <inline id="model_inline" url="../assignment/application/assets/x3d/roses.x3d"> </inline>
                                    </Transform>

                                    <timeSensor id="timeSensor" DEF='clock' cycleInterval='8' loop='true' enabled="false"></timeSensor>
                                    <orientationInterpolator DEF='spinThings' key='0 0.25 0.5 0.75 1' keyValue='0 1 0 0  0 1 0 1.57079  0 1 0 3.14159  0 1 0 4.71239  0 1 0 6.28317'></orientationInterpolator>

                                    <ROUTE fromNode='clock' fromField='fraction_changed' toNode='spinThings' toField='set_fraction'></ROUTE>
                                    <ROUTE fromNode='spinThings' fromField='value_changed' toNode='Drink_Wrapper' toField='set_rotation'></ROUTE>

                                </scene>
                            </x3d>
                            <div id="desc" class="description">Established in 1867, Rose's was the world's first concentrated fruit drink.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card mb-2">
                    <div class="card-header">
                        Actions:
                    </div>
                    <div class="card-body">
                        <div class="row mb-5">
                            <div class="mb-2">Camera: </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button id="frontBtn" type="button" class="btn btn-primary">Default</button>
                                <button id="backBtn" type="button" class="btn btn-primary">Back</button>
                                <button id="leftBtn" type="button" class="btn btn-primary">Left</button>
                                <button id="rightBtn" type="button" class="btn btn-primary">Right</button>
                                <button id="topBtn" type="button" class="btn btn-primary">Top</button>
                                <button id="bottomBtn" type="button" class="btn btn-primary">Bottom</button>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="mb-2">Animation: </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button id="rotate" type="button" class="btn btn-primary">Rotate</button>
                                <button id="stopRotate" type="button" class="btn btn-primary">Stop</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-2">Render: </div>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button id="wire" type="button" class="btn btn-primary">Wire</button>
                            </div>
                        </div>
                    </div>
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
    <script src="../assignment/application/js/script.js"></script>
    <script src="../assignment/application/js/references.js"></script>
</body>
</html>
