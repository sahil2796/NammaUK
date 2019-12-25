<?php include "allcss.php" ?>

<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
<script>
function getState(val) {
    $.ajax({
    type: "POST",
    url: "getsubcategory.php",
    data:'maincatid='+val,
    success: function(data){
        $("#subcategory").html(data);
        getCity();
    }
    });
}



</script>


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
                                                                                        <h2><span class="headline">Business Listing Form</span></h2></div>

                                                                                </header>
                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                    <hr>
                                                                                </div>
                                                                                <div class="btText">
                                                                                    <p>Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets.Interactively procrastinate high-payoff content without backward-compatible data. Quickly cultivate optimal processes and tactical architectures. Completely iterate covalent strategic theme areas via accurate e-markets.</p>
                                                                                </div>
                                                                                <div class="btClear btSeparator topMediumSpaced bottomMediumSpaced border">
                                                                                    <hr>
                                                                                </div> 
                                                                                <div class="btText">
                                                                                    <div role="form" class="wpcf7" id="wpcf7-f4-p1675-o1" lang="en-US" dir="ltr">
                                                                                        <div class="screen-reader-response"></div>

</div></div></div></div>








    <?php
require_once("dbcontroller.php");
$db_handle = new DBController();
$query ="SELECT * FROM bimaincategory";
$results = $db_handle->runQuery($query);
?>






                                                                        <div class="rowItem rowInnerItem col-sm-6  btTextLeft inherit btDoublePadding">
                                                                            <div class="rowItemContent">
                                                                              
                                                                             
                                                                                <div class="btText">
                                                                                    <div role="form" class="wpcf7" id="wpcf7-f4-p1675-o1" lang="en-US" dir="ltr">
                                                                                       


                                                                                         <?php
include('db.php');


$result = mysqli_query($con,"SELECT * FROM bicategory ORDER BY id DESC LIMIT 1");

while($row = mysqli_fetch_array($result))

{
$newserialno = $row['id']+1;

//echo $newserialno;
}
?>





                                                                                        <?php

include('db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

    move_uploaded_file($_FILES["image"]["tmp_name"],"images/bi/" . $_FILES["image"]["name"]);

  $id=$_POST['id'];
  $maincatid=$_POST['maincatid'];
   $subcategory=$_POST['subcategory'];
$img=$_FILES["image"]["name"];

  $businessname=$_POST['businessname'];
  $landmark=$_POST['landmark'];
  $street=$_POST['street'];
  $area=$_POST['area']; 
  $taluka=$_POST['taluka'];
  $city=$_POST['city'];

    $pincode=$_POST['pincode'];
      $contactperson=$_POST['contactperson'];
        $landline=$_POST['landline'];
          $mobile=$_POST['mobile'];
            $emailid=$_POST['emailid'];
  $website=$_POST['website'];
    $hours=$_POST['hours'];
   $latitude=$_POST['latitude'];
     $longitude=$_POST['longitude'];

$save=mysqli_query($con,"INSERT INTO bicategory (id,maincatid,subcategory,img,businessname,landmark,street,area,taluka,city,pincode,contactperson,landline,mobile,emailid,website,hours,latitude,longitude) VALUES ('$id','$maincatid','$subcategory','$img','$businessname','$landmark','$street','$area','$taluka','$city','$pincode','$contactperson','$landline','$mobile','$emailid','$website','$hours','$latitude','$longitude')");

      ?>
                                                                                            <script>
                                                                                                alert('Successfully Inserted...');

                                                                                            

                                                                                                window.location.href = 'biimg.php?q=<?php echo $newserialno ?>';
                                                                                            </script>
                                                                                            <?php              
    }
?>

               <form style="margin: 0px auto 0px;" action="" method="post" enctype="multipart/form-data" >

  <input  type="hidden"  name="id" value="<?php echo $newserialno; ?>" required=""/>
                       <div class="form-group">
                        <label>Main Category</label>








<select name="maincatid"  onChange="getState(this.value);">
<option value disabled selected>Select Main Category of Business Listing</option>
<?php
foreach($results as $category) {
?>
<option value="<?php echo $category["id"]; ?>"><?php echo $category["category"]; ?></option>
<?php
}
?>
</select>



                </div>

 <br>

                    <div class="form-group">
                     <label>Sub Category </label>





<select name="subcategory" id="subcategory"  onChange="getCity(this.value);">
<option value="">Select Sub-Category of Business Listing</option>
</select>

                      
                   </div>

 <br>
               <div class="form-group">
                  <label>Image</label>
                     <input  type="file" class="fileinput btn-add" name="image" required=""/>
                    
              </div>

 <br>

               <div class="form-group">
                  <label> Business Name</label>
                 <input   type="text" placeholder="Enter your Business Name" name="businessname" required="" /> 
             </div>  


 <br>  <div class="form-group">
                        <label>Contact Person</label>
                         <input type="text" placeholder="Enter Your Name" name="contactperson" required="" />
                     
                     </div>                                          

                
 <br>  <div class="form-group">
                        <label>Mobile</label>
                         <input type="text" placeholder="Enter your Mobile " name="mobile" required="" />
                     
                     </div>    
 <br>                
  <div class="form-group">
                        <label>Email Id</label>
                         <input type="email" placeholder="Enter your Email Id" name="emailid" required="" />
                     
                     </div>   
                      <br>

   <div class="form-group">
                        <label>Landline No</label>
                         <input type="text" placeholder="Enter you Landline No" name="landline" required="" />
                     
                     </div>                                          
<br>  
 <div class="form-group">
                        <label>latitude</label>
                         <input type="text" placeholder="Enter Latitude" name="latitude" required="" />
                     
                     </div>                                          

                
 

                
                                      

  

                                                                                    </div>
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>










      <div class="rowItem rowInnerItem col-sm-6  btTextLeft inherit btDoublePadding">
                                                                            <div class="rowItemContent">
                                                                              
                                                                             
                                                                                <div class="btText">
                                                                                    <div role="form" class="wpcf7" id="wpcf7-f4-p1675-o1" lang="en-US" dir="ltr">
                                                                                       
                                                                                      
                    

                                                                                 

                     <div class="form-group">
                        <label>Landmark</label>
                         <input type="text" placeholder="Enter you Landmark" name="landmark" required="" />
                     
                     </div>                                          

                
 <br>
    <div class="form-group">
                        <label>Street</label>
                         <input type="text " placeholder="Enter you Street" name="street" required="" />
                     
                     </div>                                          

                
 <br>    <div class="form-group">
                        <label>Area</label>
                         <input type="text" name="area" placeholder="Enter your Area" required="" />
                     
                     </div>                                          

                
 <br>    <div class="form-group">
                        <label>Taluka</label>
                         <input type="text" name="taluka"  placeholder="Enter your Taluka" required="" />
                     
                     </div>                                          

                
 <br>    <div class="form-group">
                        <label>City</label>
                         <input type="text" name="city" placeholder="Enter your City" required="" />
                     
                     </div>                                          

                
 <br>    <div class="form-group">
                        <label>Pincode</label>
                         <input type="text" name="pincode" placeholder="Enter Your Pincode" required="" />
                     
                     </div>                                          

                
 <br>  

 <div class="form-group">
                        <label>website</label>
                         <input type="text" name="website" placeholder="Enter Your website" required="" />
                     
                     </div>                                          

                
 <br>  

 <div class="form-group">
                        <label>hours</label>
                         <input type="text" name="hours" placeholder="Enter Opening and Closing hours" required="" />
                     
                     </div>                                          

                
 <br>  

 <div class="form-group">
                        <label>longitude</label>
                         <input type="text" name="longitude" placeholder="Enter longitude" required="" />
                     
                     </div>                                          

                
 
                                                                   

                                                                                    </div>



                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>

     <div class="rowItem rowInnerItem col-sm-12  btTextLeft inherit btDoublePadding">
                                                                           <br>  

                <input style="    background-color: #dc0003;
    color: white;"  type="submit" name="save" value="Add" />  <br>   <br>  

                                                                                                </form>

                                                                           </div>


   </div>
                                                               




                                              
                                </section>

                            </div>
                        </div>
                        <!-- /boldthemes_content -->

                    </div>
                    <!-- /contentHolder -->
                </div>
                <!-- /contentWrap -->

                <?php include "footer.php" ?>

        </div>
        <!-- /pageWrap -->

        <?php include "allscript.php" ?>

    </body>

    </html>