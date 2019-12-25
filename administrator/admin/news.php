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
                            <h1>News </h1>
                            <small>News  List</small>
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
                                                <h4>View News </h4>
                                            </a>

                                        </div>
                                    </div>




                                    <div class="panel-body">
                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group">
                                            <div class="buttonexport" id="buttonlist">
                                                <a class="btn btn-add" href="newsadd.php"> <i class="fa fa-plus"></i> Add News 
                                                </a>

                                                

                                            </div>


                                       
                                        </div> 



                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->

                                        <div class="table-responsive">


                                             

                                            <table style="text-transform: capitalize;" id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr.No</th>
                                                         <th>Image</th>
                                                         <th>News Category</th>
                                                         <th>Title</th>
                                                       
                                                      <th>Priority</th>
                                                         <th>Taluka</th>
                                                          <th>Posted By</th>
                                                          <th>Date</th>
                                                          <th>Add Photo</th>
                                                          <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM news WHERE id=".$_GET['del']);

}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM news");

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

                                
    <td><img width="50px" src="../../images/news/'.$row['img'].'" /></td>
    <td>'.$row['newscategory'].'</td>
  <td>'.$row['title'].'</td>

 <td>'.$row['priority'].'</td> 
 <td>'.$row['taluka'].'</td>
  <td>'.$row['postedby'].'</td> 
  <td>'.$row['datee'].'</td>
                                  
                               

<td> <a href="newsaddphoto.php?q='.$row['id'].'"><b>Add Images</b></a></td>

                                       <td>



                                        <a href="">

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

      <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("datatable");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[2];
                                if (td) {
                                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                                        tr[i].style.display = "";
                                    } else {
                                        tr[i].style.display = "none";
                                    }
                                }
                            }
                        }
                    </script>
                <?php 
include "footer.php";
?>