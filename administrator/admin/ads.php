<!DOCTYPE html>
<html lang="en">

<?php 
include"allcss.php";    
?>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function() {
            $("a.delete").click(function(e) {
                if (!confirm('Are you sure?')) {
                    e.preventDefault();
                    return false;
                }
                return true;
            });
        });
    </script>

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
                            <h1>Ads </h1>
                            <small>Ads  List</small>
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
                              <i class="fa fa-list"></i>  Add Ads  </a>  
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

    move_uploaded_file($_FILES["image"]["tmp_name"],"../../images/ads/" . $_FILES["image"]["name"]);
 

  
  $url=$_POST['url'];
 
  $img=$_FILES["image"]["name"];

 
            $save=mysqli_query($con,"INSERT INTO ads (url,img) VALUES ('$url','$img')");

      ?>
                <script>
                alert('Successfully Inserted...');
                window.location.href='ads.php';
                </script>
                <?php              
    }
?>
 



 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   







   <div class="form-group">
                                 <label>Image</label>
                                     <input type="file" class="fileinput btn-add" name="image" />
                                                <span class="help-block">Choose Image </span>
                              </div>







                              <div class="form-group">
                                 <label>Url</label>
                                 <input type="text" name="url" class="form-control" placeholder="Enter Ads Url" required>
                              </div>

                        




  <div class="col-md-12 text-center">
                                 <input class="btn btn-add" type="submit" name="save" value="Add" />

                              </div>


                          
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </section>



                    <section class="content">


                    









                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                              <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href=""> 
                              <i class="fa fa-list"></i>  View Ads  </a>  
                           </div>

                                        </div>
                                    </div>




                                    <div class="panel-body">
                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group">
                                            <div class="buttonexport" id="buttonlist">
                                             
                                                

                                            </div>


                                       
                                        </div> 



                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">


                                             

                                            <table style="text-transform: capitalize;" id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr.No</th>
                                                         <th>Image</th>
                                                        
                                                         <th>URL</th>
                                                      
                                                          
                                                          <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM ads WHERE id=".$_GET['del']);

}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM ads");

 $tmpCount = 1;

while($row = mysqli_fetch_array($result))
{

echo '     <tbody>

                                    <tr>

                                         ';?>
                                                    <td>
                                                        <?php echo $tmpCount++ ?>
                                                    </td>
                                                    <?php echo '

                                
    <td><img width="600px" src="../../images/ads/'.$row['img'].'" /></td>
    
  <td>'.$row['url'].'</td>

                                    
                                       <td>
                                        

                                         <a  class="delete" href="?del='.$row['id'].'"> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button> </a>
                                       </td> 

                                    </tr>

                                        </tbody>

';
}
?>

                                            </table>
                                        </div>
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