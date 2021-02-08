<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Title Page-->
    <title>SMDB -Admin Panel</title>

    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome.min.css" rel="stylesheet" media="all">

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">




    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">




    <!-- Added for Boostrap statistics card -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


        <!-- Datatable CSS- -->
        
  
        















    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">



    
   



    <div class="page-wrapper">
        

    <?php include 'docs/sidebar.php'; ?>

    
    
    
    
    
    
    
    <!-- PAGE CONTAINER-->
    <div class="page-container2">
            <?php include 'docs/header.php'; ?>
            
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">You are here:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Manage User</li>
                                                <li class="list-inline-item seprate">
                                                    <span>/</span>
                                                </li>
                                            <li class="list-inline-item">Users</li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="tile_news">
                                    <h3 class="tile-title pull-left">Login Information</h3>
                                    <div class="float-right icon-btn my-2">
                                        <form method="POST" class="form-inline" action="">
                                            <input type="hidden" name="_token" value="xDX6vfbe0t5jADCNutt57EoFrVoSvQCm44IXkG4j">
                                            <input type="text" name="search" class="form-control" placeholder="Search">
                                            <button class="btn btn-outline btn-circle  green" type="submit"><i class="fa fa-search" id=""></i></button>
                    
                                        </form>
                                    </div>
                    
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">IP</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Details</th>
                                                <th scope="col">Time</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                                        <tr>
                                                    <td data-label="Name">Zee Makgabo</td>
                                                    <td data-label="Ip">545.154.024</td>
                                                    <td data-label="Username">Paulzee24</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Happy birthday</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">Okokok</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">hhdjdf</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">fancy</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">opopopop</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">opopopop</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">vjnhv jmn</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">kekekeke</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">ghjjk</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">newman</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">mbonisi</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">Mbonisi</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">esezccc</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">esefff</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Rasheed</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">Rasheedaroiq</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Some one</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">Oneboy</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">David Onilude</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">David</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">sajib khan</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">sajibmax113</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">jioklmm</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">222222</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">drwilliams</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">drwilliams</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">MURAMUZI Ronapd</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">ronempeters</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Martin Uwakwe</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">mundus01</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">LOVE</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">love12345</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Andrew Sardinha</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">PBear</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Thubelihle Mkhulisi</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">Thube</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                        <tr>
                                                    <td data-label="Name">Kasio</td>
                                                    <td data-label="Ip">12.045.102</td>
                                                    <td data-label="Username">chima</td>
                                                    <td data-label="Details">Chrome on Windows 10
                                                        
                                                    </td>
                                                    <td data-label="Time">1 week ago</td>
                                                </tr>
                                                                    </tbody>
                                        </table>
                                        <ul class="pagination">
                            
                                        <li class="page-item disabled"><span class="page-link">«</span></li>
                            
                            
                                        
                                
                                
                                                                                            <li class="page-item active"><span class="page-link">1</span></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">2</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">3</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">4</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">5</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">6</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">7</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">8</a></li>
                                                                                        
                                                <li class="page-item disabled"><span class="page-link">...</span></li>
                                
                                
                                                    
                                
                                
                                                                                            <li class="page-item"><a class="page-link" href="">21</a></li>
                                                                                                    <li class="page-item"><a class="page-link" href="">22</a></li>
                                                                            
                            
                                        <li class="page-item"><a class="page-link" href="" rel="next">»</a></li>
                                </ul>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        



                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            

            

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                               <p>Copyright © 2020 Shamiz The Movie Db. All rights reserved. Designed by <a
                                        href="https://www.freelancer.com/u/toshinislam">Toshin Islam</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>
    <script src="vendor/vector-map/jquery.vmap.js"></script>
    <script src="vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Datatable script -->
    



    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->