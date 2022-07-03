<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STPI Calculator | Home Page</title>
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <?php
        include "include/navber.php";
    ?>
    <div class="container">
        <!-- hero section -->
        <section class="hero mt-2">
            <div class="row justify-content-center align-items-center flex-column flex-md-row">
                <div class="col-lg-6 col my-3">
                    <img src="img/calculator.svg" class="img-fluid" alt="calulator illustration">
                </div>
                <div class="col-lg-6 col ps-4 my-3">
                    <h1 class="h1 display-6">Calculate your STPI for D to D Admission</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident magnam quibusdam ex consequuntur quia dicta autem voluptatem officiis aut voluptates labore veritatis alias.</p>
                    <a href="#calculator" class="btn btn-primary px-4">Calculate</a>
                </div>
            </div>
        </section>

        <!-- calculator section -->
        <section id="calculator" class="my-5">
            <h2 class="h2 my-4">STPI Calculators</h2>
            <div class="d-flex flex-md-row flex-column justify-content-center align-items-center">
                <div>
                    <div class="input-group my-3 mx-3">
                        <div class="input-group-text" id="btnGroupAddon"><img src="img/computer.png" class="img-fluid" alt="computer"></div>
                        <a href="computer.php" class="btn btn-primary px-4" aria-label="Input group example" aria-describedby="btnGroupAddon">Computer Engineering</a>
                        <!-- <input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon"> -->
                    </div>
                    <div class="input-group my-3 mx-3">
                        <div class="input-group-text" id="btnGroupAddon"><img src="img/it.png" class="img-fluid" alt="it"></div>
                        <a href="it.php" class="btn btn-primary px-4" aria-label="Input group example" aria-describedby="btnGroupAddon">Information technology</a>
                    </div>
                    <div class="input-group my-3 mx-3">
                        <div class="input-group-text" id="btnGroupAddon"><img src="img/mechanic.png" class="img-fluid" alt="Mechanical"></div>
                        <a href="mechanical.php" class="btn btn-primary px-4" aria-label="Input group example" aria-describedby="btnGroupAddon">Mechanical Engineering</a>
                    </div>
                </div>
                <div>
                    <div class="input-group my-3 mx-3">
                        <div class="input-group-text" id="btnGroupAddon"><img src="img/civil.png" class="img-fluid" alt="civil"></div>
                        <a href="civil.php" class="btn btn-primary px-4" aria-label="Input group example" aria-describedby="btnGroupAddon">Civil Engineering</a>
                    </div>
                    <div class="input-group my-3 mx-3">
                        <div class="input-group-text" id="btnGroupAddon"><img src="img/electrical.png" class="img-fluid" alt="electrical"></div>
                        <a href="electrical.php" class="btn btn-primary px-4" aria-label="Input group example" aria-describedby="btnGroupAddon">Electrical Engineering</a>
                    </div>
                    <div class="input-group my-3 mx-3">
                        <div class="input-group-text" id="btnGroupAddon"><img src="img/chemical.png" class="img-fluid" alt="Chemical"></div>
                        <a href="chemical.php" class="btn btn-primary px-4" aria-label="Input group example" aria-describedby="btnGroupAddon">Chemical Engineering</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="bg-secondary">
        <div class="text-center py-3" style="color: white;">© 2021 Deep Makhasana, Inc. All rights reserved.</div>
    </footer>

    <!-- Javascript link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>