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
                            <h1>Business Listing</h1>
                            <small>Business Listing List</small>
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
                                                <h4>View Business Listing</h4>
                                            </a>


                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <!-- Plugin content:powerpoint,txt,pdf,png,word,xl -->
                                        <div class="btn-group">
                                           

                                           <div class="buttonexport" id="buttonlist">
                                              

                                                   <input  type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search By Business Name " title="Type in a name">


                                            </div>

                                         
                                        </div> 


   <div class="table-responsive">



<?php 
//$db= new mysqli('148.72.232.171:3306','nammauk','loveyoudad9820102993','nammauk');

$db= new mysqli('localhost','root','','nammauk'); 
 ?>





                                            <table id="datatable" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr class="info">
                                                        <th>Sr.No</th>
                                                        <th>Main Category Id</th>
                                                        <th>SubCategory</th>
                                                        <th>Business Name</th>
                                                        <th>Address </th> 

                                                        <th>Contact Person</th>
                                                        <th>Mobile </th>
<th>Email id</th>

                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                            


                                               <tbody>



                                                  <?php

                                                    include"../db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM bicategory WHERE id=".$_GET['del']);

}

?>


                                   <?php $sql=$db->query("Select * from bicategory");
 $tmpCount = 1;
            foreach ($sql as $key => $user) :

              
        ?>
        <tr>
 <td>  <?php echo $tmpCount++ ?> </td>
            <td><?php echo $user['maincatid']; ?></td>
         
            <td><?php echo $user['subcategory']; ?></td>
                  <td><?php echo $user['businessname']; ?></td>
                    <td><?php echo $user['street'], $user['area'], $user['landmark'], $user['taluka'],  $user['city'], $user['pincode']; ?></td>
                          <td><?php echo $user['contactperson']; ?></td>

 <td><?php echo $user['mobile']; ?></td> <td><?php echo $user['emailid']; ?></td>

            <td><span data="<?php echo $user['id'];?>" class="status_checks btn <?php echo ($user['status'])? 'btn-add' : 'btn-primary'?>"><?php echo ($user['status'])? 'Active' : 'Inactive'?></span></td>






    <td>
      <?php echo '
  <a href="businesslistingedit.php?edit='.$user['id'].'">
   <button style="    background: #009688;
    color: #fbfbfb !important;
    border: 1px solid #009688;" type="button" class="btn btn-add btn-sm"><i class="fa fa-pencil"></i></button>
  </a>

  <a  class="delete" href="?del='.$user['id'].'"> 
  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#customer2"><i class="fa fa-trash-o"></i> </button>
   </a>
       
        </td> 

'; ?>











        </tr>
       <?php endforeach; ?>

                                        </tbody>








                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.modal -->
                    </section>
                    <!-- /.content -->
                </div>





<!-- ACTIVE AND INACTIVE KA CODE -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-add")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
  var current_element = $(this);
  url = "businesslistingactivate.php";
  $.ajax({
  type:"POST",
  url: url,
  data: {id:$(current_element).attr('data'),status:status},
  success: function(data)
    {   
      location.reload();
    }
  });
  }      
});
</script>

     <!-- ACTIVE AND INACTIVE KA CODE -->       


 <!-- SEARCH KA CODE -->       

      <script>
                        function myFunction() {
                            var input, filter, table, tr, td, i;
                            input = document.getElementById("myInput");
                            filter = input.value.toUpperCase();
                            table = document.getElementById("datatable");
                            tr = table.getElementsByTagName("tr");
                            for (i = 0; i < tr.length; i++) {
                                td = tr[i].getElementsByTagName("td")[3];
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
                     <!-- SEARCH KA CODE -->   
                <?php 
include "footer.php";
?>