


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap horizon css -->
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/main-style.css">
    
    <link rel="stylesheet" href="assets/css/header-style.css">
    
    <link rel="stylesheet" href="assets/css/footer-style.css">
    
    <link rel="stylesheet" href="assets/css/movie-card.css">



  <!-- Font Awesome -->

  <!-- reference your copy Font Awesome here (from our CDN or by hosting yourself) -->
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
  




    <title>STMDB | Shamiz Movie Database</title>
  </head>
  <body>
    







<nav class="navbar navbar-expand-md navbar-dark cust-style1">
  <div class="container">
    <button class="navbar-toggler" type="button" onclick="openNav()" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


  
  
  



        <li class="nav-item" onclick="showList1()" >
          <a class="nav-link fs-5" >Movies</a>
        </li>


        <li class="nav-item" id="show-list1">
          <a class="nav-link fs-6" href="#">Popular</a>
        </li>
        <li class="nav-item" id="show-list2">
          <a class="nav-link fs-6" href="#">Now Playing</a>
        </li>
        <li class="nav-item" id="show-list3">
          <a class="nav-link fs-6" href="#">Upcoming</a>
        </li>
        <li class="nav-item" id="show-list4">
          <a class="nav-link fs-6" href="#">Top Rated</a>
        </li>




        <li class="nav-item"  onclick="showList2()">
          <a class="nav-link fs-5">TV Shows</a>
        </li>

        <li class="nav-item" id="show-list5">
          <a class="nav-link fs-6" href="#">Popular</a>
        </li>
        <li class="nav-item" id="show-list6">
          <a class="nav-link fs-6" href="#">Airing Today</a>
        </li>
        <li class="nav-item" id="show-list7">
          <a class="nav-link fs-6" href="#">On Tv</a>
        </li>
        <li class="nav-item" id="show-list8">
          <a class="nav-link fs-6" href="#">Top Rated</a>
        </li>



        <li class="nav-item"  onclick="showList3()">
          <a class="nav-link fs-5">People</a>
        </li>


        <li class="nav-item" id="show-list9">
          <a class="nav-link fs-6" href="#">Popular People</a>
        </li>
        






        <li class="nav-item">
          <a class="nav-link fs-6" href="#">Contribution Bible</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="#">Discussions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="#">Leaderboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" >Contribute</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="#">Support</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-6" href="login.php">Login</a>
        </li>


   

        
  
</div>











    
    <a class="navbar-brand mx-0" href="../index.php"><img src="assets/img/logo.png" alt="The Movie Database (TMDb)" width="80" height="20"></a>
    <button class="btn btn-success border-0 bg-transparent display-hide mx-0 px-0"><b><i class="fa fa-search"></i></b></button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <b> Movies</b>
          </a>
          <ul class="dropdown-menu menuu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="moviecard-page.php">Popular</a></li>
            <li><a class="dropdown-item" href="#">Now Playing</a></li>
            
            <li><a class="dropdown-item" href="#">Upcoming</a></li>
            <li><a class="dropdown-item" href="#">Top Rated</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <b> TV Shows</b>
          </a>
          <ul class="dropdown-menu menuu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Popular</a></li>
            <li><a class="dropdown-item" href="#">Airing Today</a></li>
            
            <li><a class="dropdown-item" href="#">On TV</a></li>
            <li><a class="dropdown-item" href="#">Top Rated</a></li>
          </ul>
        </li>


        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <b> People</b>
          </a>
          <ul class="dropdown-menu menuu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Popular People</a></li>
            
          </ul>
        </li>


        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           <b> More</b>
          </a>
          <ul class="dropdown-menu menuu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Discussion</a></li>
            <li><a class="dropdown-item" href="#">Leaderboard</a></li>
            <li><a class="dropdown-item" href="#">Support</a></li>
            <li><a class="dropdown-item" href="#">API</a></li>
            
          </ul>
        </li>



        
      </ul>
      <form class="d-flex search-ico" >
        
        <button class="btn btn-outline-light px-2 fs-6" type="submit"><b>EN</b></button>
        <button  class="btn btn-success border-0 bg-transparent mx-2"><b><a class="text-light" href="login.php">Login</a></b></button>
        <button class="btn btn-success border-0 bg-transparent mx-2" ><b><a class="text-light" href="signup.php">Join SMDB</a></b></button>
        <button  class="btn btn-success border-0 bg-transparent mx-2 search-icon" ><b><i  class="fa fa-search"></i> </b></button>
      </form>
    </div>
  </div>
  
</nav>
<div id="show-search"><input placeholder="&#xF002; Search movies, tv shows, persons....." style="font-family:Arial, FontAwesome" class="form-control" type="text"><a class="close-btn" href="">X</a>
</div>









<!-- ------------------Script for Sidebar li display on click------------ -->
<script>
  
  function showList1() {
  if (document.getElementById('show-list1').style.display === "none") {
    document.getElementById('show-list1').style.display = "block";
  } else {
    document.getElementById('show-list1').style.display = "none";
  }
  if (document.getElementById('show-list2').style.display === "none") {
    document.getElementById('show-list2').style.display = "block";
  } else {
    document.getElementById('show-list2').style.display = "none";
  }
  if (document.getElementById('show-list3').style.display === "none") {
    document.getElementById('show-list3').style.display = "block";
  } else {
    document.getElementById('show-list3').style.display = "none";
  }
  if (document.getElementById('show-list4').style.display === "none") {
    document.getElementById('show-list4').style.display = "block";
  } else {
    document.getElementById('show-list4').style.display = "none";
  }





}
   function showList2() {
    if (document.getElementById('show-list5').style.display === "none") {
    document.getElementById('show-list5').style.display = "block";
  } else {
    document.getElementById('show-list5').style.display = "none";
  }
    if (document.getElementById('show-list6').style.display === "none") {
    document.getElementById('show-list6').style.display = "block";
  } else {
    document.getElementById('show-list6').style.display = "none";
  }
    if (document.getElementById('show-list7').style.display === "none") {
    document.getElementById('show-list7').style.display = "block";
  } else {
    document.getElementById('show-list7').style.display = "none";
  }
    if (document.getElementById('show-list8').style.display === "none") {
    document.getElementById('show-list8').style.display = "block";
  } else {
    document.getElementById('show-list8').style.display = "none";
  }



 }
   function showList3() {
    if (document.getElementById('show-list9').style.display === "none") {
    document.getElementById('show-list9').style.display = "block";
  } else {
    document.getElementById('show-list9').style.display = "none";
  }
  
 }

</script>



<!-- -------XXXX-----------Script for Sidebar li display on click----------XXX-- -->



