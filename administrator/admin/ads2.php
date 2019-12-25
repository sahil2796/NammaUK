<!DOCTYPE html>
<html lang="en">

<?php 
include"allcss.php";    
?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
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








<div id="imageModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <form method="POST" id="edit_image_form">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h4 class="modal-title">Edit Image Details</h4>
    </div>
    <div class="modal-body">
     <div class="form-group">
      <label>Image Name</label>
      <input type="text" name="imagename" id="imagename" class="form-control" />
     </div>
     <div class="form-group">
      <label>Image Description</label>
      <input type="text" name="description" id="description" class="form-control" />
     </div>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="id" id="id" value="" />
     <input type="submit" name="submit" class="btn btn-info" value="Edit" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </form>
  </div>
 </div>
</div>

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
                     <div style="    margin-bottom: 25px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);" class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href=""> 
                              <i class="fa fa-list"></i>  Add Ads  </a>  
                           </div>
                        </div>
                        <div class="panel-body">




 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   



   <div class="form-group">
                                 <label>Choose Multiple Image</label>
                                       <input type="file" name="multiple_files" id="multiple_files" multiple />
  
                                                <span id="error_multiple_files" class="help-block">Choose Image </span>
                              </div>



</form>
</div>

</div></div></div></section>







                    <section class="content">

   <div class="row">
                            <div class="col-sm-12">
                                <div  style="    margin-bottom: 25px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);" class="panel panel-bd lobidrag">
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




   <div class="table-responsive" id="image_table">
    
   </div>
 

                                    </div>
                                </div>
                            </div>
                       
                          
                        </div>













                    </section>
                    <!-- /.content -->
                </div>

<script>
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:"adsimg/fetch.php",
   method:"POST",
   success:function(data)
   {
    $('#image_table').html(data);
   }
  });
 } 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 2000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"adsimg/upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  
 $(document).on('click', '.edit', function(){
  var id = $(this).attr("id");
  $.ajax({
   url:"adsimg/edit.php",
   method:"post",
   data:{id:id},
   dataType:"json",
   success:function(data)
   {
    $('#imageModal').modal('show');
    $('#id').val(id);
    $('#imagename').val(data.imagename);
    $('#description').val(data.description);
   }
  });
 }); 
 $(document).on('click', '.delete', function(){
  var id = $(this).attr("id");
  var imagename = $(this).data("imagename");
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"adsimg/delete.php",
    method:"POST",
    data:{id:id, imagename:imagename},
    success:function(data)
    {
     load_image_data();
     alert("Image removed");
    }
   });
  }
 }); 
 $('#edit_image_form').on('submit', function(event){
  event.preventDefault();
  if($('#imagename').val() == '')
  {
   alert("Enter Image Name");
  }
  else
  {
   $.ajax({
    url:"adsimg/update.php",
    method:"POST",
    data:$('#edit_image_form').serialize(),
    success:function(data)
    {
     $('#imageModal').modal('hide');
     load_image_data();
     alert('Image Details updated');
    }
   });
  }
 }); 
});
</script>

      <?php 
include "footer.php";
?>
</div>

 </body>
</html>


