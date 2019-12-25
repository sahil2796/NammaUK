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
                  <h1>Edit Business Listing Category</h1>
                  <small>Business Listing Category list</small>
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
                              <a class="btn btn-add " href=""> 
                              <i class="fa fa-list"></i>  Business Listing Category List </a>  
                           </div>
                        </div>
                        <div class="panel-body">





<?php
include "../db.php";

// EDIT 
if(isset($_GET['edit']))
{
$result = mysqli_query($con,"SELECT * FROM bimaincategory WHERE id=".$_GET['edit']);
$getROW = $result->fetch_array();
}


// UPDATE
if(isset($_POST['update']))
{
$result = mysqli_query($con,"UPDATE bimaincategory SET category='".$_POST['category']."'
 WHERE id=".$_GET['edit']);


  ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='bicategoryview.php';
                </script>
                <?php


}



?>
                     

 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  


                              <div class="form-group">
                                 <label>Category</label>
                                 <input type="text" name="category" class="form-control" value="<?php if(isset($_GET['edit'])) echo $getROW['category'];  ?>" placeholder="Enter BI Category" required>
                              </div>
                            
    <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="update" value="Update" />

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

