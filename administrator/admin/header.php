<?php
session_start();
//Checking User Logged or Not
if(empty($_SESSION['user'])){
 header('location:index.php');
}

?>

    <header class="main-header">
        <a href="index.html" class="logo">
            <!-- Logo -->
            <span class="logo-mini">
                  <img src="../assets/n.png" alt="">
               </span>
            <span class="logo-lg">
                  <img src="../assets/logo.png" alt="">
               </span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <!-- Sidebar toggle button-->
                <span class="sr-only">Toggle navigation</span>
                <span class="pe-7s-angle-left-circle"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                    <!-- user -->
                    <li class="dropdown dropdown-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../assets/dist/img/avatar5.png" class="img-circle" width="45" height="45" alt="user"></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.html">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['user']['email'];?>
                                </a>

                                <a href="profile.html">
                                    <i class="fa fa-user"></i>
                                    <?php echo $_SESSION['user']['typeofuser'];?>
                                </a>
                            </li>

                            <li>
                                <a href="logout.php">
                                    <i class="fa fa-sign-out"></i> Signout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- sidebar menu -->
            <ul class="sidebar-menu" style="
    margin-top: 51px;
">

                <li class="active">
                    <a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                </li>





  <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-users"></i><span>News Category</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="newscategoryadd.php">Add News Category</a></li>
                        <li><a href="newscategory.php">View News Category</a></li>
                    </ul>
                </li>
          
                <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-users"></i><span>News</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="newsadd.php">Add News</a></li>
                        <li><a href="news.php">View News</a></li>
                    </ul>
                </li>







  <li class="treeview ">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Articles Category</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="articlescategoryadd.php">Add Articles Category</a></li>
                        <li><a href="articlescategory.php">View Articles Category</a></li>
                    </ul>
                </li>
          
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Articles</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="articlesadd.php">Add Articles</a></li>
                        <li><a href="articles.php">View Articles</a></li>
                    </ul>
                </li>


<li>
                    <a href="ads.php">
                        <i class="fa fa-envelope-o"></i> <span>Ads</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                </li>
              


               <!-- <li>
                    <a href="articles.php">
                        <i class="fa fa-envelope-o"></i> <span>Articles</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                </li>
              

                <li>
                    <a href="gallery.php">
                        <i class="fa fa-area-chart"></i> <span>Gallery</span>
                        <span class="pull-right-container">
                     </span>
                    </a>
                </li>
 -->

  <li class="treeview menu-open active">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Business Listing Main Category</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu ">
                         <li><a href="bicategoryadd.php">Add BI Main Category</a></li>
                        <li><a href="bicategoryview.php">View BI Main Category</a></li>
                    </ul>
                </li>





  <li class="treeview menu-open active">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Business Listing Sub Category</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu ">
                         <li><a href="bisubcategoryadd.php">Add BI Sub Category</a></li>
                        <li><a href="bisubcategoryview.php">View BI Sub Category</a></li>
                    </ul>
                </li>





   <li class="treeview menu-open active">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Business Listing's</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu ">
                       
                        <li><a href="businesslistingview.php">View Business Listing's</a></li>
                    </ul>
                </li>




                   
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i><span>Employee's</span>
                        <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="employeeadd.php">Add Employee's</a></li>
                        <li><a href="employee.php">View Employee's</a></li>
                    </ul>
                </li>

             

            </ul>
        </div>
        <!-- /.sidebar -->
    </aside>