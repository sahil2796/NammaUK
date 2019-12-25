

  <!DOCTYPE html>
<html lang="en">

      <?php 
include"allcss.php";    
?>
   <body class="hold-transition sidebar-mini">
   <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
         <?php 
include"header.php";    
?>


 <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-users"></i>
               </div>
               <div class="header-title">
                  <h1>Add News Category</h1>
                  <small>News Category list</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="category.php"> 
                              <i class="fa fa-list"></i>  News Category List </a>  
                           </div>
                        </div>
                        <div class="panel-body">



  


     <?php
include('../db.php');
if(isset($_POST['save']))
{
   

           
             $type=$_POST['type'];
           
                    

             $save=mysqli_query($con,"INSERT INTO newscategory (type) VALUES ('$type')");

   ?>
                <script>
                alert('Successfully Inserted...');
                window.location.href='newscategory.php';
                </script>
                <?php

                   
    }
?>

 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  


                              <div class="form-group">
                                 <label>Category Name </label>
                                 <input type="text" name="type" class="form-control" placeholder="Enter Category Name" required>
                              </div>
                            

                            <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="save" value="Save" />

                              </div>


                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
        


       <?php 
include "footer.php";
?>

