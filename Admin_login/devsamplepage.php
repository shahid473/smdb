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



    <!-- Modal Update Plan -->
    <div class="modal fade" id="editModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Update Plan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form id="frmProducts" method="post" action="" class="form-horizontal"></form>
                    <input type="hidden" name="_token" value="x1rfBSHu2QMtW3Owa0P1Bd4M9Xb57GvT2hg1jBsJ">                                                <input type="hidden" name="_method" value="put">                                                <div class="modal-body">

                        <div class="form-group error row">
                            <label for="inputName" class="col-sm-3 control-label bold uppercase"><strong>Plan Title :</strong> </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control has-error bold " id="name" name="title" value="Package 1" placeholder="Title" required="">
                            </div>
                        </div>

                        <div class="form-group error row">
                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Delay Time :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" value="3" required="" name="delay_time">
                                    <div class="input-group-append"><span class="input-group-text">Days</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Crypto Percentage :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" value="30" required="" name="crypto">
                                    <div class="input-group-append"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group error row">
                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Minimum :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="min" value="500">
                                    <div class="input-group-append"><span class="input-group-text">$</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Maximum :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="max" value="1000">
                                    <div class="input-group-append"><span class="input-group-text">$</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group error row">
                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Local Currency :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="local_cur" value="25">
                                    <div class="input-group-append"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Status :</strong> </label>
                                <select name="status" class="form-control">
                                    <option selected="" value="on">Active</option>
                                    <option value="">Deactive</option>

                                </select>
                                
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary bold uppercase"><i class="fa fa-send" style="font-family: FontAwesome, Bangla299, sans-serif;"></i> Update</button>
                    </div>
                
            </div>
        </div>

    </div>
    <!-- Update plan Modal Ends -->
    <!-- Add Item modal starts -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"> Add New Plan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
            <form id="frmProducts" method="post" action="" class="form-horizontal">
                    <input type="hidden" name="_token" value="x1rfBSHu2QMtW3Owa0P1Bd4M9Xb57GvT2hg1jBsJ">                <div class="modal-body">



                        <div class="form-group error row">
                            <label for="inputName" class="col-sm-3 control-label bold uppercase"><strong>Plan Title :</strong> </label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control has-error bold " id="name" name="title" placeholder="Title" required="">
                            </div>
                        </div>

                        <div class="form-group error row">
                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Delay Time :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="delay_time">
                                    <div class="input-group-append"><span class="input-group-text">Days</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Crypto Percentage :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="crypto">
                                    <div class="input-group-append"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group error row">
                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Minimum :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="min">
                                    <div class="input-group-append"><span class="input-group-text">$</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Maximum :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="max">
                                    <div class="input-group-append"><span class="input-group-text">$</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group error row">
                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Local Currency :</strong> </label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" required="" name="local_cur">
                                    <div class="input-group-append"><span class="input-group-text">%</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="inputName" class="col-sm-12 control-label bold uppercase"><strong>Status :</strong> </label>
                                <select name="status" class="form-control">
                                    <option selected="" value="on">Active</option>
                                    <option value="">Deactive</option>

                                </select>
                            </div>
                        </div>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"> Close</button>
                    <button type="submit" class="btn btn-primary bold uppercase"> Save</button>
                </div>
            </form>
            </div>
        </div>

    </div>
    <!-- Add Item modal ends -->















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
                                            <li class="list-inline-item">Titles</li>
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
            <section class="statistic pt-2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">




















                        
   <!-- USER DATA-->
   <div class="user-data m-b-40 " style="width: 100%;">
                                    
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <a href="#" class="btn btn-primary">Add</a>
                                            <a href="#" class="btn">Import</a>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    
                                </div>
                                <!-- END USER DATA-->
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