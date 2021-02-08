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

















    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">


        <!-- delete modal -->
        <div class="modal fade" id="deleteModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel"> <i class="fa fa-trash" style="font-family: FontAwesome, Bangla668, sans-serif;"></i> Delete !</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>

                    <div class="modal-body">
                        <strong>Are you sure you want to Delete ?</strong>
                    </div>

                    <div class="modal-footer">
                        <form method="post" action=""></form>
                            <input type="hidden" name="_token" value="x1rfBSHu2QMtW3Owa0P1Bd4M9Xb57GvT2hg1jBsJ">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        
                    </div>

                </div>
            </div>

        </div>
        <!-- delete modal ends -->
















    
   



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
                                            <li class="list-inline-item">Support Tickets</li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item active">
                                                <a href="#">Pending Tickets</a>
                                            </li>
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
                            <div class="col-md-12 ">
                                                    <div class="tile_news">
                                    <h3 class="tile-title mb-2 ">Support Tickets</h3>
                                    <div class="tile-body ">
                                        <table class=" table_border table table-striped table-bordered table-hover order-column">
                                            <thead>
                                            <tr>
                                                <th> Ticket Id </th>
                                                <th> Customer Name </th>
                                                <th> Subject </th>
                                                <th> Raised Time </th>
                                                <th> Status </th>
                                                <th> Action </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                                            <tr>
                                                <td>11CA9893</td>
                                                <td><a href="#"><b>toshin</b></a></td>
                                                <td><b>The standard chunk</b></td>
                                                <td>July 21st, 2018 - 02:48 AM</td>
                                                <td>
                                                                                                <button type="button" class="btn btn-info"> Customer Reply </button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>6E498956</td>
                                                <td><a href="#"><b>toshin</b></a></td>
                                                <td><b>Finibus Bonorum et Malorum</b></td>
                                                <td>July 21st, 2018 - 03:13 AM</td>
                                                <td>
                                                                                                <button type="button" class="btn btn-info"> Customer Reply </button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>54E5B9EF</td>
                                                <td><a href=""><b>toshin</b></a></td>
                                                <td><b>The standard</b></td>
                                                <td>August 12th, 2018 - 04:08 AM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>8F767202</td>
                                                <td><a href=""><b>Testimony</b></a></td>
                                                <td><b>test</b></td>
                                                <td>January 15th, 2019 - 08:03 PM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>1A3627A0</td>
                                                <td><a href=""><b>bbbbbb</b></a></td>
                                                <td><b>Acknowledgement for payment of penalty</b></td>
                                                <td>May 16th, 2019 - 03:10 AM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>064CEDB6</td>
                                                <td><a href=""><b>bbthedon</b></a></td>
                                                <td><b>Hhjj</b></td>
                                                <td>May 19th, 2019 - 01:23 AM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>010F65DB</td>
                                                <td><a href=""><b>r_urribarri@hotmail.com</b></a></td>
                                                <td><b>sfsdf</b></td>
                                                <td>July 30th, 2019 - 09:54 PM</td>
                                                <td>
                                                                                                <button type="button" class="btn btn-info"> Customer Reply </button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>5D31B9F5</td>
                                                <td><a href=""><b>testando</b></a></td>
                                                <td><b>zX</b></td>
                                                <td>April 11th, 2020 - 05:05 AM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>D0829F2B</td>
                                                <td><a href=""><b>lesallen</b></a></td>
                                                <td><b>I did not have what it takes</b></td>
                                                <td>June 20th, 2020 - 05:20 PM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            <tr>
                                                <td>E67B57E2</td>
                                                <td><a href=""><b>bigmo</b></a></td>
                                                <td><b>I am yet to be matched</b></td>
                                                <td>August 08th, 2020 - 04:18 PM</td>
                                                <td>
                                                                                                <button class="btn btn-warning"> Opened</button>
                                                                                        </td>
                                                <td>
                                                    <a class="btn btn-primary" href="support_reply.php">View</a>
                                                </td>
                                            </tr>
                                                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                
                                            </div>
                                        </div>
            
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
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

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->