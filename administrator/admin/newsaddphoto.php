<?php
 error_reporting(0);
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}

?>


<!DOCTYPE html>
<html>

<head>
   
    <?php 
include"allcss.php";    
?>
</head>

    <body class="hold-transition sidebar-mini">






    <?php
if(isset($_POST['submit'])){
    
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "nammauk";

//$dbHost     = "148.72.232.171:3306";
//$dbUsername = "nammauk";
//$dbPassword = "loveyoudad9820102993";
//$dbName     = "nammauk";


// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

    // File upload configuration
    $targetDir = "../../images/news/";
    $allowTypes = array('jpg','png','jpeg','gif');

    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files']['name']))){
        foreach($_FILES['files']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
             $idd=$_POST['idd'];

            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                    // Image db insert sql

                    $insertValuesSQL .= "('".$idd."','".$fileName."', NOW()),";
                }else{
                    $errorUpload .= $_FILES['files']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files']['name'][$key].', ';
            }
        }

        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $db->query("INSERT INTO newsimages (idd,file_name, uploaded_on) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;
            }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }

    // Display status message
    echo $statusMsg;
}
?>


<?php $abc = $_GET['q'] ?>


            <!--preloader-->
            <div id="preloader">
                <div id="status"></div>
            </div>
            <!-- Site wrapper -->
            <div class="wrapper">
                <?php 
include "header.php";    
?>   <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
 
                        <section class="content-header">
                            <div class="header-icon">
                                <i class="fa fa-users"></i>
                            </div>

                          

                                <div class="header-title">
                                    <h1>Add Photo's and Video's </h1>
                                    <small>Photo's and Video's list</small>
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
                              <a class="btn btn-add " href="employee.php"> 
                              <i class="fa fa-list"></i> Choose Photo </a>  
                           </div> 
                        </div>
                        <div class="panel-body">





 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   
    <input type="hidden" name="idd" value="<?php echo $abc ?>">
    <div class="form-group">
         <label> Select Image Files to Upload:</label>
         <input type="file" class="fileinput btn-add" name="files[]" multiple>
             <span class="help-block">Choose Image </span>
         </div>
    <div class="col-md-12 text-center">
       <input class="btn btn-add" type="submit" name="submit" value="Upload" />
    </div>

</form>

    
</div>

</div></div></div>
 </section>
















                    <section class="content">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                              <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href=""> 
                              <i class="fa fa-list"></i>  View Images of News  </a>  
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
                                                      
                                                         <th>Image</th>
                                                        
                                                       
                                                          
                                                          <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <?php

  include"../db.php";

if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM newsimages WHERE id=".$_GET['del']);


      ?>
                <script>
                alert('Successfully Deleted...');
                window.location.href='news.php';
                </script>
                <?php       


}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM newsimages where idd=$abc");



while($row = mysqli_fetch_array($result))
{

echo '     <tbody> <tr> 

                                
    <td><img width="200px" src="../../images/news/'.$row['file_name'].'" />  





    </td> 
  


                                    
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









              
     
   <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href="employee.php"> 
                              <i class="fa fa-list"></i> Choose Video </a>  
                           </div> 
                        </div>
                        <div class="panel-body">






<?php $conn = new PDO ('mysql:host=localhost; dbname=nammauk', 'root', ''); ?>
  <?php
                            if(isset($_FILES['file'])){
                            
                                $name = $_FILES['file']['name'];
                                $extension = explode('.', $name);
                                $extension = end($extension);
                                $type = $_FILES['file']['type'];
                                $size = $_FILES['file']['size'] /1024/1024;
                                $random_name = rand();
                                $tmp = $_FILES['file']['tmp_name'];
                                
                                 $idd=$_POST['idd'];


                                
                                if ((strtolower($type) != "video/mpg") && (strtolower($type) != "video/wma") && (strtolower($type) != "video/mov") 
                                && (strtolower($type) != "video/flv") && (strtolower($type) != "video/mp4") && (strtolower($type) != "video/avi") 
                                && (strtolower($type) != "video/qt") && (strtolower($type) != "video/wmv") && (strtolower($type) != "video/wmv"))
                                {
                                    $message= "Video Format Not Supported !";

                                }else
                                {
                                    move_uploaded_file($tmp, '../../images/news/'.$random_name.'.'.$extension);    
                                  //  $conn->query("insert into videos (title,location) values ('$name','$random_name.$extension')");
                                     $conn->query("insert into newsvideos (idd,file_name) values ('$idd','$random_name.$extension')");
                                    

                                    $message="Video Uploaded Successfully!";
                                }
                                
                                ?>
                                <?php
                                echo "<script type='text/javascript'>alert('$message\\n\\nUpload: $name\\nSize: $size\\nType: $type\\nStored in: uploads/$name');</script>";
                                ?>
                                
                                <?php
                            }
                    
                        ?>

 <form  action="" method="post" enctype="multipart/form-data"  class="col-md-6 col-md-offset-3">
   
    <input type="hidden" name="idd" value="<?php echo $abc ?>">
    <div class="form-group">
         <label> Select Single Video Files to Upload:</label>
      

                    <input name="UPLOAD_MAX_FILESIZE" value="20971520"  type="hidden"/>
                    <input type="file" name="file" class="fileinput btn-add" id="file" />


             <span class="help-block">Choose Video </span>
         </div>
    <div class="col-md-12 text-center">

          <input class="btn btn-add" type="submit" value="Click to Upload" />


       
    </div>

</form>

    
</div>

</div></div></div>
 </section>







                    <section class="content">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="btn-group" id="buttonexport">
                                              <div class="btn-group" id="buttonlist"> 
                              <a class="btn btn-add " href=""> 
                              <i class="fa fa-list"></i>  View Videos of News  </a>  
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
                                                      
                                                       
                                                        
                                                        <th>Video</th>
                                                          
                                                          <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <?php

  include"../db.php";

if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM newsvideos WHERE id=".$_GET['del']);


      ?>
                <script>
                alert('Successfully Deleted...');
                window.location.href='news.php';
                </script>
                <?php       


}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM newsvideos where idd=$abc");



while($row = mysqli_fetch_array($result))
{

echo '     <tbody> <tr> 

                                
   
    <td>  <video width="200" controls>
  <source src="../../images/news/'.$row['file_name'].'" type="video/mp4">
  <source src="mov_bbb.ogg" type="video/ogg">
  Your browser does not support HTML5 video.
</video>
 
 </td>
    


                                    
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















</div>

            <?php 
include "footer.php";
?>
</body>

</html>