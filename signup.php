


<?php  include 'docs/header.php'; ?>




<div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-4 mainform py-4">


      <h3>Sign up for an account.</h3>
    <p>Sign up on SMDB is free and easy. Fill out the form simply.</p>
<form class="text-muted" >
  <div class="form-group mb-3 py-1">
    <label for="exampleInputEmail1" >Email address <span class="text-danger">*</span></label>
    <input type="email" class="form-control" id="exampleInputEmail1 " aria-describedby="emailHelp" placeholder="eg. mewmail74@fmail.com">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group mb-3 py-1">
    <label for="exampleInputEmail1">Username <span class="text-danger">*</span></label>
    <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="mewmaim">
    
  </div>
  <div class="form-group mb-3 py-1">
    <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
  </div>
  <div class="form-group mb-3 py-1">
    <label for="exampleInputPassword1">Confirm Password <span class="text-danger">*</span></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary my-4" style="width: 150px;">Sign Up Now</button>
  <span><a class="btn" href="#"> Forgot Password?</a></span>
</form>




<div class="col-12 card text-light text-center mt-4 py-3 sign-opt-facebook">
  <a class="text-light" href="#"><h2 class="fs-6 m-0">Sign Up with Facebook</h2></a>
</div>
<div class="col-12 card bg-danger text-light text-center mt-4 py-3 sign-opt-twitter">
  <a class="text-light" href="#"><h2 class="fs-6 m-0">Sign Up with Twitter</h2></a>
</div>
<div class="col-12 card bg-info text-light text-center mt-4 py-3 sign-opt-apple">
  <a class="text-light" href="#"><h2 class="fs-6 m-0">Sign Up with Apple</h2></a>
</div>

      </div>
    </div>
</div>



<?php include 'docs/footer.php'; ?>

