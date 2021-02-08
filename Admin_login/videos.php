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
                                            <li class="list-inline-item">Support Ticket</li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Pending</li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Support Reply</li>
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




                        <div class="col-xl-12">
                                <!-- USER DATA-->
                                <div class="user-data m-b-40 bg-dark">
                                    
                                    <div class="filters m-b-45">
                                        <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Products</option>
                                                <option value="">Services</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            <select class="js-select2 au-select-dark" name="time">
                                                <option selected="selected">All Time</option>
                                                <option value="">By Month</option>
                                                <option value="">By Day</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--border">
                                            
                                            <a href="#" class="btn btn-info btn-md rounded">Add</a>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>name</td>
                                                    <td>Title</td>
                                                    <td>type</td>
                                                    <td>Category</td>
                                                    <td>Approved</td>
                                                    <td></td>
                                                </tr>
                                            </thead>



                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/hplKoKmi0IL1uDPYtHu3rogcvIQ.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/nWw20ipGipwdOyLTkFfX2Uz4Grp.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/r40Y2MwYj45nPosA11K9hkKoFir.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/r1e0lDIsezrklektX82AetUHr5m.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/tHxsIOdnzvK3w0fWC4dcGG2Zj41.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/lkeBhXGJFRlhI7cBWn8LQQAdZqK.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label class="au-checkbox">
                                                            <input type="checkbox">
                                                            <span class="au-checkmark"></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="table-data__info">
                                                            <a href="#"><h6><img src="https://image.tmdb.org/t/p/w1280/l2QlhHlggJEaPdgkfpTt0IA2mHT.jpg" width="50px" height="50px" alt=""> lori lynch</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>The Terminator</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Embed</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                    <div class="table-data__info">
                                                            <a href="#"><h6>Trailer</h6></a>
                                                           
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="more">
                                                            <i class="zmdi zmdi-more"></i>
                                                        </span>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="user-data__footer">
                                        <button class="au-btn au-btn-load">load more</button>
                                    </div>
                                </div>
                                <!-- END USER DATA-->
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