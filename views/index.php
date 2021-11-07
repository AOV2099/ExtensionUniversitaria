<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXTENSION UNIVERSITARIA</title>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link href="../css/styles.css" rel="stylesheet">
    <link href="../css/topbar.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">

</head>

<body style="background:url('../assets/img/background.jpg');  background-repeat: no-repeat; background-size: cover;">



    <!--<div class="" style="padding-left: 0px; padding-right:0px; box-shadow: 0px 1px 58px 94px rgba(0,0,0,0.46);
-webkit-box-shadow: 0px 1px 58px 94px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 1px 58px 94px rgba(0,0,0,0.46);"> -->
    <div class="container" style="padding-left: 0px; padding-right:0px; box-shadow: 0px 1px 58px 94px rgba(0,0,0,0.46);
-webkit-box-shadow: 0px 1px 58px 94px rgba(0,0,0,0.46);
-moz-box-shadow: 0px 1px 58px 94px rgba(0,0,0,0.46);"> 


        <?php
        require "topbar.php"
        ?>

        <!-- ----MAIN BODY ----->

        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">


                <div class="carousel-item active">
                    <div class="">

                        <div class="row">

                            <div class="col-md-6 col-sm-12" style="height: 400px; background: linear-gradient(to right, rgba(0,0,0,0), #000), url('../assets/img/talleres/danza.jpg'); background-size: auto 700px; ">

                            </div>

                            <div style="background-color: #000; height:400px" class="col-md-6 col-sm-12 d-flex align-items-center">

                                <div>
                                    <div class="featured-content-title">CULTURALES</div>

                                    <div class="featured-content-name">DANZA FOLCLÓRICA</div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>





            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="main-content p-4">

            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex justify-content-center">

                    <div>
                        <div class="featured-content-opc ">GRUPOS</div>
                        <div class="featured-content-opc">CUPO</div>
                        <div class="featured-content-opc">LUGAR</div>
                    </div>

                </div>

                <div class="col-md-6 col-sm-12 d-flex justify-content-center">

                    <div>
                        <div class="featured-content-opc">PROFESOR</div>
                        <div class="featured-content-opc">HORARIO</div>
                    </div>

                </div>

            </div>

            <br>

            <div class="d-flex justify-content-center" style="color: gray; font-weight:700; margin-bottom:24px;">CONOCE NUESTRAS NUEVAS ACTIVIDADES</div>
            <div class="d-flex justify-content-center row">
                <img class="col-md-6 col-sm-12" src="../assets/img/talleres/acts.png" alt="">
            </div>

        </div>

        <!-- ---- END OF MAIN BODY ----->

        <?php
        require "footer.php"
        ?>
    </div>







</body>

</html>