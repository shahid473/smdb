


<?php  include 'docs/header.php'; ?>





<div class="container my-5">
<div class="row justify-content-center">
<div class="col-md-4 mainform py-4">
<h3>Login to your account.</h3>
<form >
  <div class="form-group mb-3 py-1">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp" placeholder="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group mb-3 py-1">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control " id="exampleInputPassword1" placeholder="*******@">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label " for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary my-4" style="width: 150px;">Login</button>
  <span><a class="btn" href="#"> Forgot Password?</a></span>


</form>



<div class="col-12 card text-light text-center mt-4 py-3 sign-opt-facebook">
  <a class="text-light" href="#"><h2 class="fs-6 m-0">Sign in with Facebook</h2></a>
</div>
<div class="col-12 card bg-danger text-light text-center mt-4 py-3 sign-opt-twitter">
  <a class="text-light" href="#"><h2 class="fs-6 m-0">Sign in with Twitter</h2></a>
</div>
<div class="col-12 card bg-info text-light text-center mt-4 py-3 sign-opt-apple">
  <a class="text-light" href="#"><h2 class="fs-6 m-0">Sign in with Apple</h2></a>
</div>






</div>
</div>

</div>



<?php include 'docs/footer.php'; ?>

