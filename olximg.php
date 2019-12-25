<?php include "allcss.php" ?>

     <body class="page-template-default page page-id-1675 page-child parent-pageid-15 bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btStandardHeadline btContentOverHeadline btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btNoSidebar ">

   <div class="btPageWrap" id="top">

            <?php include "header.php" ?>

                <div class="btContentWrap btClear">

                    <div class="btContentHolder">

                        <div class="btContent">
                            <div class="bt_bb_wrapper">
                                <section id="bt_section5c83f7ed66693" class="boldSection btDivider inherit">
                                  



                                                  

                                                                        <div class="rowItem rowInnerItem col-sm-12  btTextLeft inherit btDoublePadding">
                                                                            <div class="rowItemContent">
                                                                               <div class="btClear btSeparator topSemiSpaced noBorder">
                                                                                    <hr>
                                                                                </div>
                                                                                <header class="header btClear large  regular">

                                                                                    <div class="dash">
                                                                                        <h2><span class="headline">Add Multiple  Photos</span></h2></div>

                                                                                </header>
                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                    <hr>
                                                                                </div>






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
    $targetDir = "images/olx/";
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
            $insert = $db->query("INSERT INTO olximages (idd,file_name, uploaded_on) VALUES $insertValuesSQL");
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





                                                                                <div class="btText">
                                                                                   <form  style="margin: 0px auto 0px;" action="" method="post" enctype="multipart/form-data"  class="col-md-4 col-md-offset-3">
   



    <input type="hidden" name="idd" value="<?php echo $abc ?>">


    <div class="form-group">
         <label> Select Multiple Image Files to Upload:</label>
         <input type="file" class="fileinput btn-add" name="files[]" multiple>
             <span class="help-block">Choose Image </span>
         </div>
    <div class="col-md-12 text-center">
       <input style="    background-color: #dc0003;
    color: white;" class="btn btn-add" type="submit" name="submit" value="Upload" />
    </div>

</form>
                                                                                </div>
                                                                                <div class="btClear btSeparator topMediumSpaced bottomMediumSpaced border">
                                                                                    <hr>
                                                                                </div> 
                                                                               



</div></div>


</section></div></div></div></div> 

    





                                  






 <section id="bt_section5c83f7ed69016" class="boldSection topSemiSpaced bottomMediumSpaced gutter boxed inherit" style="background-color:#f1f1f1  !important;">
                            <div class="port">
                                <div class="boldCell">
                                    <div class="boldCellInner">
                                        <div class="boldRow ">
                                            <div class="boldRowInner">
                                               



                                                <?php

  include "db.php";

if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM olximages WHERE id=".$_GET['del']);


      ?>
                <script>
                alert('Successfully Deleted...');
                window.location.href='olximg.php';
                </script>
                <?php       


}
/* code for data delete */
$result = mysqli_query($con,"SELECT * FROM olximages where idd=$abc");



while($row = mysqli_fetch_array($result))
{

echo '       <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft animate animate-fadein inherit" data-width="3">
                                                    <div class="rowItemContent">



                                                        <header class="header btClear medium  regular">
                                                            <div class="dash">
<img width="200px" src="images/olx/'.$row['file_name'].'" />

                                                              
                                                       <!--    <a  class="delete" href="?del='.$row['id'].'">Delete</a>
                                                       --> </header>
                                                       



                                                        



                                                       
                                                        <div class="btClear btSeparator topMediumSpaced noBorder">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                        

                                    

                                       

';
}
?>
                                           
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                                  

 <?php include "footer.php" ?></div>



        <?php include "allscript.php" ?>

    </body>

    </html>