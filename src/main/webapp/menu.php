<?php   ?>

 <body>
  <div id="app_wrapper">
    <header id="app_topnavbar-wrapper">
      <nav role="navigation" class="navbar topnavbar">
        <div class="nav-wrapper">
          <ul class="nav navbar-nav pull-left left-menu">
            <li class="app_menu-open">
              <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                <i class="zmdi zmdi-menu"></i>
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav left-menu hidden-xs">
            <li>
              <a href="javascript:void(0)" class="nav-link">
                <b>INSTANT PLASMA DONOR</b>
              </a>
            </li>
          
          
          </ul>
          <ul class="nav navbar-nav pull-right">
            <li class="dropdown avatar-menu">
              <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                <span class="meta">
                  <span class="avatar">
                    <img src="assets/img/user.jpg" alt="" class="img-circle max-w-35">
                    <i class="badge mini success status"></i>
                  </span>
                  <span class="name"><?php echo $_SESSION['name'];?></span>
                  <span class="caret"></span>
                </span>
              </a>
              <ul class="dropdown-menu btn-primary dropdown-menu-right">
               
                  <a href="logout.php"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
                </li>
              </ul>
            </li>
            
            
            
          </ul>
        </div>
        
      </nav>
    </header>
<aside id="app_sidebar-left">
      <div id="logo_wrapper">
        <ul>
          <li class="logo-icon">
            <a href="index-2.html">
              <div class="logo">
                <img src="assets/img/logo.jpg" alt="Logo">
              </div>
              <h1 class="brand-text"><?php echo $_SESSION['name']; ?></h1>
            </a>
          </li>
          <li class="menu-icon">
            <a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
              <i class="mdi mdi-backburger"></i>
            </a>
          </li>
        </ul>
      </div>
      <nav id="app_main-menu-wrapper" class="fadeInLeft scrollbar">
        <div class="sidebar-inner sidebar-push">
          <ul class="nav nav-pills nav-stacked">
             <?php if($_SESSION['id'] == '1'){ ?>

                  <li class="sidebar-header">Admin Menu</li>
                  <li class="nav-dropdown">
                  
                  <li><a href="add_hospital.php">Hospitals</a></li>
                  <li><a href="add_bloodbank.php">Blood Banks</a><li>
                  <li><a href="view_users.php">View Users</a><li>
                  


              <?php } else if($_SESSION['id'] == '2'){ ?>

                       
                   <li class="sidebar-header">Users Menu</li>
                  <li class="nav-dropdown">
                  
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="view_hospitals.php">View Hospitals</a></li>
                  <li><a href="view_bloodbanks.php">View Blood Banks</a></li>
                  <li><a href="viewusers.php">View Donors</a></li>

              
                   
             
              <?php } ?>
              </ul>
          </div>
        </nav>
      </aside>

<?php require_once('footer.php'); ?>