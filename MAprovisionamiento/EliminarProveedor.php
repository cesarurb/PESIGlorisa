<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Forms</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>

        </header>
        <!-- END HEADER MOBILE-->

        <!-- PAGE CONTAINER-->
         <div class="page-container">
            
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div >
                            <div class="col-lg-11">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Eliminar proveedor</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="form-group row ">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">RUC</label>
                                                </div>
                                                <div class="col-8 col-md-5">
                                                    <input type="text" id="text-input" name="BuscarProv" placeholder="Buscar por RUC" class="form-control" >      
                                                </div>
                                                <div class="col-1 col-md-4">
                                                    <input class="btn btn-primary" type="submit" name="BuscarProveedor" onclick="holi()" value="Buscar" >

                                                </div>
                                            </div>
                                        </form>

                                            <div align="center" >
                                                <div class="col-lg-12">
                                                    <div class="table-responsive table--no-card m-b-30">

                                                        <table class="table table-borderless table-striped table-earning" align="center">
                                                            <thead>
                                                                <tr>
                                                                    <th>RUC/DNI</th>
                                                                    <th>Nombre</th>
                                                                    <th>Nombre Contacto</th>
                                                                    <th>Teléfono</th>
                                                                    <th>Dirección</th>
                                                                    <th>Estado</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                               <?php
                                                                if (isset($_POST['BuscarProveedor'])) { 
                                                                require ("../Conexion.php");
                                                                $conexion = mysqli_connect($host,$usuario,$clave,$BaseDatos);
                                                                    $BuscarRuc1 = $_POST['BuscarProv'];
                                                                    //echo "<script>$('#busqadita').val(".$BuscarRuc1.");</script>";
                                                                    $sql= $conexion->query("SELECT * FROM Proveedor WHERE rucProv='".$BuscarRuc1."';");
                                                                   while ($row=mysqli_fetch_row($sql)) {
                                                                     ?>
                                                                                <tr align="center">
                                                                                    <th><?php echo $row[1];?></th>
                                                                                    <th><?php echo $row[2]; ?></th>
                                                                                    <th><?php echo $row[3]; ?></th>
                                                                                    <th><?php echo $row[4]; ?></th>
                                                                                    <th><?php echo $row[5]; ?></th>
                                                                                    <th><?php echo $row[6]; ?></th>
                                                                                </tr>
                                                                     <?php
                                                                     }
                                                                }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                            <form action="" method="post">
                                            <div class="col-8 col-md-5" >
                                                    <input type="text" id="text-input" name="busqadita" placeholder="Buscar por RUC" class="form-control" >      
                                            </div>  
                                            <div class="card-footer">
                                                <input class="btn btn-outline-danger btn-lg btn-block" type="submit" name="EliminarProveedor" value="Deshabilitar" >
                                            </div>
                                            </form>
                                            <?php  

                                                                if (isset($_POST['EliminarProveedor'])) {
                                                                    require("../Conexion.php");
                                                                    $con= mysqli_connect($host,$usuario,$clave,$BaseDatos);
                                                                    $estado='Deshabilitado';
                                                                    $sql= $con->query("UPDATE Proveedor SET estado ='".$estado."' WHERE rucProv ='".$BuscarRuc1."';");
                                                                    if ($sql) {
                                                                        echo '<script>alert("Proveedor deshabilitado);</script>';
                                                                    }else {
                                                                        echo '<script>alert("Error");</script>';
                                                                    }
                                                                }
                                                             ?>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function holi(){
            hol=$('#BuscarProv').val();
            $('#busqadita').val(texto);
        }

    </script>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->