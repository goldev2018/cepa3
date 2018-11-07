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



          <li>
            <a  href="upload_news.php">News Room</a>
            <!-- <ul class="sidenav-third-level collapse" id="1">
              <a href="upload_news.php">Upload images</a>
            </ul> -->
          </li>
              <!-- <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#2">Web contents</a>
              <ul class="sidenav-third-level collapse" id="2">
              
              <li>
                <a href="webcontents.php?page=color&name=<?php echo $row['webpage_name']; ?>">News Room</a>
              </li>
              </ul>
              </li> -->
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
      <!--<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-fw fa-envelope"></i>
          <span class="d-lg-none">Messages
            <span class="badge badge-pill badge-primary">12</span>
          </span>
          <span class="indicator text-primary d-none d-lg-block">
            <i class="fa fa-fw fa-circle"></i>
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <h6 class="dropdown-header">New Messages:</h6>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>David Miller</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>Jane Smith</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong>John Doe</strong>
            <span class="small float-right text-muted">11:21 AM</span>
            <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item small" href="#">View all messages</a>
        </div>
      </li> -->
          <!-- Search input and button
          <li class="nav-item">
        <form class="form-inline my-2 my-lg-0 mr-lg-2">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-primary" type="button">
                <i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
      </li> -->
      <li class="nav-item dropdown">
        <a class="dropdown-item" href="#">
            <font color="white"><strong><a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-sign-out"></i></a></strong></font>
          </a>
        <!-- <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-cogs"></i>
          <span class="d-lg-none">Settings
          </span>
        </a>
        <div class="dropdown-menu" aria-labelledby="messagesDropdown">
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <strong><a data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-sign-out"></i>Logout</a></strong>
          </a> -->
      </li>
    </ul>
  </div>
</nav>
