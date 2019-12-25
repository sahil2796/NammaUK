<?php include "allcss.php" ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body class="archive tag tag-image tag-84 bt_bb_plugin_active bt_bb_fe_preview_toggle woocommerce-no-js bodyPreloader btMenuLeftEnabled btMenuBelowLogo btStickyEnabled btStandardHeadline btContentOverHeadline btLightSkin btNoDashInSidebar btTopToolsInMenuArea btRemovePreloader btSoftRoundedButtons btWithSidebar btSidebarRight ">
  
    <br style="display:none;" data-autoplay="0">

    <div class="btPageWrap" id="top">

     <?php include "header.php" ?>

        <div class="btContentWrap btClear">
            <section class="boldSection bottomSemiSpaced btPageHeadline gutter  topSemiSpaced " data-parallax="0.8" data-parallax-offset="-250">
                <div class="port">
                    <header class="header btClear extralarge">
                        <div class="btSuperTitle"><span><div class="btBreadCrumbs"><nav><ul><li><a href="">Home</a></li><li>Buy & Sell</li></ul></nav></div></span></div>
                        <div class="dash">
                            <h1><span class="headline">  Buy & Sell</span></h1></div>
                    </header>
                </div>
            </section>
            <div class="btBlogHeaderContent"></div>
            <div class="btContentHolder">

                <div class="btContent">




<?php

include"db.php";
$result = mysqli_query($con,"SELECT * FROM olx WHERE  status = 1  ORDER BY id desc");

while($row = mysqli_fetch_array($result))
{

   


echo '
                    <article class="btArticleListItem animate animate-fadein animate-moveup gutter wPhoto post-3118 post type-post status-publish format-image has-post-thumbnail hentry category-blogging category-image category-urban tag-blogging tag-entertainment tag-image tag-urban post_format-post-format-image btBlogColumnView">
                        <div class="port">
                            <div class="boldCell">
                                <div class="boldRow">
                                    <div class="rowItem col-sm-12">
                                        <div class="rowItemContent">
                                            <div class="btArticleListBody">
                                                <div class="boldRow">
                                                    <div class="rowItem  col-md-5  btTextCenter">
                                                        <div class="rowItemContent">
                                                            <div class="btMediaBox">
                                                                <div class="bpbItem">
                                                                    <a href="olxdetail.php?q='.$row['id'].'"><img src="images/olx/'.$row['img'].'"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="rowItem btTextLeft  col-md-7 ">
                                                        <div class="rowItemContent">
                                                            <header class="header btClear medium">
                                                                <div class="btSuperTitle">
   <span>

                                                                <span class="btArticleCategories">

                                                                <a href="olxdetail.php?q='.$row['id'].'" class="btArticleCategory cat-item-18">'.$row['cat'].'</a>

                                                              
                                                              </span>

                                                              </span>


                                                                <span>

                                                                <span class="btArticleCategories">

                                                                <a href="olxdetail.php?q='.$row['id'].'" class="btArticleCategory cat-item-14">'.$row['brand'].'</a>

                                                              
                                                              </span>

                                                              </span>
                                                                </div>
                                                                <div class="dash">
                                                                    <h3><span class="headline"><a href="olxdetail.php?q='.$row['id'].'">'.$row['productname'].' [ '.$row['model'].' ]</a></span></h3></div>
                                                                <div class="btSubTitle">
                                                                   
                                                                     <span class="btArticleReadingTime">
  '.$row['taluka'].' 
                                                              

                                                                     </span>


                                                                     <span style="font-size:16px;font-family:Roboto Slab" class="">

                                                                 


'.$row['description'].'

                                                              

                                                                     </span>

                                                                   <br>
                                                                     <span style="font-size:15px;opacity:.8;font-family:Roboto Slab" class=""> 
    <i style="font-size:18px;margin:8px" class="fa fa-user" aria-hidden="true"></i> '.$row['cname'].' 

     <i style="font-size:22px;margin:8px" class="fa fa-mobile" aria-hidden="true"></i> '.$row['mobile'].'                                                            
                                                                                                                        

                                                                     </span>

                                                                 </div>
                                                            </header>
                                                           
                                                            <div class="boldRowInner">
                                                <div class="rowItem col-md-6 col-ms-12 btShareArticle btMiddleVertical btTextLeft">
                                                  
                                                </div>
                                                <div class="rowItem col-md-6 col-ms-12 btReadArticle btMiddleVertical btTextRight">
                                                    <div class="rowItemContent"><a href="" class="btBtn btnRightPosition btContinueReading btnFilledStyle btnAccentColor btnExtraSmall btnNormalWidth btnIco"><span class="btnInnerText"> '.$row['price'].'</span>

                                                    <span class="btIco "><i class="fa fa-inr" aria-hidden="true"></i></span></a></div>
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
                        
                    </article>


';
}
?>


                  
                    <!-- /articles 
                    <div class="btPagination boldSection gutter">
                        <div class="port">
                            <div class="paging onRight">
                                <p class="pageNext"><a href="page/2/index679c.html?blog_side_info=false&amp;blog_list_view=columns">Older Posts</a></p>
                            </div>
                        </div>
                    </div> -->
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



</body>
</html>