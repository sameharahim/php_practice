<?php require_once "includes/database1.php";?>


<div class="body-wrapper">
<?php require_once "includes/header.php" ?>
    <!-- sidebar.php -->
    
    <?php require_once "includes/sidebar.php" ?>

    <?php
    $id=$_GET['id'];
    $select_employee = "SELECT * FROM emplyees WHERE id='$id'";
    $select = mysqli_query($database_connect,$select_employee);
    $after_assoc = mysqli_fetch_assoc($select);

    $all_departments = "SELECT * FROM departments";
    $departments = mysqli_query($database_connect,$all_departments);
    ?>
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
               <form action="update_emplyee.php" method="post">
               <input type="hidden" name="id" value="<?= $after_assoc['id']?>">
          <div class="mb-3">
               <label for="name" class="form-label">First name</label>
               <input value ="<?= $after_assoc['first_name']?>"name="Firstname"  class="form-control" type="text">
          <div class="mb-3">
               <label for="name" class="form-label">Last name</label>
               <input value ="<?= $after_assoc['last_name']?>" name="Last_name"  class="form-control" type="text">
          </div>
          <div class="mb-3">
               <label for="email" class="form-label">Email</label>
               <input value ="<?= $after_assoc['email']?>"  name="Email"  class="form-control" type="email">
          </div>
          <div class="mb-3">
               <label for="password" class="form-label">password</label>
               <input value = "<?= $after_assoc['password']?>" name="password"  class="form-control" type="password">
          </div>

          <div class="mb-3">
          <label for="Gender">Gender</label>
          <br>
          <input type="radio"  name="gender" value="male" class="form-check-input" <?php if($after_assoc['gender'] == 'male'){
               echo "checked";
          } ?>>Male
          <input type="radio" name="gender" value="female" class="form-check-input" <?php if($after_assoc['gender'] == 'female'){
               echo "checked";
          } ?>>Female
          <input type="radio" name="gender" value="other" class="form-check-input" <?php if($after_assoc['gender']=='other'){
               echo "checked";
          } ?>>Other
          </div>

          <div>
          <label for="Department">Department</label>
          <select class="form-select mb-3" name="Department" id="">
               <?php 
                    foreach($departments as $department):
               ?>
               <?php
               if($department['departmrnt_name']== $after_assoc['deparment']){
               ?>
                    <option selected value="<?=$department['department_name'];?>"><?=$department['department_name'];?></option>
               <?php
               }
               else{
                    ?>
                    <option value="<?=$department['department_name'];?>"><?=$department['department_name'];?></option>
               <?php
               }
               ?>
          
               <?php 
                    endforeach;
               ?>
          </select>
          </div>


          <!-- <div class="mb-3">
               <label for="message" class="form-label">Message</label>
               <input  class="form-control" type="message">
          </div> -->




     <button class="btn btn-outline-danger form-control"> sign up</button>
     </form>
               </div>
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
    
    
    
   

   
     


