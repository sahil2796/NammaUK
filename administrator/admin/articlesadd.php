<?php
 error_reporting(0);
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}

?>

    <!DOCTYPE html>
    <html lang="en">


<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  





  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>




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
include "header.php";    
?>

                    <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
 
                        <section class="content-header">
                            <div class="header-icon">
                                <i class="fa fa-users"></i>
                            </div>

                          

                                <div class="header-title">
                                    <h1>Add Article's Data</h1>
                                    <small>Article's Data list</small>
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
                              <i class="fa fa-list"></i>  Articles  </a>  
                           </div>
                        </div>
                        <div class="panel-body">





<?php



include('../db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

    move_uploaded_file($_FILES["image"]["tmp_name"],"../../images/articles/" . $_FILES["image"]["name"]);
 

  $articlescategory=$_POST['articlescategory'];
  $title=$_POST['title'];
  $sdescription=$_POST['sdescription'];
  $ldescription=$_POST['ldescription'];

  $priority=$_POST['priority']; 

  $img=$_FILES["image"]["name"];
  $postedby=$_POST['postedby'];

$datee=date("d-m-Y");
 
            $save=mysqli_query($con,"INSERT INTO articles (articlescategory,title,sdescription,ldescription,priority,img,postedby,datee) VALUES ( '$articlescategory','$title','$sdescription','$ldescription','$priority','$img','$postedby','$datee')");

      ?>
                <script>
                alert('Successfully Inserted...');
                window.location.href='articles.php';
                </script>
                <?php              
    }
?>
 



 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   



  <div class="form-group">
                                 <label>Articles Category</label>
                                 <select name="articlescategory" class="form-control">
                                     <option >Select Category of Articles</option>    
     <?php

                                                    include"../db.php";

$result = mysqli_query($con,"SELECT * FROM articlescategory");
while($row = mysqli_fetch_array($result))
{

echo '


          <option value="' .$row['type'].'">' .$row['type'].'</option>
      
';
} 
?>

                                 </select>
                              </div>



   <div class="form-group">
                                 <label>Image</label>
                                     <input type="file" class="fileinput btn-add" name="image" />
                                                <span class="help-block">Choose Image </span>
                              </div>







                              <div class="form-group">
                                 <label>Title</label>
                                 <input type="text" name="title" class="form-control" placeholder="Enter News Title" required>
                              </div>

                              <div class="form-group">
                                 <label>Short Description</label>
                                

                                   <textarea class="form-control" name="sdescription" id="text">Enter Short Description</textarea>
    <script>
        CKEDITOR.replace( 'text' );
    </script>

                              </div>

                               <div class="form-group">
                                 <label>Long Description</label>
                                     <textarea class="form-control" name="ldescription" id="text2">Enter Long Description</textarea>
    <script>
        CKEDITOR.replace( 'text2' );
    </script>
                              </div>




                                   <div class="form-group">
                                 <label>Priority</label>
                                 <select name="priority" class="form-control">
                                  <option >Select Priority of Articles</option>         
 <option value="High">  High </option> 
 <option value="Medium">  Medium </option>
 <option value="Low">  Low   </option>
                                       
                                 </select>
                              </div>




                              <div class="form-group">
                                 <label>Posted By</label>
                                 <input type="text" name="postedby" class="form-control" placeholder="Articles Posted By" required>
                              </div>
                            

 



  <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="save" value="Add Articles" />

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