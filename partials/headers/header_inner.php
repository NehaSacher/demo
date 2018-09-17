<!-- Header Starts -->
<header class="inner_page">
  <div class="top_menu">
    <div class="container">
      <!--  Top Nav and Logo Starts-->
      <!-- Desktop Top Menu Starts -->
      <nav class="navbar desktop_menu">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/">
              <img src="/assets/images/logo.png" alt="Logo" class="logo">
            </a>
          </div>
          <ul class="nav navbar-nav navbar-right desktop_menu">
            <li>
              <a class="nav-link" href="javascript:void(0);">About Us</a>
            </li>
            <li>
              <a class="nav-link" href="javascript:void(0);">Contact Us</a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);">English
                <i class="fa fa-angle-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="javascript:void(0);">French</a>
                </li>
                <li>
                  <a href="javascript:void(0);">Spanish</a>
                </li>
              </ul>
            </li>
            <li>
              <a class="nav-link" href="javascript:void(0);">Login</a>
            </li>
            <li class="navbar-text">
              <button>Find a Doctor or Hospital</button>
            </li>
            <li class="search_menu_item">
              <a class="nav-link" href="javascript:void(0);" onclick="openSearch()">Search</a>
            </li>
          </ul>
          <!-- <div class="search_menu_item">
                        <a class="nav-link" href="javascript:void(0);" onclick="openSearch()">Search</a>
                     </div> -->
        </div>
      </nav>
      <!-- Desktop Top Menu Ends -->
      <!-- Sticky Nav Starts -->
      <nav class="navbar navbar-fixed-top scrolled_nav not-sticky animated fast">
        <div class="container scrolled_nav_container">
          <ul class="nav navbar-nav">
            <li>
              <a class="nav-link" href="javascript:void(0);">
                <img src="/assets/images/homeicon.png" alt="">
              </a>
            </li>
            <li>
              <a class="nav-link" href="javascript:void(0);">Forms + Documents</a>
            </li>
            <li>
              <a class="nav-link" href="javascript:void(0);">Sales Tool</a>
            </li>
            <li>
              <a class="nav-link active" href="javascript:void(0);">Get a Quote</a>
            </li>
            <li>
              <a class="nav-link" href="javascript:void(0);">Plans + Network</a>
            </li>
            <li>
              <a class="nav-link" href="javascript:void(0);">Broker Portal Login</a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Sticky Nav Ends -->
      <!-- Mobile Menu Starts -->
      <nav class="navbar mobile_menu animated fadeIn">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar top-bar"></span>
              <span class="icon-bar middle-bar"></span>
              <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand" href="/">
               <img src="/assets/images/tufts_logo_black.png" alt="Logo" class="logo">
            </a>
            <div class="search_menu_item">
              <a class="nav-link" href="javascript:void(0);" onclick="openSearch()">Search</a>
            </div>
          </div>
          <div class="collapse navbar-collapse animated slideInRight" id="myNavbar">
            <div class="navbar-header">
              <a class="navbar-brand" href="/">
                <img src="/assets/images/tufts_logo_black.png" alt="Logo" class="logo">
              </a>
              <!-- <div class="btn-group btn-toggle"> 
                         <button class="btn btn-xs btn-primary active">English</button>
                         <button class="btn btn-xs btn-default">Spanish</button>
                      </div> -->
              <img src="/assets/images/close.png" alt="" class="mobile_menu_close">
            </div>
            <!--    <ul class="nav navbar-nav mobile_top_menu animated slideInRight">
                           <li class="active"><a href="javascript:void(0);">Visitors</a></li>
                           <li class="active"><a href="javascript:void(0);">Members + Individuals</a></li>
                           <li class="active"><a href="javascript:void(0);">Providers</a></li>
                           <li class="dropdown">
                              <a class="dropdown-toggle-top-menu" data-toggle="dropdown" href="#">Brokers</a>
                           </li>
                           <li><a href="javascript:void(0);">Employers</a></li>
                        </ul> -->
            <ul class="nav navbar-nav mobile_sub_menu Brokers">
              <li class="dl-back">
                <a href="javascript:void(0);">Brokers</a>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Forms + Documents</a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#">Sub Level Nav Item One</a>
                  </li>
                  <li>
                    <a href="#">Sub Level Nav Item Two</a>
                  </li>
                  <li class="dropdown-submenu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sub Level Nav Item Three</a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Tertiary Level Nav Item One</a>
                      </li>
                      <li>
                        <a href="#">Tertiary Level Nav Item Two</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="active">
                <a href="javascript:void(0);">Sales Tool</a>
              </li>
              <li class="active">
                <a href="javascript:void(0);">Get a Quote</a>
              </li>
              <li class="active">
                <a href="javascript:void(0);">Plans + Network</a>
              </li>
              <li class="active">
                <a href="javascript:void(0);">Broker Portal Login</a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="javascript:void(0);">About Us</a>
              </li>
              <li>
                <a href="javascript:void(0);">Contact Us</a>
              </li>
              <li>
                <a href="javascript:void(0);">Login</a>
              </li>
              <li>
                <a href="javascript:void(0);">Find a Doctor or Hospital</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Mobile Menu Ends -->
      <div id="myOverlay" class="overlay wow fadeIn fast">
        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">
          <img src="/assets/images/close.png" alt="">
        </span>
        <div class="overlay-content wow fadeInUp slow">
          <form>
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search Tufts Health Plan" name="search">
            <button type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Top Nav and Logo Ends-->
</header>
<!-- Header Ends -->