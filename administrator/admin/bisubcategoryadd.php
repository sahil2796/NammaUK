

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
                  <h1>Add Business Listing  Sub Category</h1>
                  <small>Business Listing Sub Category list</small>
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
                              <i class="fa fa-list"></i>  Business Listing Sub Category List </a>  
                           </div>
                        </div>
                        <div class="panel-body">



  


     <?php
include('../db.php');
if(isset($_POST['save']))
{
   

             $maincatid=$_POST['maincatid'];   
             $subcategory=$_POST['subcategory'];
           
                

             $save=mysqli_query($con,"INSERT INTO bisubcategory (maincatid,subcategory) VALUES ('$maincatid','$subcategory')");

   ?>
                <script>
                alert('Successfully Inserted...');
                window.location.href='bisubcategoryview.php';
                </script>
                <?php

                   
    }
?>

 <form  action="" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
   
  

                              <div class="form-group">
                                 <label>Main Category  </label>
                               

                               <select class="form-control" name="maincatid">
<option value disabled selected>Select Main Category of Business Listing</option>
      <?php

include"db.php";



$result = mysqli_query($con,"SELECT * FROM bimaincategory ");

while($row = mysqli_fetch_array($result))
{
echo '
<option value="'.$row['id'].'">'.$row['category'].'</option>
'; }
?>

</select>


                                
                              </div>
                            

                              <div class="form-group">
                                 <label>Sub Category  </label>
                                 <input type="text" name="subcategory" class="form-control" placeholder="Enter Sub Category Name" required>
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

