<?php 
session_start();
?>
<?php

    require_once "includes/database1.php";
    require_once "includes/auth_check.php";
    
?>
<?php
 $select_query= "SELECT * FROM emplyees WHERE delete_status = 1";
 $emplyees = mysqli_query($database_connect,$select_query);
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
     <div class="col-md-12">
         <table id="myTable" class="table table-bordered text-center">
             <thead class="bg-success">
                 <tr>
                    <th>Serial</th>
                     <th>id</th>
                     <th> firstname</th>
                     <th>Lastname</th>
                     <th>Email</th>
                     <th>gender</th>
                     <th>Department</th>
                     <th>Action</th>
                 </tr>
             </thead>
             <tbody>
                      
                 <?php foreach ($emplyees as $emplyee):  ?>
                 <tr>
                    <td><?Php $serial++?></td>
                     <td><?php echo $emplyee['id'] ?></td>
                     <td><?php echo $emplyee['first_name'] ?></td>
                     <td><?php echo $emplyee['last_name'] ?></td>
                     <td><?php echo $emplyee['email'] ?></td>
                     <td>
                        <?php 
                        if($emplyee['gender'] == 'male' ){
                            echo "male";
                        }
                        else if($emplyee['gender'] == 'female'){
                           echo "female";
                        }
                        else{
                            echo "other";
                        }
                            
                        ?>
                     </td>
                     <td>
                        <?php 
                            if($emplyee['department'] =='CSE' ){
                                    echo "CSE";
                                }
                                else if($emplyee['department'] == 'EEE' ){
                                    echo "EEE";
                                }
                            else{
                                    echo"LLB";
                            } 

                            ?></td>
                            <td>
                                <a href="edit_data.php?id=<?php echo $emplyee['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                                <button href="delete_data.php?id=<?php echo $emplyee['id']?>" class="btndelete btn btn-danger btn-sm">DELETE</button>
                            </td>
                     
                 </tr>
                 <?php endforeach;  ?>
             </tbody>
         </table>
     </div>
 </div>
</div>
        </main>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(".btndelete").on("click",function(){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
            if (result.isConfirmed) {
               var linktoGo = $(this).val();
               window.location.href = linktoGo;
            }
            })
        })
    });
</script>


        <!-- footer.php -->
        <?php require_once "includes/footer.php" ?>
        <!-- partial -->
      </div>
    </div>
  </div>
  <!-- plugins:js -->

  <!-- footer_bottom.p -->
  <?php require_once "includes/footer_bottom.php" ?>












       