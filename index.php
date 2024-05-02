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
          <!-- <?php if(isset($_SESSION['user'])){
            echo $_SESSION['user'];
          } ?> -->
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