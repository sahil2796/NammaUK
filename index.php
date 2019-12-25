
<?php include "allcss.php" ?>

    <!-- FACEBOOK TIME AGO FUNCTIONALITY -->

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

        <!-- FACEBOOK TIME AGO FUNCTIONALITY -->
  
        <body style="width: 101%" class="page-template-default page page-id-2347 page-child parent-pageid-3667 bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btNoSidebar ">

            <div class="btPageWrap" id="top">

                <?php include "header.php" ?>

                    <div class="btContentWrap btClear">
                        <div class="btContentHolder">

                            <div class="btContent">
                                <div class="bt_bb_wrapper">

                                    <!-- Stories -->

                                    <h1 style="display:none" id="header">&nbsp;</h1>
                               


                                    <div style="width: 100%;margin-top: 10px;text-align: center;" id="stories">
                                      


                                    </div>




                                    <!-- Stories -->

                                    <!-- Business Listing -->

                                    <section id="bt_section5c83eff5e6f27" class="boldSection topMediumSpaced bottomMediumSpaced gutter boxed inherit">
                                        <div class="port" style="    margin-top: -33px;">
                                            <div class="boldCell">
                                                <div class="boldCellInner">
                                                    <div class="boldRow ">
                                                        <div class="boldRowInner">

                                                            <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                <div class="rowItemContent">

                                                                    <div class="div-only-mobile">

                                                                        <div class="search_bar large">

                                                                            <div class="search_dropdown" style="width: 16px;">
                                                                                <span style="margin-left: 0px">All</span>

                                                                            </div>

                                                                            <input type="text" placeholder="Search for anything" />

                                                                            <button type="submit" value="Search">Search</button>
                                                                        </div>
                                                                        <br>
                                                                        <Br>
                                                                    </div>

                                                                    <div class="btBox shortcode_widget_categories ">
                                                                        <h4><span>Business Listing</span></h4>
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
                                                                </div>
                                                            </div>

                                                            <div class="rowItem col-md-9 col-ms-12  btTextLeft" data-width="9">

                                                                <div class="rowItemContent">

                                                                    <div class="boldRow ">
                                                                        <div class="boldRowInner">

                                                                            <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                                <div class="rowItemContent">
                                                                                    <disv class="slided autoSliderHeight btSimpleArrows" data-slick='{"infinite":true,"autoplay":true,"autoplaySpeed":5000,"pauseOnHover":false,"pauseOnDotsHover":true}' data-simple_arrows="yes">

                                                                                        <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM slider ORDER BY id desc");

while($row = mysqli_fetch_array($result))
{
echo '

<div style="height: 400px" class="slidedItem firstItem">
    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-right" style="background-image:url(images/slider/' . $row['img'] . ');">
        <div class="btSliderCell" data-slick="yes">
            <div class="btSlideGutter">
                <div class="btSlidePane">

                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-right content-background-transparent">

                        <div class="btSinglePostContent">

                            <h4>
                                <a href="">
                                  ' . $row['title'] . '
                                </a>
                            </h4>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

'; 
} 
?>

                                                                                </div>
                                                                            </div>

                                                                            <div class="boldRow ">
                                                                                <div class="boldRowInner">
                                                                                    <div class="rowItem rowInnerItem col-sm-9  btTextLeft">
                                                                                        <div class="rowItemContent">
                                                                                            <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                                                <div class="sIcon tech "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xea2c;" class="btIcoHolder"></span></span>
                                                                                                </div>
                                                                                                <div class="btCategoryTitleTxt">
                                                                                                    <h2>News</h2></div>

                                                                                            </div>
                                                                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                <hr>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="rowItem rowInnerItem col-sm-3  btTextRight inherit">
                                                                                        <div class="rowItemContent"><a href="newsall.php" class="btBtn btBtn btnFilledStyle btnAlternateColor btnSmall btnNormalWidth btnRightPosition btnNoIcon"><span class="btnInnerText">VIEW ALL</span></a>

                                                                                        </div>
                                                                                        <br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="boldRow ">
                                                                                <div class="boldRowInner">

                                                                                    <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM news ORDER BY id desc limit 8");

while($row = mysqli_fetch_array($result))
{

      date_default_timezone_set('America/New_York');  

echo '

  <div class="rowItem rowInnerItem col-sm-3  btTextLeft">
                                                    <div style="margin-top: -30px" class="rowItemContent">
                                                        <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                            <div class="btPostImageHolder">

                                                                <div style="height: 119px;" class="btSinglePostImage">
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

                                                                <h4 style="line-height:18.8px"> 
         <a style="font-size: 15px" href="newsdetailspage.php?q='.$row['id'].'"> 

              '.$row['title'].'
            </a>
        </h4>

                                                                <div class="btSinglePostBottomData">

                                                                    <span class="btArticleReadingTime">';  echo facebook_time_ago($row['datee']); ?>
                                                                                        <?php echo '  <span></span></span>
                                                                    <span class="btArticleViewsCount">'.$row['hits'].'</span>

                                                                </div>

                                                            </div>
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
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- Business Listing -->

                                    <!-- ADS -->
                                    <?php
$root = '';

$path = 'images/ads/';

function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
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

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 1000000 ); // php 4.2+ not needed
    $num = array_rand($ar);
    return $ar[$num];
}

// Obtain list of images from directory 
$imgList = getImagesFromDir($root . $path);

$img = getRandomFromArray($imgList);
?>
                                        <!-- ADS -->

                                        <div class="rowItem col-ms-12  btTextLeft" data-width="9">
                                            <div class="rowItemContent">
                                                <div class="boldRow ">

                                                    <div class="bt_banner">
                                                        <!-- ADS -->
                                                        <img src="<?php echo $path . $img ?>" alt="" />
                                                        <!-- ADS -->
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!-- OLX -->

                                        <section id="bt_section5c83eff5c5142" class="boldSection topMediumSpaced gutter boxed inherit" style="background-color:#f1f1f1  !important;">
                                            <div class="port">
                                                <div class="boldCell">
                                                    <div class="boldCellInner">




                                                        <div class="boldRow ">
                                                           <div class="boldRowInner">
<br>

                                                                <div class="rowItem col-sm-9  btTextLeft" data-width="12">
                                                                    <div class="rowItemContent">
                                                                        <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                            <div class="sIcon news-trending "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xe99b;" class="btIcoHolder"></span></span>
                                                                            </div>
                                                                            <div class="btCategoryTitleTxt">
                                                                                <h1>Buy / Sell</h1></div>
                                                                        </div>
                                                                        <div class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>

 <div class="rowItem col-sm-3  btTextLeft" data-width="12">
                                                                    <div class="rowItemContent">


                                                                      


                                                                       <div class="rowItemContent">   <a style="text-align: center;width:50%" href="olxsellform.php" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco">

                                                <span style="padding-right: 0em;" class="btnInnerText">SELL YOUR PRODUCT</span></a>

                                                                                        </div>
                                                                        <div class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
                                                                            <hr>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="boldRow ">
                                                            <div class="boldRowInner">
                                                                <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                    <div class="rowItemContent">
                                                                        <div class=" btCarouselSmallNav boldClientList btDefaultPadding btOnTopArrow">
                                                                            <div class="bclPort" data-slides="4" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true}'>


                                                                                     <?php

include"db.php";



$result = mysqli_query($con,"SELECT * FROM `olx` where cat IN('bike','mobile') and status=1 ORDER BY id desc");

while($row = mysqli_fetch_array($result))
{
echo '
                                                                                <div class="bclItem ">
                                                                                    <div class="bclItemChild">
                                                                                        <div class="bclItemChildContent">
                                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                <div class="btPostImageHolder">

                                                                                                    <div class="btSinglePostImage">
                                                                                                        <a href="olxdetail.php?q='.$row['id'].'"><img src="images/olx/' . $row['img'] . '" title="'.$row['productname'].'"></a>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <div class="btSinglePostContent">

                                                                                                    <div class="btSinglePostTopData">
                                                                                                        <span class="btArticleDate">'.$row['taluka'].'</span>
                                                                                                        <a href="olxdetail.php?q='.$row['id'].'" class="btArticleAuthor"> <img alt="" src="images/user.jpg"  class="avatar avatar-144 photo" height="144" width="144" />'.$row['cname'].'</a>
                                                                                                    </div>
                                                                                                    <h4>
            <a href="olxdetail.php?q='.$row['id'].'">
          '.$row['productname'].' [ '.$row['model'].' ]
            </a>
        </h4>
         <p> <a href="olxdetail.php?q='.$row['id'].'"> '; echo substr($row['description'],0,70)."....";

                          echo  '</a></p>
                                             
                                                    <div class="rowItemContent"><a href="olxdetail.php?q='.$row['id'].'" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco"><span class="btnInnerText"> '.$row['price'].'</span>

                                                    <span class="btIco "><i class="fa fa-inr" aria-hidden="true"></i></span></a></div>

                                                                                                </div>
                                                                                            </div>

                                               
                                              


                                                                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                <hr>
                                                                                            </div>



                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                '; } ?>





                                                                                    <?php

include"db.php";



$result = mysqli_query($con,"SELECT * FROM olx  where cat = 'land' and  status=1 ORDER BY id desc");

while($row = mysqli_fetch_array($result))
{
echo '
                                                                                <div class="bclItem ">
                                                                                    <div class="bclItemChild">
                                                                                        <div class="bclItemChildContent">
                                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                <div class="btPostImageHolder">

                                                                                                    <div class="btSinglePostImage">
                                                                                                        <a href="buyselllanddetail.php?q='.$row['id'].'"><img src="images/olx/' . $row['img'] . '" title="'.$row['productname'].'"></a>
                                                                                                    </div>

                                                                                                </div>
                                                                                                <div class="btSinglePostContent">

                                                                                                    <div class="btSinglePostTopData">
                                                                                                        <span class="btArticleDate">'.$row['taluka'].'</span>
                                                                                                       
                                                                                                    </div>
                                                                                                    <h4>
            <a href="buyselllanddetail.php?q='.$row['id'].'">
          '.$row['productname'].' 
            </a>
        </h4>
         <p> <a href="buyselllanddetail.php?q='.$row['id'].'"> '; echo substr($row['description'],0,70)."....";

                          echo  '</a></p>
                                             
                                                    <div class="rowItemContent"><a href="buyselllanddetail.php?q='.$row['id'].'" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco"><span class="btnInnerText"> '.$row['price'].'</span>

                                                    <span class="btIco "><i class="fa fa-inr" aria-hidden="true"></i></span></a></div>

                                                                                                </div>
                                                                                            </div>

                                               
                                              


                                                                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                <hr>
                                                                                            </div>



                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                '; } ?>





                                                                             
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

                                        <!-- OLX -->
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
                                            <div class="rowItem col-ms-12  btTextLeft" data-width="9">
                                                <div class="rowItemContent">
                                                    <div class="boldRow ">

                                                        <div class="bt_banner">
  <!-- ADS -->
                                                            <img src="<?php echo $pathh . $img ?>" alt="" />
  <!-- ADS -->
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Products -->

                                            <section id="bt_section5c83eff5c5142" class="boldSection topMediumSpaced gutter boxed inherit" style="background-color:white  !important;">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                                <div class="sIcon news-trending "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xe99b;" class="btIcoHolder"></span></span>
                                                                                </div>
                                                                                <div class="btCategoryTitleTxt">
                                                                                    <h1>Products</h1></div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class=" btCarouselSmallNav boldClientList btDefaultPadding btOnTopArrow">
                                                                                <div class="bclPort" data-slides="4" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true}'>

                                                                                    <div class="rowItemContent">
                                                                                        <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                            <hr>
                                                                                        </div>
                                                                                        <div class="btText">
                                                                                            <div class="woocommerce columns-4">

                                                                                                <ul class="products">

                                                                                                    <li class="post-531 product type-product status-publish has-post-thumbnail product_cat-mugs product_tag-mugs first instock shipping-taxable product-type-grouped">
                                                                                                        <div class="bpgPhoto btTextCenter">
                                                                                                            <a href="http://bold-news.bold-themes.com/main-demo/product/read-news-with-coffee-mug/" target="_self" title=""></a>
                                                                                                            <div class="boldPhotoBox">
                                                                                                                <div class="bpbItem">
                                                                                                                    <div class="btImage"><img src="wp-content/uploads/sites/2/2017/03/mug-03-450x450.jpg" alt="" title=""></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="captionPane btDarkSkin btTextCenter">
                                                                                                                <div class="captionTable">
                                                                                                                    <div class="captionCell">
                                                                                                                        <div class="captionTxt"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <header class="header btClear extrasmall">
                                                                                                            <div class="btSuperTitle"><span><span class="btArticleCategories"><a href="http://bold-news.bold-themes.com/main-demo/product-category/mugs/" class="btArticleCategory cat-item-143">Mugs</a></span></span>
                                                                                                            </div>
                                                                                                            <div class="dash">
                                                                                                                <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/product/read-news-with-coffee-mug/">&#8220;Read news with coffee&#8221; mug</a></span></h4></div>
                                                                                                            <div class="btSubTitle">
                                                                                                                <div class="star-rating" title="Rated 5.00 out of 5"><span style="width:100%"><strong class="rating">5.00</strong> out of 5</span></div>
                                                                                                            </div>
                                                                                                        </header>
                                                                                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.00</span>
                                                                                                        </span>
                                                                                                        <a rel="nofollow" href="http://bold-news.bold-themes.com/main-demo/product/read-news-with-coffee-mug/" data-quantity="1" data-product_id="531" data-product_sku="" class="btBtn btnFilledStyle btnSmall btnNormal btnAccentColor add_to_cart_button ajax_add_to_cart "><span class="btnInnerText">View products</span></a>

                                                                                                    </li>

                                                                                                    <li class="post-567 product type-product status-publish has-post-thumbnail product_cat-t-shirts product_tag-shirt  instock sale shipping-taxable purchasable product-type-simple">

                                                                                                        <div class="btPriceTableSticker">
                                                                                                            <div>
                                                                                                                <div>Sale!</div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="bpgPhoto btTextCenter">
                                                                                                            <a href="http://bold-news.bold-themes.com/main-demo/product/red-bold-news-shirt/" target="_self" title=""></a>
                                                                                                            <div class="boldPhotoBox">
                                                                                                                <div class="bpbItem">
                                                                                                                    <div class="btImage"><img src="wp-content/uploads/sites/2/2017/03/shirt-01-red-front-450x450.jpg" alt="" title=""></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="captionPane btDarkSkin btTextCenter">
                                                                                                                <div class="captionTable">
                                                                                                                    <div class="captionCell">
                                                                                                                        <div class="captionTxt"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <header class="header btClear extrasmall">
                                                                                                            <div class="btSuperTitle"><span><span class="btArticleCategories"><a href="http://bold-news.bold-themes.com/main-demo/product-category/t-shirts/" class="btArticleCategory cat-item-146">T-shirts</a></span></span>
                                                                                                            </div>
                                                                                                            <div class="dash">
                                                                                                                <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/product/red-bold-news-shirt/">Red Bold News shirt</a></span></h4></div>
                                                                                                            <div class="btSubTitle"><span class="btNoStarRating"></span></div>
                                                                                                        </header>
                                                                                                        <span class="price"><del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</span>
                                                                                                        </del> <ins><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>30.00</span></ins></span>
                                                                                                        <a rel="nofollow" href="indexe5e9.html?add-to-cart=567" data-quantity="1" data-product_id="567" data-product_sku="" class="btBtn btnFilledStyle btnSmall btnNormal btnAccentColor add_to_cart_button ajax_add_to_cart "><span class="btnInnerText">Add to cart</span></a></li>

                                                                                                    <li class="post-566 product type-product status-publish has-post-thumbnail product_cat-t-shirts product_tag-shirt last instock shipping-taxable purchasable product-type-simple">
                                                                                                        <div class="bpgPhoto btTextCenter">
                                                                                                            <a href="http://bold-news.bold-themes.com/main-demo/product/red-bold-news-side-writing-shirt/" target="_self" title=""></a>
                                                                                                            <div class="boldPhotoBox">
                                                                                                                <div class="bpbItem">
                                                                                                                    <div class="btImage"><img src="wp-content/uploads/sites/2/2017/03/shirt-04-white-front-450x450.jpg" alt="" title=""></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="captionPane btDarkSkin btTextCenter">
                                                                                                                <div class="captionTable">
                                                                                                                    <div class="captionCell">
                                                                                                                        <div class="captionTxt"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <header class="header btClear extrasmall">
                                                                                                            <div class="btSuperTitle"><span><span class="btArticleCategories"><a href="http://bold-news.bold-themes.com/main-demo/product-category/t-shirts/" class="btArticleCategory cat-item-146">T-shirts</a></span></span>
                                                                                                            </div>
                                                                                                            <div class="dash">
                                                                                                                <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/product/red-bold-news-side-writing-shirt/">Red Bold News side writing shirt</a></span></h4></div>
                                                                                                            <div class="btSubTitle">
                                                                                                                <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span></div>
                                                                                                            </div>
                                                                                                        </header>
                                                                                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</span>
                                                                                                        </span>
                                                                                                        <a rel="nofollow" href="indexb90a.html?add-to-cart=566" data-quantity="1" data-product_id="566" data-product_sku="" class="btBtn btnFilledStyle btnSmall btnNormal btnAccentColor add_to_cart_button ajax_add_to_cart "><span class="btnInnerText">Add to cart</span></a></li>

                                                                                                    <li class="post-566 product type-product status-publish has-post-thumbnail product_cat-t-shirts product_tag-shirt last instock shipping-taxable purchasable product-type-simple">
                                                                                                        <div class="bpgPhoto btTextCenter">
                                                                                                            <a href="http://bold-news.bold-themes.com/main-demo/product/red-bold-news-side-writing-shirt/" target="_self" title=""></a>
                                                                                                            <div class="boldPhotoBox">
                                                                                                                <div class="bpbItem">
                                                                                                                    <div class="btImage"><img src="wp-content/uploads/sites/2/2017/03/mug-04-450x450.jpg" alt="" title=""></div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="captionPane btDarkSkin btTextCenter">
                                                                                                                <div class="captionTable">
                                                                                                                    <div class="captionCell">
                                                                                                                        <div class="captionTxt"></div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <header class="header btClear extrasmall">
                                                                                                            <div class="btSuperTitle"><span><span class="btArticleCategories"><a href="http://bold-news.bold-themes.com/main-demo/product-category/t-shirts/" class="btArticleCategory cat-item-146">T-shirts</a></span></span>
                                                                                                            </div>
                                                                                                            <div class="dash">
                                                                                                                <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/product/red-bold-news-side-writing-shirt/">Red Bold News side writing shirt</a></span></h4></div>
                                                                                                            <div class="btSubTitle">
                                                                                                                <div class="star-rating" title="Rated 4.00 out of 5"><span style="width:80%"><strong class="rating">4.00</strong> out of 5</span></div>
                                                                                                            </div>
                                                                                                        </header>
                                                                                                        <span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>35.00</span>
                                                                                                        </span>
                                                                                                        <a rel="nofollow" href="indexb90a.html?add-to-cart=566" data-quantity="1" data-product_id="566" data-product_sku="" class="btBtn btnFilledStyle btnSmall btnNormal btnAccentColor add_to_cart_button ajax_add_to_cart "><span class="btnInnerText">Add to cart</span></a></li>

                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- Products -->

                                            <!-- BLood donation -->

                                            <section id="bt_section5c83eff5c5142" class="boldSection topMediumSpaced gutter boxed inherit" style="background-color:#f1f1f1  !important;">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                                <div class="sIcon news-trending "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xe99b;" class="btIcoHolder"></span></span>
                                                                                </div>
                                                                                <div class="btCategoryTitleTxt">
                                                                                    <h1>Blood Donation</h1></div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class=" btCarouselSmallNav boldClientList btDefaultPadding btOnTopArrow">
                                                                                <div class="bclPort" data-slides="4" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true}'>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">

                                                                                                        <div class="btSinglePostImage">
                                                                                                            <a href="2017/03/09/delicious-dinner-party-salads-recipes/"><img src="wp-content/img/o.png" title="Delicious dinner party salads recipes"></a>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">
                                                                                                            <span class="btArticleDate">7795112025</span>

                                                                                                        </div>
                                                                                                        <h4>
            <a href="2017/03/09/delicious-dinner-party-salads-recipes/">
            Mohammed Zufar Ajaib
            </a>
        </h4>
                                                                                                        <span>Address - 'Qasre-Zubair' Madina Colony Near Kadi Machine Bhatkal</span>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">

                                                                                                        <div class="btSinglePostImage">
                                                                                                            <a href="2017/03/09/healthy-quick-easy-dessert-recipes/"><img src="wp-content/img/a.png" title="Healthy quick &#038; easy dessert recipes"></a>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">
                                                                                                            <span class="btArticleDate">9886699668</span>

                                                                                                        </div>
                                                                                                        <h4>
            <a href="2017/03/09/healthy-quick-easy-dessert-recipes/">
             Mohammed Nusair Mohtesham
            </a>
        </h4>
                                                                                                        <span>Address: #110, Haines Road, Frazer Town, Bangalore - 560005</span>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate audio btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">

                                                                                                        <div class="btSinglePostImage">
                                                                                                            <a href=""><img src="wp-content/img/bb.png" title="The soundtrack to a gaming revolution"></a>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">
                                                                                                            <span class="btArticleDate">9902613613</span>

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
            Shamveel Damda
            </a>
        </h4>
                                                                                                        <span>Address: Patel farm nagappa Nayak road 2nd cross Bhatkal </span>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate video btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">

                                                                                                        <div class="btSinglePostImage">
                                                                                                            <a href=""><img src="wp-content/img/ab.png" title="New police vehicles in the United States"></a>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">
                                                                                                            <span class="btArticleDate">9036486512</span>

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
               Mohammed Nazish
            </a>
        </h4>
                                                                                                        <SPAN>Address: #1, Appanna Residency, Bunder Road 2nd Cross, Bhatkal</SPAN>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate audio btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">

                                                                                                        <div class="btSinglePostImage">
                                                                                                            <a href=""><img src="wp-content/img/bb.png" title="The soundtrack to a gaming revolution"></a>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">
                                                                                                            <span class="btArticleDate">9902613613</span>

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
            Shamveel Damda
            </a>
        </h4>
                                                                                                        <span>Address: Patel farm nagappa Nayak road 2nd cross Bhatkal </span>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                                    <hr>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- Blood Donation -->

                                            <!-- Movies -->
                                            <section id="bt_section5c83eff5b8d30" class="boldSection btDarkSkin inherit">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <disv class="slided autoSliderHeight btSimpleArrows" data-slick='{"infinite":true,"autoplay":true,"autoplaySpeed":5000,"pauseOnHover":false,"pauseOnDotsHover":true}' data-simple_arrows="yes">
                                                                                <div class="slidedItem firstItem">
                                                                                    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-right" style="background-image:url(wp-content/img/movie1.jpg);">
                                                                                        <div class="btSliderCell" data-slick="yes">
                                                                                            <div class="btSlideGutter">
                                                                                                <div class="btSlidePane">

                                                                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-right content-background-transparent">

                                                                                                        <div class="btSinglePostContent">

                                                                                                            <div class="btSinglePostTopData">
                                                                                                                <span class="btArticleDate">March 17, 2017</span>

                                                                                                            </div>
                                                                                                            <h4>
                                <a href="http://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/">
                                  Kireeta Kannada Movie  | Latest Kannada Movie 2017
                                </a>
                            </h4>
                                                                                                            <div class="btSinglePostExcerpt">
                                                                                                                Watch Kireeta Kannada Movie Theatrical Trailer | Latest Kannada Movie Trailer 2017
                                                                                                            </div>

                                                                                                            <a rel="nofollow" href="indexb90a.html?add-to-cart=566" data-quantity="1" data-product_id="566" data-product_sku="" class="btBtn btnFilledStyle btnSmall btnNormal btnAccentColor add_to_cart_button ajax_add_to_cart "><span class="btnInnerText">View Timing</span></a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="slidedItem firstItem">
                                                                                    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-left" style="background-image:url(wp-content/img/movie2.jpg);">
                                                                                        <div class="btSliderCell" data-slick="yes">
                                                                                            <div class="btSlideGutter">
                                                                                                <div class="btSlidePane">

                                                                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-left content-background-transparent">
                                                                                                        <div class="btPostImageHolder">
                                                                                                            <div class="btSinglePostBackgroundImage">
                                                                                                                <a href="http://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/"></a>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                        <div class="btSinglePostContent">

                                                                                                            <div class="btSinglePostTopData">
                                                                                                                <span class="btArticleDate">March 16, 2017</span>

                                                                                                            </div>
                                                                                                            <h4>
                                <a href="http://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/">
                                  Yevadu 3 2018 Hindi Dubbed
                                </a>
                            </h4>
                                                                                                            <div class="btSinglePostExcerpt">
                                                                                                                The movie story deals with Abhishek Bhargav a 'prince in exile' brought up without the greed of a materialistic life.
                                                                                                            </div> <a rel="nofollow" href="indexb90a.html?add-to-cart=566" data-quantity="1" data-product_id="566" data-product_sku="" class="btBtn btnFilledStyle btnSmall btnNormal btnAccentColor add_to_cart_button ajax_add_to_cart "><span class="btnInnerText">View Timing</span></a>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="slidedItem firstItem">
                                                                                    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-right" style="background-image:url(wp-content/img/movie3.jpg);">
                                                                                        <div class="btSliderCell" data-slick="yes">
                                                                                            <div class="btSlideGutter">
                                                                                                <div class="btSlidePane">

                                                                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-right content-background-transparent">
                                                                                                        <div class="btPostImageHolder">
                                                                                                            <div class="btSinglePostBackgroundImage">
                                                                                                                <a href=""></a>
                                                                                                            </div>

                                                                                                        </div>
                                                                                                        <div class="btSinglePostContent">

                                                                                                            <div class="btSinglePostTopData">
                                                                                                                <span class="btArticleDate">March 12, 2017</span>

                                                                                                            </div>
                                                                                                            <h4>
                                <a href="">
                                   Yevadu 3
                                </a>
                            </h4>
                                                                                                            <div class="btSinglePostExcerpt">
                                                                                                                The movie story deals with Abhishek Bhargav a 'prince in exile' brought up without the greed of a materialistic life
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </section>

                                            <!-- Articles -->

                                            <section id="bt_section5c83eff5c5142" class="boldSection topMediumSpaced gutter boxed inherit" style="background-color:#f1f1f1  !important;">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                                <div class="sIcon news-trending "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xe99b;" class="btIcoHolder"></span></span>
                                                                                </div>
                                                                                <div class="btCategoryTitleTxt">
                                                                                    <h1>Articles</h1></div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topExtraSmallSpaced bottomSemiSpaced noBorder visible-xs visible-ms">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class=" btCarouselSmallNav boldClientList btDefaultPadding btOnTopArrow">
                                                                                <div class="bclPort" data-slides="4" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true}'>

                                                                                    <?php

include"db.php";

$result = mysqli_query($con,"SELECT * FROM articles order BY id desc");

while($row = mysqli_fetch_array($result))
{

      date_default_timezone_set('America/New_York');  

echo '

                                        <div class="bclItem ">
                                            <div class="bclItemChild">
                                                <div class="bclItemChildContent">
                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData topImagePosition image_size__medium_large__">
                                                        <div class="btPostImageHolder">

                                                            <div class="btSinglePostImage">
                                                                <a href="articlesdetailspage.php?q='.$row['id'].'"><img src="images/articles/'.$row['img'].'" title="'.$row['title'].'"></a>
                                                            </div>
                                                            <div class="btSinglePostTopMetaData">
                                                                <div class="btSinglePostFormat"></div>
                                                                <span class="btArticleCategories"><a href="" class="btArticleCategory cat-item-9">'.$row['articlescategory'].'</a>

                                                               </span>
                                                            </div>
                                                        </div>
                                                        <div class="btSinglePostContent">

                                                            <div class="btSinglePostTopData">
                                                                <span class="btArticleDate">March 9, 2017</span>
                                                                <a href="" class="btArticleAuthor"> <img alt="" src="images/user.jpg" class="avatar avatar-144 photo" height="144" width="144" />'.$row['postedby'].'</a>
                                                            </div>
                                                            <h4>
            <a href="articlesdetailspage.php?q='.$row['id'].'">
                '.$row['title'].'
            </a>
        </h4>

                                                            <div class="btSinglePostBottomData">

                                                                <span class="btArticleReadingTime">';  echo facebook_time_ago($row['datee']); ?>
                                                                                        <?php echo '<span></span></span>
                                                                <span class="btArticleViewsCount">4690</span>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="btClear btSeparator topSmallSpaced noBorder">
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

'; }
?>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- Articles -->

                                            <div class="rowItem col-ms-12  btTextLeft" data-width="9">
                                                <div class="rowItemContent">
                                                    <div class="boldRow ">

                                                        <div class="bt_banner">
                                                            <a href="" target="_blank"><img src="wp-content/uploads/sites/2/2017/03/Food-haus-970x90-banner.jpg" /></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- TRANSPORT -->

                                            <section id="bt_section5c83eff65c28d" class="boldSection topMediumSpaced bottomMediumSpaced gutter boxed inherit">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-8 col-ms-12 btTextLeft btTopVertical" data-width="8">
                                                                        <div class="rowItemContent">
                                                                            <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                                <div class="sIcon urban "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xe9ea;" class="btIcoHolder"></span></span>
                                                                                </div>
                                                                                <div class="btCategoryTitleTxt">
                                                                                    <h2>Transport Services</h2></div>

                                                                            </div>
                                                                            <div class="btClear btSeparator bottomSmallSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-4 col-ms-12 btTextRight btTopVertical" data-width="4">
                                                                        <div class="rowItemContent"><a href="http://urban/" class="btBtn btBtn btnFilledStyle btnAlternateColor btnSmall btnNormalWidth btnRightPosition btnNoIcon"><span class="btnInnerText">VIEW ALL</span></a>
                                                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/auto.jpg); ">
                                                                                        <a href=""></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/05/diana-says-vlogging-saved-my-life/">
Auto Rickshaw            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate  btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/taxi.jpg); ">
                                                                                        <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/this-is-how-much-vloggers-get-paid/"></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/this-is-how-much-vloggers-get-paid/">
               Taxi
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/bus.jpg); ">
                                                                                        <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/skateboarding-is-created-by-hipsters/"></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/skateboarding-is-created-by-hipsters/">
                Bus
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/train.jpg); ">
                                                                                        <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/vote-for-best-photo-editor-app/"></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/vote-for-best-photo-editor-app/">
               Train
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- TRANSPORT -->

                                            <!-- SLIDER -->
                                            <section id="bt_section5c83eff5b8d30" class="boldSection btDarkSkin inherit">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class="slided autoSliderHeight btSimpleArrows" data-slick='{"infinite":true,"autoplay":true,"autoplaySpeed":5000,"pauseOnHover":false,"pauseOnDotsHover":true}' data-simple_arrows="yes">
                                                                                <div class="slidedItem firstItem">
                                                                                    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-right" style="background-image:url(wp-content/img/wedding1.jpg);">
                                                                                        <div class="btSliderCell" data-slick="yes">
                                                                                            <div class="btSlideGutter">
                                                                                                <div class="btSlidePane">

                                                                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-right content-background-transparent">

                                                                                                        <div class="btSinglePostContent">

                                                                                                            <div class="btSinglePostTopData">
                                                                                                                <span class="btArticleDate">March 16, 2017</span>

                                                                                                            </div>
                                                                                                            <h4>
                                <a href="http://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/">
                                    10 best things to do in St. Petersburg
                                </a>
                            </h4>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="slidedItem firstItem">
                                                                                    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-left" style="background-image:url(wp-content/img/wedding2.jpg);">
                                                                                        <div class="btSliderCell" data-slick="yes">
                                                                                            <div class="btSlideGutter">
                                                                                                <div class="btSlidePane">

                                                                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-left content-background-transparent">
                                                                                                        <div class="btPostImageHolder">
                                                                                                            <div class="btSinglePostBackgroundImage">
                                                                                                                <a href="http://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/"></a>
                                                                                                            </div>

                                                                                                            <div class="btSinglePostTopMetaData">
                                                                                                                <div class="btSinglePostFormat"></div>
                                                                                                                <span class="btArticleCategories"><a href="" class="btArticleCategory cat-item-39">Cities</a></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="btSinglePostContent">

                                                                                                            <div class="btSinglePostTopData">
                                                                                                                <span class="btArticleDate">March 16, 2017</span>

                                                                                                            </div>
                                                                                                            <h4>
                                <a href="">
                                    10 best things to do in St. Petersburg
                                </a>
                            </h4>
                                                                                                            <div class="btSinglePostExcerpt">
                                                                                                                Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital.
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="slidedItem firstItem">
                                                                                    <div class="btSliderPort wBackground cover single-post content-background-transparent image_size__full__ text-right" style="background-image:url(wp-content/img/wedding3.jpg);">
                                                                                        <div class="btSliderCell" data-slick="yes">
                                                                                            <div class="btSlideGutter">
                                                                                                <div class="btSlidePane">

                                                                                                    <div class="btSinglePostTemplate btSinglePostTemplateCount largeTemplate image backgroundImagePosition text-right content-background-transparent">
                                                                                                        <div class="btPostImageHolder">
                                                                                                            <div class="btSinglePostBackgroundImage">
                                                                                                                <a href=""></a>
                                                                                                            </div>

                                                                                                            <div class="btSinglePostTopMetaData">
                                                                                                                <div class="btSinglePostFormat"></div>

                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="btSinglePostContent">

                                                                                                            <div class="btSinglePostTopData">
                                                                                                                <span class="btArticleDate">March 12, 2017</span>

                                                                                                            </div>
                                                                                                            <h4>
                                <a href="">
                                    Find your new apartment with just one click
                                </a>
                            </h4>
                                                                                                            <div class="btSinglePostExcerpt">
                                                                                                                Holistically foster superior methodologies without market-driven best practices. Distinctively exploit optimal alignments for intuitive bandwidth.
                                                                                                            </div>

                                                                                                        </div>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- SLIDER -->

                                            <!-- Tourism -->

                                            <section id="bt_section5c83eff65c28d" class="boldSection topMediumSpaced bottomMediumSpaced gutter boxed inherit">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-8 col-ms-12 btTextLeft btTopVertical" data-width="8">
                                                                        <div class="rowItemContent">
                                                                            <div class="btCategoryTitle btIcoBigSizeIcon ">
                                                                                <div class="sIcon urban "><span class="btIco btIcoBigSize btIcoFilledType btIconCircleShape"><span  data-ico-es="&#xe9ea;" class="btIcoHolder"></span></span>
                                                                                </div>
                                                                                <div class="btCategoryTitleTxt">
                                                                                    <h2>Tourism</h2></div>

                                                                            </div>
                                                                            <div class="btClear btSeparator bottomSmallSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-4 col-ms-12 btTextRight btTopVertical" data-width="4">
                                                                        <div class="rowItemContent"><a href="" class="btBtn btBtn btnFilledStyle btnAlternateColor btnSmall btnNormalWidth btnRightPosition btnNoIcon"><span class="btnInnerText">VIEW ALL</span></a>
                                                                            <div class="btClear btSeparator topSmallSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/tourism/1.jpg); ">
                                                                                        <a href=""></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/05/diana-says-vlogging-saved-my-life/">
               Paris
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate  btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/tourism/2.jpg); ">
                                                                                        <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/this-is-how-much-vloggers-get-paid/"></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="">
               Rome
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/tourism/3.jpg); ">
                                                                                        <a href=""></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="">
                South Island, New Zealand
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rowItem col-md-3 col-sm-6 col-ms-12 btTextLeft" data-width="3">
                                                                        <div class="rowItemContent">
                                                                            <div class="btSinglePostTemplate btSinglePostTemplateCount defaultTemplate image btHideBottomData btHideTopData backgroundImagePosition image_size__medium_large__">
                                                                                <div class="btPostImageHolder">
                                                                                    <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/tourism/5.jpg); ">
                                                                                        <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/vote-for-best-photo-editor-app/"></a>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="btSinglePostContent">

                                                                                    <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/vote-for-best-photo-editor-app/">
               Grand Canyon
            </a>
        </h4>

                                                                                </div>
                                                                            </div>
                                                                            <div class="btClear btSeparator topMediumSpaced noBorder">
                                                                                <hr>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                            <!-- Tourism -->

                                            <div class="rowItem col-ms-12  btTextLeft" data-width="9">
                                                <div class="rowItemContent">
                                                    <div class="boldRow ">

                                                        <div class="bt_banner">
                                                            <a href="" target="_blank"><img src="wp-content/uploads/sites/2/2017/03/Food-haus-970x90-banner.jpg" /></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <section id="bt_section5c83eff63ed13" class="boldSection btDarkSkin inherit wBackground cover" style="background-image:url('wp-content/uploads/sites/2/2017/03/bg_galleries.jpg');">
                                                <div class="port">
                                                    <div class="boldCell">
                                                        <div class="boldCellInner">
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner">
                                                                    <div class="rowItem col-md-12 col-ms-12  btTextLeft" data-width="12">
                                                                        <div class="rowItemContent">
                                                                            <div class=" btCarouselSmallNav boldClientList btNoPadding btNextToSlidesArrow">
                                                                                <div class="bclPort" data-slides="6" data-slick='{"pauseOnHover":true,"pauseOnDotsHover":true,"autoplay":true,"autoplaySpeed":3000}'>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate video backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news2.jpeg); ">
                                                                                                            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/09/how-to-upload-manage-and-share-videos/"></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
               Sitharaman says she knows name of Pak pilot shot down by IAF
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate gallery backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news5.jpg); ">
                                                                                                            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/07/graduating-from-chef-school/"></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/07/graduating-from-chef-school/">
                Expelled Trinamool Congress MP Anupam Hazra joins BJP
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate video backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news6.jpg); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
              SAD fields first candidate from Punjab for Lok Sabha elections
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate video backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news7.jpg); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
               Kalank teaser out. Best memes star exes Sanjay Dutt and Madhuri Dixit
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate video backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news8.jpg); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
              Coldplay's Chris Martin says Shah Rukh Khan forever
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate video backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news9.jpg); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
               West Bengal: Mamata Banerjee releases TMC list of 42 candidates
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate gallery backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news10.jpg); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
                Priyanka Gandhi delivers first political speech in Gujarat’s Gandhinagar: 10 points
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate gallery backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news4.jpg); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
              BJP's social media team all set for Lok Sabha elections
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate  backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news1.JPG); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
               Shatrughan Sinha hits out at PM Modi, says his convoys cause traffic snarls
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="bclItem ">
                                                                                        <div class="bclItemChild">
                                                                                            <div class="bclItemChildContent">
                                                                                                <div class="btSinglePostTemplate btSinglePostTemplateCount smallTemplate image backgroundImagePosition image_size__medium_large__">
                                                                                                    <div class="btPostImageHolder">
                                                                                                        <div class="btSinglePostBackgroundImage" style="background-image:url(wp-content/img/news2.png); ">
                                                                                                            <a href=""></a>
                                                                                                        </div>

                                                                                                        <div class="btSinglePostTopMetaData">
                                                                                                            <div class="btSinglePostFormat"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="btSinglePostContent">

                                                                                                        <div class="btSinglePostTopData">

                                                                                                        </div>
                                                                                                        <h4>
            <a href="">
                Hardik Patel joins Congress, praises Rahul, attacks Modi
            </a>
        </h4>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="boldRow ">
                                                                <div class="boldRowInner"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php include "footer.php"
 ?>

            </div>
            <!-- /pageWrap -->

            <?php include "allscript.php" ?>



<div class="container">
   <table id="userTable" border="1" >
      <thead>
        <tr>
          <th width="5%">S.no</th>
          <th width="20%">Username</th>
          <th width="20%">Name</th>
          <th width="30%">Email</th>
        </tr>
      </thead>
      <tbody></tbody>
   </table>
</div>


 <!-- Stories -->
    


    <script src="new/a/zuck.js"></script>
    <script>


      $(document).ready(function(){
        hitApi();
      });
      function hitApi(){
        var url = 'http://localhost:8080/sahil/nammauk/api.php'
        $.ajax({
          url: url,
          type:'GET',
                dataType: "json",
          
          success: function(result){
            console.log(result);  




//
  var len = result.length;
            for(var i=0; i<len; i++){
                var id = result[i].id;
                var title = result[i].title;
                var img = result[i].img;
                //var email = result[i].email;

                var tr_str = "<tr>" +
                    "<td align='center'>" + (i+1) + "</td>" +
                    "<td align='center'>" + title + "</td>" +
                    "<td align='center'>" + name + "</td>" +
                    "<td align='center'>" + img + "</td>" +
                    "</tr>";

                $("#userTable tbody").append(tr_str);
            }


//return data;

     setStories(result) ;
          },
          error: function(xhr){
                console.log("An error occured: " + xhr.status + " " + xhr.statusText);
          }


    });

      }














      var initDemo = function () {
        var header = document.getElementById("header");
        var skin = location.href.split('skin=')[1];
        //var dddd=hitApi();
      
        if (!skin) {
          skin = 'Snapgram';
        }

        if (skin.indexOf('#') !== -1) {
          skin = skin.split('#')[0];
        }

        var skins = {
          'Snapgram': {
            'avatars': true,
            'list': false,
            'autoFullScreen': false,
            'cubeEffect': true
          }

         
        };

        var timeIndex = 0;
        var shifts = [35, 60, 60 * 3, 60 * 60 * 2, 60 * 60 * 25, 60 * 60 * 24 * 4, 60 * 60 * 24 * 10];
        var timestamp = function () {
          var now = new Date();
          var shift = shifts[timeIndex++] || 0;
          var date = new Date(now - shift * 1000);

          return date.getTime() / 1000;
        };

        var stories = new Zuck('stories', {
          backNative: true,
          previousTap: true,
          autoFullScreen: skins[skin]['autoFullScreen'],
          skin: skin,
          avatars: skins[skin]['avatars'],
          list: skins[skin]['list'],
          cubeEffect: skins[skin]['cubeEffect'],
          localStorage: true,
          stories: [
           
              {
              id: "ramon",
              photo: "images/news/news1.jpg",
              name: "meet",
              items: [
                Zuck.buildItem("ramon-1", "photo", 3, "images/news/news1.jpg", "images/news/news1.jpg", '', false, false, timestamp())
              ]
            }



          ]




        });

        var el = document.querySelectorAll('#skin option');
        var total = el.length;






        for (var i = 0; i < total; i++) {
          var what = (skin == el[i].value) ? true : false;

          if (what) {
            el[i].setAttribute('selected', what);

            header.innerHTML = skin;
            header.className = skin;
          } else {
            el[i].removeAttribute('selected');
          }
        }








        document.body.style.display = 'block';
      };

      initDemo();
    </script>




 <!-- Stories -->


        </body>

        </html>