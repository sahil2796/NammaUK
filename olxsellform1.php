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
                                                                                        <h2><span class="headline">Sell Your Land </span></h2></div>

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












                                                                        <div class="rowItem rowInnerItem col-sm-6  btTextLeft inherit btDoublePadding">
                                                                            <div class="rowItemContent">
                                                                              
                                                                             
                                                                                <div class="btText">
                                                                                    <div role="form" class="wpcf7" id="wpcf7-f4-p1675-o1" lang="en-US" dir="ltr">
                                                                                       


                                                                                         <?php
include('db.php');


$result = mysqli_query($con,"SELECT * FROM olx ORDER BY id DESC LIMIT 1");

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

    move_uploaded_file($_FILES["image"]["tmp_name"],"images/olx/" . $_FILES["image"]["name"]);



  $id=$_POST['id'];
$img=$_FILES["image"]["name"];

  $cat=$_POST['cat'];
  $productname=$_POST['productname'];

  $taluka=$_POST['taluka'];
 

      $description=$_POST['description'];
      
          $mobile=$_POST['mobile'];
              $property=$_POST['property'];
 

      $area=$_POST['area'];
      
          $address=$_POST['address'];

$save=mysqli_query($con,"INSERT INTO olx (id,img,cat,productname,taluka,description,mobile,property,area,address) VALUES ('$id','$img','$cat','$productname','$taluka','$description','$mobile','$property','$area','$address')");

      ?>
                                                                                            <script>
                                                                                                alert('Successfully Inserted...');

                                                                                            

                                                                                                window.location.href = 'olximg.php?q=<?php echo $newserialno ?>';
                                                                                            </script>
                                                                                            <?php              
    }
?>

               <form style="margin: 0px auto 0px;" action="" method="post" enctype="multipart/form-data" >


  <input  type="hidden"  name="id" value="<?php echo $newserialno; ?>" required=""/>
                       <div class="form-group">
                        <label>Category</label>


<select name="cat" >

<option value="land">Land </option>
</select>



                </div>

 <br>

    <div class="form-group">
                        <label>Type of Property</label>


<select name="property" >

<option value="Property for Sale ">Property for Sale </option>

<option value="Property for Rent ">Property for Rent </option>
</select>



                </div>


                <br>
               <div class="form-group">
                  <label>Image</label>
                     <input  type="file" class="fileinput btn-add" name="image" required=""/>
                    
              </div>

 <br>

               <div class="form-group">
                  <label> Property Name</label>
                 <input   type="text" placeholder="Enter your Property Name" name="productname" required="" /> 
             </div>  
<br>


                       <div class="form-group">
                        <label>Description of Property</label>
                         <input type="text" placeholder="Enter Your Description" name="description" required="" />
                     
                     </div>    
 

                <br>


                       <div class="form-group">
                        <label>Area</label>
                         <input type="text" placeholder="Enter Your Area" name="area" required="" />
                     
                     </div>  <br>


                       <div class="form-group">
                        <label>Address of Property</label>
                         <input type="text" placeholder="Enter Your Address" name="address" required="" />
                     
                     </div>  
                                      

  

                                                                                    </div>
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>










      <div class="rowItem rowInnerItem col-sm-6  btTextLeft inherit btDoublePadding">
                                                                            <div class="rowItemContent">
                                                                              
                                                                             
                                                                                <div class="btText">
                                                                                    <div role="form" class="wpcf7" id="wpcf7-f4-p1675-o1" lang="en-US" dir="ltr">
                                                                                       
    

<br>

                      <div class="form-group">
                        <label>Contact Person</label>
                         <input type="text" placeholder="Enter Your Name" name="cname" required="" />
                     
                     </div>                                          

                
 <br>  <div class="form-group">
                        <label>Mobile</label>
                         <input type="text" placeholder="Enter your Mobile " name="mobile" required="" />
                     
                     </div>    
  
  <br>  <div class="form-group">
                                 <label>Taluka</label>
                                 <select name="taluka" class="form-control">
                                  <option >Select Taluka </option>         
 <option value="Karwar">  Karwar </option>
 <option value="Sirsi">  Sirsi   </option>
 <option value="Kumta">  Kumta   </option>
 <option value="Ankola">  Ankola  </option>
 <option value="Siddapur">  Siddapur </option>   
  <option value="Honnavar"> Honnavar  </option>  
 <option value="Dandeli">  Dandeli </option>
  <option value="Bhatkal">  Bhatkal </option>
  <option value="Yellapur">Yellapur   </option>
 <option value="Mundgod"> Mundgod </option>
 <option value="Joida"> Joida   </option>
 <option value="Haliyal"> Haliyal</option>
                                       
                                 </select>
                              </div>


                

                                        

                
 
                                                                   

                                                                                    </div>



                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>

     <div class="rowItem rowInnerItem col-sm-12  btTextLeft inherit btDoublePadding">
                                                                           <br>  

                <input style="    background-color: #dc0003;
    color: white;"  type="submit" name="save" value="Add Products" />  <br>   <br>  

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