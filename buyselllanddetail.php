

<?php include "allcss.php" ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="width: 101%" class="post-template-default single single-post postid-3130 single-format-image bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btWithSidebar btSidebarRight ">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-PRBDTPG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --><br style="display:none;" data-autoplay="0" >


<div class="btPageWrap" id="top">
	
  




<?php include "header.php" ?>



<div class="btContentWrap btClear">
    <div class="btBlogHeaderContent">
        <section id="bt_section5c83f3361f28c" class="boldSection gutter boxed inherit">
            <div class="port">
                <div class="boldCell">
                    <div class="boldCellInner">
                        <div class="boldRow ">
                            <div class="boldRowInner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="btContentHolder">

        <div class="btContent">
            <article class="boldSection btArticle gutter divider btArticleWithSideInfo post-3130 post type-post status-publish format-image has-post-thumbnail hentry category-food-cuisine category-news-trending category-salads tag-food tag-recipe tag-salads post_format-post-format-image btPostSingleItemStandard">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldRow">
                            <div class="rowItem col-sm-12 btTextLeft">
                                <div class="btArticleContentWrap">
                                    <div class="btArticleSideinfo">
                                       
                                        <!-- Side related -->
                                        <div class="btRelatedPosts">


                                            <div class="rowItemContent">

                                              <a style="text-align: center;width:100%" href="olxsellform1.php" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco">

                                                <span style="padding-right: 0em;" class="btnInnerText">SELL YOUR LAND</span></a>


                                                                                        </div> <br>



                                            <h3><span>Related Posts</span></h3>
                                            <div class="boldRow">



<?php

include"db.php";

$var=$_GET['q'];
$result = mysqli_query($con,"SELECT * FROM bicategory WHERE subcategory=$var limit 2");
 
while($row = mysqli_fetch_array($result))
{

    

echo '


                                                <div class="rowItem col-sm-12">
                                                    <div class="btSinglePostTemplate smallTemplate image backgroundImagePosition">
                                                        <div class="btPostImageHolder">


                                                            <div class="btSinglePostBackgroundImage" style="background-image:url(images/bi/'.$row['img'].'); ">
                                                        
                                                                <a href="businesslistingdetail.php?q='.$row['id'].'" title="'.$row['businessname'].'" target="_blank"></a>
                                                            </div>
                                                        

                                                            <div class="btSinglePostTopMetaData">
                                                                <div class="btSinglePostFormat"></div>
                                                                <span class="btArticleCategories"></span> </div>
                                                        </div>
                                                        <div class="btSinglePostContent">
                                                            <h4>
										<a href="businesslistingdetail.php?q='.$row['id'].'" businessname="'.$row['businessname'].'" target="_blank">'.$row['businessname'].'</a>
									</h4>
                                                        </div>
                                                    </div>
                                                </div>




'; } ?>




                                             

                                                <div class="rowItem col-sm-12">
                                                    <div class="btClear btSeparator topSmallSpaced bottomSmallSpaced border">
                                                        <hr>
                                                    </div>
                                                </div>










<?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM articles limit 2");

while($row = mysqli_fetch_array($result))
{

    

echo '

                                                <div class="rowItem col-sm-12">
                                                    <div class="btSinglePostTemplate smallTemplate no-imageImagePosition">
                                                        <div class="btPostImageHolder">
                                                            <div class="btSinglePostTopMetaData">
                                                                <div class="btSinglePostFormat"></div>
                                                                <span class="btArticleCategories"><a href="articlesdetailspage.php?q='.$row['id'].'" class="btArticleCategory cat-item-9">'.$row['articlescategory'].'</a></span> </div>
                                                        </div>
                                                        <div class="btSinglePostContent">
                                                            <h4>
										<a href="articlesdetailspage.php?q='.$row['id'].'" title="'.$row['title'].'" target="_blank">'.$row['title'].'</a>
									</h4>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="rowItem col-sm-12">
                                                    <div class="btClear btSeparator topSmallSpaced bottomSmallSpaced border">
                                                        <hr>
                                                    </div>
                                                </div>


'; } ?>









                                            </div>
                                        </div>

                                    </div>
                                    <!-- /btArticleSideinfo -->
                                    <div class="btArticleContent">



 <?php 


 function facebook_time_ago($timestamp)  
 {  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
     return "Just Now";  
   }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "one minute ago";  
     }  
     else  
           {  
       return "$minutes minutes ago";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "an hour ago";  
     }  
           else  
           {  
       return "$hours hrs ago";  
     }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "yesterday";  
     }  
           else  
           {  
       return "$days days ago";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "a week ago";  
     }  
           else  
           {  
       return "$weeks weeks ago";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "a month ago";  
     }  
           else  
           {  
       return "$months months ago";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "one year ago";  
     }  
           else  
           {  
       return "$years years ago";  
     }  
   }  
 }  
 ?>  



 <!-- ADS -->
                                        <?php
$root = '';

$pathh = 'images/ads/';

function getImagesFromDirr($pathh) {
    $images = array();
    if ( $img_dir = @opendir($pathh) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArrayy($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}

// Obtain list of images from directory 
$imgList = getImagesFromDirr($root . $pathh);

$img = getRandomFromArrayy($imgList);
?>
  <!-- ADS -->





            <div class="boldRow bottomSmallSpaced">
                <div class="rowItem col-sm-12 btTextCenter btGridGap5">
                    <div class="btMediaBox btCarouselSmallNav">
                        <div class="boldPhotoSlide ">


                                                                                        <?php

include"db.php";

$var=$_GET['q'];

$result = mysqli_query($con,"SELECT * FROM olximages where idd=$var");

while($row = mysqli_fetch_array($result))
{
echo '
   <div class="bpbItem"><img src="images/olx/' . $row['file_name'] . '" alt="post_11"></div>



'; 
} 
?>

                         

                        
                        </div>
                    </div>
                </div>
              
            </div>
           
     
  <?php

                                               include "db.php";
$var=$_GET['q'];



$result = mysqli_query($con,"SELECT * FROM olx WHERE id=$var");
while($row = mysqli_fetch_array($result))
{

  



echo '   
 <div class="btSuperTitle">
   <span>

                                                                <span class="btArticleCategories">

                                                                <a href="" class="btArticleCategory cat-item-18">'.$row['cat'].'</a>

                                                              
                                                              </span>

                                                              </span>


                                                                <span>

                                                                <span class="btArticleCategories">

                                                                <a href="" class="btArticleCategory cat-item-14">'.$row['property'].'</a>

                                                              
                                                              </span>

                                                              </span>
                                                                </div>




 <div class="boldRowInner">
                                                <div style="padding:0px" class="rowItem col-md-8 col-ms-12 btShareArticle btMiddleVertical btTextLeft">
                                                      <div style="   margin-bottom:0px; font-size: 2.125em;" class="btArticleExcerpt">'.$row['productname'].'</div>
                                                </div>
                                                <div class="rowItem col-md-4 col-ms-12 btReadArticle btMiddleVertical btTextRight">
                                                    <div class="rowItemContent"><a href="" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco"><span class="btnInnerText"> '.$row['price'].'</span>

                                                    <span class="btIco "><i class="fa fa-inr" aria-hidden="true"></i></span></a></div>
                                                </div>
                                            </div>
                                           


                                     



  <span style="font-size:16px;font-family:Roboto Slab" class="">

            <br>                                                     


'.$row['description'].'

                                                              

                                                                     </span> 


<br>
 


                                            <div class="btArticleBody portfolioBody btTextLeft">
                                            <div class="bt_bb_wrapper">
                                               
                                                <p>


                                            
   <i style="font-size:18px;margin:8px" class="fa fa-square" aria-hidden="true"></i> '.$row['area'].'  

      <i style="font-size:18px;margin:8px" class="fa fa-location-arrow " aria-hidden="true"></i> '.$row['taluka'].' 

     <i style="font-size:22px;margin:8px" class="fa fa-mobile" aria-hidden="true"></i> '.$row['mobile'].'  

     <br>

       <i style="font-size:22px;margin:8px" class="fa fa-map-marker" aria-hidden="true"></i> '.$row['address'].'  

 
  </p>
  
    <iframe style="width:500px;height:100px" frameborder="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q='.$row['address'].'&z=14&output=embed"></iframe> 


<br>
                                           
  <span class="btIco btIcoFilledType btIcoSmallSize btIcoFacebook">

                                              <a href="https://www.facebook.com/sharer.php?u=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$_GET['q'].'"  target="_blank" data-ico-fa="&#xf09a;" class="btIcoHolder"></a>

                                              </span>

                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoTwitter"><a href="http://twitter.com/share?text='.$row['productname'].'&url=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$_GET['q'].'" target="_blank" data-ico-fa="&#xf099;" class="btIcoHolder"></a></span>

                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoLinkedin"><a href="https://www.linkedin.com/shareArticle?url=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$_GET['q'].'" target="_blank" data-ico-fa="&#xf0e1;" class="btIcoHolder"></a></span>

                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoGooglePlus"><a href="https://plus.google.com/share?url=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$_GET['q'].'" target="_blank" data-ico-fa="&#xf0d5;" class="btIcoHolder"></a></span>

  <span class="btIco btIcoFilledType btIcoSmallSize ">

  <a style="background-color: #25d366;
    border-radius: 50px;color:white" href="whatsapp://send?text=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$_GET['q'].'" target="_blank" data-ico-fa="&#xf232;" class="btIcoHolder"></a>

  </span> 
<br>
<br>
                                               '; ?>  <img src="<?php echo $pathh . $img ?>" /> <?php echo '
                                              

                                                
</div></div>  
                                            




  

                                        '; }
                                        ?>
                                        
                                      
                                    


<!-- /btArticleBody -->
</div>
<!-- /btArticleContent -->
</div>
<!-- /btArticleContentWrap -->
</div>
<!-- /rowItem -->
</div>
<!-- /boldRow -->
</div>
<!-- /boldCell -->
</div>
<!-- /port -->
</article>
<section class="boldSection gutter bottomMediumSpaced btAboutAutorSection">
    <div class="port">
        <div class="boldRow">
            <div class="rowItem col-sm-12 btAboutAutor">
                <div class="btAboutAuthor">
                   
                   
                                    <div class="aaTxt">
                                        <h4>Register ur business to reach more dan 5lac in uttara kannada</h4>
                                      
                                    
                                       
                                    </div>
                </div>
            </div>
            <!-- /rowItem -->
        </div>
        <!-- /boldRow -->
    </div>
    <!-- /port -->





</section>

  

                                                                          
  


	<section class="boldSection btSinglePostBanner gutter bottomMediumSpaced">
		<div class="port">
			



            <div class="boldRow bottomSmallSpaced">
                <div class="rowItem col-sm-12 btTextCenter btGridGap5">
                    <div class="btMediaBox btCarouselSmallNav">
                        <div class="boldPhotoSlide ">




                                                                                        <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM ads");

while($row = mysqli_fetch_array($result))
{
echo '

  <div class="bpbItem"><img src="images/ads/' . $row['img'] . '" alt="post_11"></div>

'; 
} 
?>

                         

                        
                        </div>
                    </div>
                </div>
              
            </div>




	</section>

 
</div>
<!-- /boldthemes_content -->
<aside class="btSidebar btTextLeft">
    <div class="btBox widget_categories">
        <ul>
            <?php

include"db.php";



$result = mysqli_query($con,"SELECT * FROM bimaincategory ");

while($row = mysqli_fetch_array($result))
{
echo '

 <li class="cat-item cat-item-16">
 <a href="businesslisting.php?q='.$row['id'].'">'.$row['category'].' </a>
  </li>

';
}
?>
        </ul>
    </div>
    <div class="btBox widget_bt_banner_widget">
        <div class="bt_banner">
            <a href="" target="_blank"><img src="wp-content/uploads/sites/2/2017/03/Industrial-300x250-banner.jpg" /></a>
        </div>
    </div>
    <div class="btBox widget_bt_recent_posts">
        <h4><span>Recent Posts</span></h4>
        <div class="popularPosts">
            <ul>




<?php

include"db.php";
$result = mysqli_query($con,"SELECT * FROM news ORDER BY id desc limit 3");

while($row = mysqli_fetch_array($result))
{

    date_default_timezone_set('America/New_York');  

echo '


                <li>
                    <div class="ppImage">

                     <a style="font-size: 20px" href="newsdetailspage.php?q='.$row['id'].'"> 
<img width="160" height="160" src="images/news/'.$row['img'].'" title="'.$row['title'].'"></a>


                     
                    </div>
                    <div class="ppTxt">
                        <header class="header btClear small">
                            <div class="btSuperTitle"><span>';  echo facebook_time_ago($row['datee']); ?><?php echo '</span></div>
                            <div class="dash">
                                <h4><span class="headline"><a href="">  '.$row['title'].' </a></span></h4></div>
                        </header>
                    </div> </li> '; } 
                    ?>

            </ul>
        </div>
    </div>
    
</aside>
</div>
<!-- /contentHolder -->
</div>
<!-- /contentWrap -->




<?php include "footer.php"
 ?>
 

</div><!-- /pageWrap -->




<?php include "allscript.php" ?>



</body>



</html>