<footer class="text-center text-light pt-4">
<div class="container-fluid">
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-2 logo-name"><img src="assets/img/logo.png" alt="The Movie Database (TMDb)" class="my-3" width="178px" height="50px">
    <a href="#" class="btn btn-light">Join The Community</a>
</div>
    <div class="col-md-2">
        <h3>THE BASICS</h3>
        <a class="d-block" href="aboutus.php">About SMDB</a>
        <a class="d-block" href="contact-us.php">Contact Us</a>
        
        
    </div>
<div class="col-md-2"><h3>GET INVOLVED</h3>
<a href="#" class="d-block">Contribution Bible</a>

<a href="#" class="d-block">Add New Movie</a>
<a href="#" class="d-block">Add New Tv Show</a>
</div>
<div class="col-md-2"><h3>LEGAL</h3>
<a href="terms-of-uses.php" class="d-block">Terms of Use</a>
<a href="privacy-policy.php" class="d-block">Privacy policy</a>
</div>
<div class="col-md-2"></div>
</div>
</div>

<p class="text-center mb-0 text-muted fs-6">Developed by <a target="_blank" href="https://www.freelancer.com/u/toshinislam"> <b>Toshin Islam</b></a></p>
</footer>











    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>



<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta/dist/js/i18n/defaults-*.min.js"></script>










<!-- custom js -->
<script>
  // TO make bootstrap dropdown on hover

$(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});     
</script>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>



  </body>
</html>
