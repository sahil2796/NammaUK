<?php include "allcss.php" ?>


<body style="width: 101%" class="archive tag tag-image tag-84 bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btStandardHeadline btContentOverHeadline btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btWithSidebar btSidebarRight ">
  
    <br style="display:none;" data-autoplay="0">

    <div class="btPageWrap" id="top">

     <?php include "header.php" ?>

        <div class="btContentWrap btClear">
           <!-- <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced " data-parallax="0.8" data-parallax-offset="-250">
                <div class="port">
                    <header class="header btClear extralarge">
                        <div class="btSuperTitle"><span><div class="btBreadCrumbs"><nav><ul><li><a href="">Home</a></li><li>News</li></ul></nav></div></span></div>
                        <div class="dash">
                            <h1><span class="headline">  News</span></h1></div>
                    </header>
                </div>
            </section> -->
            <div class="btBlogHeaderContent"></div>







            
            <div class="btContentHolder">

                <div class="">






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








<?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM news ORDER BY id desc");

while($row = mysqli_fetch_array($result))
{

     date_default_timezone_set('America/New_York');  


echo '
               <div class="rowItem rowInnerItem col-sm-3   btTextLeft" style="margin-bottom:20px">
                                                    <div  class="rowItemContent">
                                                        <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                            <div class="btPostImageHolder">

                                                                <div class="btSinglePostImage">
                 <a style="font-size: 20px" href="newsdetailspage.php?q='.$row['id'].'"> 
<img src="images/news/'.$row['img'].'" title="'.$row['title'].'"></a>
                                                                </div>
                                                                <div class="btSinglePostTopMetaData">
                                                                    <div class="btSinglePostFormat"></div>
                                                                    <span class="btArticleCategories"><a href="" class="btArticleCategory cat-item-24">'.$row['newscategory'].'</a>

  
                                                                    <a href="newsdetailspage.php?q='.$row['id'].'" class="btArticleCategory cat-item-31"></a>

                                                                    </span>
                                                                </div>
                                                            </div>

                                                           

                                                            <div class="btSinglePostContent">


   <div class="btSinglePostTopData">
                                                                <span class="btArticleDate">March 9, 2017</span>
                                                                <a href="" class="btArticleAuthor"> <img alt="" src="images/user.jpg" srcset="http://1.gravatar.com/avatar/41fffffe42402d2c978b2b9203558017?s=288&amp;d=mm&amp;r=g 2x" class="avatar avatar-144 photo" height="144" width="144" />'.$row['postedby'].'</a>
                                                            </div>


                                                                <h4>
         <a style="font-size: 20px" href="newsdetailspage.php?q='.$row['id'].'"> 

           
              '.$row['title'].'
            </a>
        </h4> 

         <div class="btSinglePostExcerpt">
      Dynamically reinvent market-driven opportunities and ubiquitous interfaces. Energistically fabricate an array of niche markets through products.
    </div>


                                                                <div class="btSinglePostBottomData">
                                                                  
                                                                    <span class="btArticleReadingTime">';  echo facebook_time_ago($row['datee']); ?><?php echo '  <span></span></span>
                                                                    <span class="btArticleViewsCount">'.$row['hits'].'</span>

                                                                </div>




                                                            </div> <br>
                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoFacebook">

                                              <a href="https://www.facebook.com/sharer.php?u=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$row['id'].'"  target="_blank" data-ico-fa="&#xf09a;" class="btIcoHolder"></a>

                                              </span>

                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoTwitter"><a href="http://twitter.com/share?text='.$row['title'].'&url=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$row['id'].'" target="_blank" data-ico-fa="&#xf099;" class="btIcoHolder"></a></span>

                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoLinkedin"><a href="https://www.linkedin.com/shareArticle?url=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$row['id'].'" target="_blank" data-ico-fa="&#xf0e1;" class="btIcoHolder"></a></span>

                                              <span class="btIco btIcoFilledType btIcoSmallSize btIcoGooglePlus"><a href="https://plus.google.com/share?url=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$row['id'].'" target="_blank" data-ico-fa="&#xf0d5;" class="btIcoHolder"></a></span>
                                               

                                               <span class="btIco btIcoFilledType btIcoSmallSize ">

  <a style="background-color: #25d366;
    border-radius: 50px;color:white" href="whatsapp://send?text=http://amarprerana.org/nammauk/newsdetailspage.php?q='.$row['id'].'" target="_blank" data-ico-fa="&#xf232;" class="btIcoHolder"></a>

  </span>


                                                        </div>

                                                    </div>
                                                </div>    


';
}
?>


                 
                </div>
                <!-- /boldthemes_content -->
              
            </div>
            <!-- /contentHolder -->
        </div>
        <!-- /contentWrap -->

<?php include "footer.php" ?>


</div><!-- /pageWrap -->


<?php include "allscript.php" ?>



</body>
</html>