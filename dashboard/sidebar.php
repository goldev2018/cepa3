<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="dashboard.php">Admin Dashboard</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="dashboard.php">
          <i class="fa fa-fw fa-dashboard"></i>
          <span class="nav-link-text">Dashboard</span>
        </a>
      </li>
      <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-wrench"></i>
          <span class="nav-link-text">Carousel</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="upload_carousel.php">Upload images</a>
          </li>
          <li>
            <a href="carousel_images.php">View images</a>
          </li>
        </ul>
      </li> -->
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-sitemap"></i>
          <span class="nav-link-text">Contents</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseMulti">



         <!--  <li>
            <a  href="upload_news.php">News Room</a>
            <ul class="sidenav-third-level collapse" id="1">
              <a href="upload_news.php">Upload images</a>
            </ul>
          </li> -->
              <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#2">News Room</a>
              <ul class="sidenav-third-level collapse" id="2">
              
              <li>
                <a href="upload_news.php">Add News</a>
              </li>
              <li>
                <a href="edit_news.php">Edit/Delete News</a>
              </li>
              </ul>
              </li>
<!-- 
              <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#1">News Room</a>
              <ul class="sidenav-third-level collapse" id="<?php echo $collapseMulti4;?>">
              <li>
                <a href="upload_news.php">Upload images</a>
              </li>
              </ul>
              </li>
            </ul>
          </li> -->










          <!-- <li>
            <a href="#">EWC</a>
          </li>
          <li>
            <a href="#">EWI</a>
          </li> -->
        </ul>
      </li>
    </ul>
    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-cogs"></i>
          <span class="d-lg-none">Settings
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
          <span> <font color="black"> <strong><a href="change-password.php">Change Password</a></strong></font></span>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong><a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-sign-out"></i>Logout</a></strong>
          </a>
      </li>
    </ul>
  </div>
</nav>
