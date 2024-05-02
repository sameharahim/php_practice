<?php 
session_start();
?>

<?php
     
     require_once "includes/database1.php";
     require_once "includes/auth_check.php"; 
     $all_department = "SELECT * FROM departments";
     $departments = mysqli_query($database_connect,$all_department);
    ?>



<div class="body-wrapper">
<?php require_once "includes/header.php" ?>
    <!-- sidebar.php -->
    
    <?php require_once "includes/sidebar.php" ?>
    <!-- partial -->
    <div class="main-wrapper mdc-drawer-app-content">
      <!-- navbar.php -->
      <?php require_once "includes/navbar.php" ?>
      <!-- partial -->
      <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
            <form action="registration_1.php" method="post">
       <div class="mb-3">
            <label for="name" class="form-label">First name</label>
            <input name="Firstname"  class="form-control" type="text">
       <div class="mb-3">
            <label for="name" class="form-label">Last name</label>
            <input  name="Lastname"  class="form-control" type="text">
       </div>
       <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="Email"  class="form-control" type="email">
       </div>
       <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input name="password"  class="form-control" type="password">
       </div>

       <div class="mb-3">
        <label for="Gender">Gender</label>
        <br>
        <input type="radio"  name="gender" value="male" class="form-check-input"> Male
        <input type="radio" name="gender" value="female" class="form-check-input"> Female
        <input type="radio" name="gender" value="other" class="form-check-input"> Other
        </div>

        <div>
          <label for="">User Type</label>
          <select name="user_type" id="">
               <option value="user">User</option>
               <option value="">Admin</option>
               <option value="">User</option>
          </select>
          
        </div>

       <div>
       <label for="Department">Department</label>
       <select name="department" class="form-control my-3">
          <?php
               foreach($departments as $department):
          ?>
          <option value="<?= $department['department_name']?>"><?= $department['department_name']?></option>
          <?php
               endforeach;
          ?>
        </select>
       </div>
       <button class="btn btn-outline-danger form-control"> sign up</button>
    </form>
            </div>
        </div>
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




    
   
    

<!-- user_tye=> defult=>user -->

    

