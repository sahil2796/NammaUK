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
                            <h1>Articles Category</h1>
                            <small>Articles Category List</small>
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
                                                <h4>View Articles Category</h4>
                                            </a>


                                        </div>
                                    </div>




                                    <div class="panel-body">
                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group">
                                            <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="articlescategoryadd.php"> <i class="fa fa-plus"></i> Add Articles Category
                                                </a>

                                                

                                            </div>


                                       
                                        </div> 



                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">


                                             

                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr.No</th>
                                                        <th>Category Name</th>
                                                       
                                                      
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM articlescategory WHERE id=".$_GET['del']);

}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM articlescategory");

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

                                

  <td>'.$row['type'].'</td>

                                    
                                       <td>
                                        <a href="articlescategoryedit.php?edit='.$row['id'].'">

                                          <button style="    background: #009688;
    color: #fbfbfb !important;
    border: 1px solid #009688;" type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
</a>

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