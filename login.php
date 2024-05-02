
<style>
      .divider:after,
    .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
}
</style>
<div class="body-wrapper">
<?php 
require_once "includes/header.php";

?>

    <!-- sidebar.php -->
    
    <?php require_once "includes/sidebar.php" ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- navbar.php -->
      <?php require_once "includes/navbar.php" ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="card">
            <section class="vh-90">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="images/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form action="login_data.php" method="post">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form1Example13" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example13">Email address</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
                  <label class="form-label" for="form1Example23">Password</label>
                </div>

                <div class="d-flex justify-content-around align-items-center mb-4">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                  </div>
                  <a href="#!">Forgot password?</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>

                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                  role="button">
                  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>
                
                

              </form>
            </div>
          </div>
        </div>
      </section>
            </div>
        </main>
        <!-- footer.php -->
        <?php require_once "includes/footer.php" ?>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->

  <!-- footer_bottom.p -->
  <?php require_once "includes/footer_bottom.php" ?>




