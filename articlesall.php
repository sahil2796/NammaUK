<?php include "allcss.php" ?>


<body style="width: 101%" class="archive category category-business category-6 bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btStandardHeadline btContentOverHeadline btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btWithSidebar btSidebarRight ">


<div class="btPageWrap" id="top">
	
  <?php include "header.php" ?>




<div class="btContentWrap btClear">
   <!-- <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced " data-parallax="0.8" data-parallax-offset="-250">
        <div class="port">
            <header class="header btClear extralarge">
                <div class="btSuperTitle"><span><div class="btBreadCrumbs"><nav><ul><li><a href="http://bold-news.bold-themes.com/main-demo/">Home</a></li><li>Articles</li></ul></nav></div></span></div>
                <div class="dash">
                    <h1><span class="headline">  Articles</span></h1></div>
            </header>
        </div>
    </section> -->
    <div class="btBlogHeaderContent"></div>
    <div class="btContentHolder">

        <div class="btContent">
         




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

$result = mysqli_query($con,"SELECT * FROM articles ORDER BY id desc");

while($row = mysqli_fetch_array($result))
{

     date_default_timezone_set('America/New_York');  


echo '

            <article class="btArticleListItem animate animate-fadein animate-moveup gutter btHasAuthorInfo wPhoto post-3126 post type-post status-publish format-image has-post-thumbnail hentry category-business category-markets tag-advices tag-business tag-markets post_format-post-format-image">
                <div class="port">
                    <div class="boldCell">
                        <div class="boldRow bottomMediumSpaced">
                            <div class="rowItem col-sm-12">
                                <div class="rowItemContent btTextLeft">
                                    <div class="articleSideGutter btTextCenter">
                                        <a href="" class="btArticleAuthor">

                                         <img alt="" src="images/user.jpg" srcset="" class="avatar avatar-144 photo" height="144" width="144" />'.$row['postedby'].'</a>

                                         <span class="btArticleDate">';  echo facebook_time_ago($row['datee']); ?><?php echo '  </span></div>
                                    <div class="btArticleListBody">
                                        <div class="btMediaBox">
                                            <div class="bpbItem">
                                                <a href="articlesdetailspage.php?q='.$row['id'].'">
                                                <img src="images/articles/'.$row['img'].'" alt="'.$row['title'].'"></a>
                                            </div>
                                        </div>
                                        <div class="btClear btSeparator bottomSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <header class="header btClear large">
                                            <div class="btSuperTitle"><span><span class="btArticleCategories">

                                            <a href="articlesdetailspage.php?q='.$row['id'].'" class="btArticleCategory cat-item-6">'.$row['articlescategory'].'</a>

                                            </span></span>
                                            </div>
                                            <div class="dash">
                                                <h2><span class="headline"><a href="articlesdetailspage.php?q='.$row['id'].'">'.$row['title'].'</a></span></h2></div>
                                            <div class="btSubTitle"><span class="btArticleReadingTime">';  echo facebook_time_ago($row['datee']); ?><?php echo '  <span></span></span><span class="btArticleViewsCount">4506</span><a href="#comments" class="btArticleComments">2</a></div>
                                        </header>
                                        <div class="btArticleListBodyContent">
                                            <p> '; echo substr($row['sdescription'],0,200)."....";

                          echo  '</p>
                                        </div>
                                        <div class="btClear btSeparator bottomSmallSpaced noBorder">
                                            <hr>
                                        </div>
                                        <div class="boldRow btArticleFooter">
                                            <div class="boldRowInner">
                                                <div class="rowItem col-md-6 col-ms-12 btShareArticle btMiddleVertical btTextLeft">
                                                    <div class="rowItemContent">
                                                        <div class="btIconRow">

                                                        <span class="btIco btIcoFilledType btIcoSmallSize btIcoFacebook"><a href="https://www.facebook.com/sharer/sharer.php?u=" target="_self" data-ico-fa="&#xf09a;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoSmallSize btIcoTwitter"><a href="https://twitter.com/home?status=" target="_self" data-ico-fa="&#xf099;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoSmallSize btIcoLinkedin"><a href="https://www.linkedin.com/shareArticle?url=" target="_self" data-ico-fa="&#xf0e1;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoSmallSize btIcoGooglePlus"><a href="https://plus.google.com/share?url=" target="_self" data-ico-fa="&#xf0d5;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoSmallSize btIcoVK"><a href="http://vkontakte.ru/share.php?url=" target="_self" data-ico-fa="&#xf189;" class="btIcoHolder"></a></span>

 <span class="btIco btIcoFilledType btIcoSmallSize ">

  <a style="background-color: #25d366;
    border-radius: 50px;color:white" href="whatsapp://send?text=" target="_blank" data-ico-fa="&#xf232;" class="btIcoHolder"></a>

  </span> <br><Br>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rowItem col-md-6 col-ms-12 btReadArticle btMiddleVertical btTextRight">
                                                    <div class="rowItemContent"><a href="" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco"><span class="btnInnerText">CONTINUE READING</span><span class="btIco "><span  data-ico-fa="&#xf061;" class="btIcoHolder"></span></span></a></div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                      
                                    </div>
                                  
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div>
                   
                </div>
              
            </article>



';
}
?>


           
       
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
            <a href="https://themeforest.net/item/industrial-manufacturing-factory-wordpress-theme/18939815?ref=BoldThemes" target="_blank"><img src="wp-content/uploads/sites/2/2017/03/Industrial-300x250-banner.jpg" /></a>
        </div>
    </div>
    <div class="btBox widget_bt_recent_posts">
        <h4><span>Recent Posts</span></h4>
        <div class="popularPosts">
            <ul>
                <li>
                    <div class="ppImage">
                        <a href="http://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/"><img width="160" height="160" src="wp-content/uploads/sites/2/2017/03/travel_01-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-160x160.jpg 160w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-180x180.jpg 180w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-300x300.jpg 300w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-600x600.jpg 600w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-320x320.jpg 320w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-640x640.jpg 640w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel_01-1280x1280.jpg 1280w" sizes="(max-width: 160px) 100vw, 160px" /></a>
                    </div>
                    <div class="ppTxt">
                        <header class="header btClear small">
                            <div class="btSuperTitle"><span>March 17, 2017</span></div>
                            <div class="dash">
                                <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/2017/03/17/hows-new-york-in-the-christmas-time/">How’s New York in the Christmas time?</a></span></h4></div>
                        </header>
                    </div>
                    <li>
                        <div class="ppImage">
                            <a href="http://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/"><img width="160" height="160" src="wp-content/uploads/sites/2/2017/03/travel07-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-160x160.jpg 160w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-180x180.jpg 180w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-300x300.jpg 300w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-600x600.jpg 600w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-320x320.jpg 320w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-640x640.jpg 640w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/travel07-1280x1280.jpg 1280w" sizes="(max-width: 160px) 100vw, 160px" /></a>
                        </div>
                        <div class="ppTxt">
                            <header class="header btClear small">
                                <div class="btSuperTitle"><span>March 16, 2017</span></div>
                                <div class="dash">
                                    <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/2017/03/16/10-best-things-to-do-in-st-petersburg/">10 best things to do in St. Petersburg</a></span></h4></div>
                            </header>
                        </div>
                        <li>
                            <div class="ppImage">
                                <a href="http://bold-news.bold-themes.com/main-demo/2017/03/12/find-your-new-apartment-with-just-one-click/"><img width="160" height="160" src="wp-content/uploads/sites/2/2017/03/tech09-160x160.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" srcset="http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-160x160.jpg 160w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-180x180.jpg 180w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-300x300.jpg 300w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-600x600.jpg 600w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-320x320.jpg 320w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-640x640.jpg 640w, http://bold-news.bold-themes.com/main-demo/wp-content/uploads/sites/2/2017/03/tech09-1280x1280.jpg 1280w" sizes="(max-width: 160px) 100vw, 160px" /></a>
                            </div>
                            <div class="ppTxt">
                                <header class="header btClear small">
                                    <div class="btSuperTitle"><span>March 12, 2017</span></div>
                                    <div class="dash">
                                        <h4><span class="headline"><a href="http://bold-news.bold-themes.com/main-demo/2017/03/12/find-your-new-apartment-with-just-one-click/">Find your new apartment with just one click</a></span></h4></div>
                                </header>
                            </div>
            </ul>
        </div>
    </div>
    <div class="btBox widget_recent_comments">
        <h4><span>Recent Comments</span></h4>
        <ul id="recentcomments">
            <li class="recentcomments"><span class="comment-author-link">Joanna Taylor</span> on <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/6-surprising-salad-tricks-to-help-you-lose-weight/#comment-20">10 surprising salad tricks to help you lose weight</a></li>
            <li class="recentcomments"><span class="comment-author-link">Joanna Taylor</span> on <a href="http://bold-news.bold-themes.com/main-demo/2017/03/01/7-times-chocolate-chip-cookie-dough/#comment-21">7 times chocolate chip cookie dough</a></li>
            <li class="recentcomments"><span class="comment-author-link">Joanna Taylor</span> on <a href="http://bold-news.bold-themes.com/main-demo/2017/03/02/kids-favourite-desserts-pancakes/#comment-22">Kids favourite desserts &#8211; pancakes!</a></li>
        </ul>
    </div>
</aside>
</div>
<!-- /contentHolder -->
</div>
<!-- /contentWrap -->


<?php include "footer.php" ?>

</div><!-- /pageWrap -->
<?php include "allscript.php" ?>

</html>
</body>