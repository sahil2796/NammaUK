<div class="bt_bb_wrapper">

    <section id="bt_section5c83eff6882c5" class="boldSection topMediumSpaced bottomMediumSpaced btDarkSkin gutter boxed inherit" style="background-color:#181818  !important;">
        <div class="port">
            <div class="boldCell">
                <div class="boldCellInner">
                    <div class="boldRow ">
                        <div class="boldRowInner">
                            <div class="rowItem col-md-4 col-ms-12 btTextLeft inherit btFooterText" data-width="4">
                                <div class="rowItemContent">
                                    <div class="btClear btSeparator topMediumSpaced noBorder">
                                        <hr>
                                    </div><span class="btIco btIcoDefaultType btIcoMediumSize btIcoAccentColor btIconCircleShape btFooterLargeTitle"><span  data-ico-es="&#xea5f;" class="btIcoHolder"><span>About us</span></span>
                                    </span>
                                    <div class="btClear btSeparator topSmallSpaced bottomSmallSpaced border">
                                        <hr>
                                    </div>
                                    <div class="btText">
                                        <p>Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.</p>
                                    </div>
                                    <div class="btClear btSeparator topMediumSpaced noBorder">
                                        <hr>
                                    </div><span class="btIco btIcoOutlineType btIcoSmallSize btIcoAccentColor btIconCircleShape"><a href=""  target="no_target" data-ico-fa="&#xf2b7;" class="btIcoHolder"><span>CONTACT US</span></a>
                                    </span>
                                    <div class="btClear btSeparator topExtraSmallSpaced noBorder">
                                        <hr>
                                    </div><span class="btIco btIcoOutlineType btIcoSmallSize btIcoAccentColor btIconCircleShape"><a href=""  target="no_target" data-ico-fa="&#xf095;" class="btIcoHolder"><span>CALL US ANYTIME</span></a>
                                    </span>
                                    <div class="btClear btSeparator topMediumSpaced bottomMediumSpaced border">
                                        <hr>
                                    </div><span class="btIco btIcoFilledType btIcoMediumSize btIcoAccentColor btIconCircleShape"><a href="https://www.facebook.com/boldthemes/"  target="no_target" data-ico-fa="&#xf09a;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoMediumSize btIcoAccentColor btIconCircleShape"><a href="https://twitter.com/bold_themes"  target="no_target" data-ico-fa="&#xf099;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoMediumSize btIcoAccentColor btIconCircleShape"><a href="https://plus.google.com/106260443376081681677"  target="no_target" data-ico-fa="&#xf0d5;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoMediumSize btIcoAccentColor btIconCircleShape"><a href="https://www.behance.net/info1afc201a"  target="no_target" data-ico-fa="&#xf1b4;" class="btIcoHolder"></a></span><span class="btIco btIcoFilledType btIcoMediumSize btIcoAccentColor btIconCircleShape"><a href="https://www.pinterest.com/boldthemes/"  target="no_target" data-ico-fa="&#xf231;" class="btIcoHolder"></a></span>
                                    <div class="btClear btSeparator topMediumSpaced noBorder">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="rowItem col-md-4 col-ms-12 btTextLeft inherit" data-width="4">
                                <div class="rowItemContent">
                                    <div class="btClear btSeparator topMediumSpaced noBorder">
                                        <hr>
                                    </div><span class="btIco btIcoDefaultType btIcoMediumSize btIcoAccentColor btIconCircleShape btFooterLargeTitle"><span  data-ico-es="&#xe9e3;" class="btIcoHolder"><span>Latest posts</span></span>
                                    </span>
                                    <div class="btClear btSeparator topSmallSpaced bottomSmallSpaced border">
                                        <hr>
                                    </div>
                                      <div class="btLatestPostsContainer verticalPosts btFooterLatestPosts">
                                       






<?php

include"db.php";
$result = mysqli_query($con,"SELECT * FROM news ORDER BY id desc limit 3");

while($row = mysqli_fetch_array($result))
{

  //  date_default_timezone_set('America/New_York');  

echo '
                                        <div class="btSingleLatestPost col-md-12 col-ms-12  inherit">
                                            <div class="btSingleLatestPostImage btTextCenter">
                                                <div class="bpgPhoto btFooterLatestPosts btZoomInHoverType">
                                                    <a href="newsdetailspage.php?q='.$row['id'].'" target="_self" title="  '.$row['title'].'"></a>
                                                    <div class="boldPhotoBox">
                                                        <div class="bpbItem">
                                                            <div class="btImage"><img src="images/news/'.$row['img'].'" alt="  '.$row['title'].'" title="  '.$row['title'].'"></div>
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
                                            </div>
                                          <div class="btSingleLatestPostContent">
                                                <header class="header btClear small">
                                                    <div class="btSuperTitle"><span>
                                                    <span class="btArticleDate">'.$row['postedby'].'</span></span>
                                                    </div>
                                                    <div class="dash">
                                                        <h4><span class="headline"><a href="newsdetailspage.php?q='.$row['id'].'" target="_self">  '.$row['title'].'</a></span></h4></div>
                                                </header>
                                            </div>
                                        </div>


'; } 
?>







                                    </div>
                                    <div class="btClear btSeparator topMediumSpaced noBorder">
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="rowItem col-md-4 col-ms-12 btTextLeft inherit" data-width="4">
                                <div class="rowItemContent">
                                   
                                 
                                   <div class="btClear btSeparator topSmallSpaced bottomSmallSpaced noBorder " ><hr></div><span class="btIco btIcoDefaultType btIcoMediumSize btIcoAccentColor btIconCircleShape btFooterLargeTitle "><span  data-ico-es="&#xe9fa; " class="btIcoHolder "><span>Categories</span></span></span><div class="btClear btSeparator topSmallSpaced bottomSmallSpaced border " ><hr></div><div class="btCustomMenu btFooterCustomMenu " ><div class="menu-categories-menu-container "><ul id="menu-categories-menu " class="menu ">





                                                                            <?php

include"db.php";



$result = mysqli_query($con,"SELECT * FROM bimaincategory limit 20");

while($row = mysqli_fetch_array($result))
{
echo '


  <li id="menu-item-3922 " class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3922 ">

  <a href="businesslisting.php?q='.$row['id'].'">'.$row['category'].' </a></li>




';
}
?>







</ul>
</div>
</div>
<div class="btClear btSeparator topMediumSpaced noBorder ">
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

<section id="bt_section5c83eff6926a9 " class="boldSection topSmallSpaced bottomSmallSpaced btDarkSkin gutter boxed inherit btFooterBelow " style="background-color:#0c0c0c !important; ">
    <div class="port ">
        <div class="boldCell ">
            <div class="boldCellInner ">
                <div class="boldRow hidden-sm hidden-xs hidden-ms ">
                    <div class="boldRowInner ">
                        <div class="rowItem col-md-6 col-sm-12 btTextLeft inherit " data-width="6 ">
                            <div class="rowItemContent ">
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                                <div class="btText ">
                                    <p><strong>© Copyright by Nammauk 2019. All rights reserved.</strong></p>
                                </div>
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-6 col-sm-12 btTextRight inherit " data-width="6 ">
                            <div class="rowItemContent ">
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                                <div class="btCustomMenu ">
                                    <div class="menu-footer-menu-container ">
                                        <ul id="menu-footer-menu " class="menu ">
                                            <li id="menu-item-3901 " class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3901 "><a href=" ">ABOUT US</a></li>
                                            <li id="menu-item-3827 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3827 "><a href="http://bold-news.bold-themes.com/main-demo/landing#layouts ">BOLD NEWS LAYOUTS</a></li>
                                            <li id="menu-item-3828 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3828 "><a href="http://bold-news.bold-themes.com/main-demo/landing#pages ">PAGES</a></li>
                                            <li id="menu-item-3829 " class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3829 "><a href="http://bold-news.bold-themes.com/main-demo/landing#features ">FEATURES</a></li>
                                            <li id="menu-item-3902 " class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3902 "><a href=" ">CONTACT</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="boldRow hidden-md hidden-lg ">
                    <div class="boldRowInner ">
                        <div class="rowItem col-md-6 col-sm-12 btTextCenter inherit " data-width="6 ">
                            <div class="rowItemContent ">
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                                <div class="btText ">
                                    <p><strong>© Copyright by Nammauk 2019. All rights reserved.</strong></p>
                                </div>
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="rowItem col-md-6 col-sm-12 btTextCenter inherit " data-width="6 ">
                            <div class="rowItemContent ">
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
                                    <hr>
                                </div>
                                <div class="btCustomMenu ">
                                    <div class="menu-footer-menu-container ">
                                        <ul id="menu-footer-menu-1 " class="menu ">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3901 "><a href=" ">ABOUT US</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3827 "><a href=" ">BOLD NEWS LAYOUTS</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3828 "><a href=" ">PAGES</a></li>
                                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3829 "><a href=" ">FEATURES</a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3902 "><a href=" ">CONTACT</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="btClear btSeparator topSmallSpaced noBorder ">
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

</div>