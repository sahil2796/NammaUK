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
                            <h1>Business Listing Sub Category</h1>
                            <small>Business Listing Sub Category List</small>
                        </div>
                    </section>
                    <!-- Main content -->






                    <section class="content">


                    









                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                            <a href="#">
                                                <h4>View Business Listing  Sub Category</h4>
                                            </a>


                                        </div>
                                    </div>




                                    <div class="panel-body">
                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group">
                                            <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="bisubcategoryadd.php"> <i class="fa fa-plus"></i> Add Business Listing  Sub Category
                                                </a>

                                                

                                            </div>


                                       
                                        </div> 



                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">


                                             

                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr.No</th>
                                                        <th>Sub Category Name</th>
                                                       <th>Main Category Id</th>
                                                      
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM bisubcategory WHERE id=".$_GET['del']);

}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM bisubcategory");

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

                                

  <td>'.$row['subcategory'].'</td>
  <td>'.$row['maincatid'].'</td>

                                    
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