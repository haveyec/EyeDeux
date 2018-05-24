<link rel="stylesheet" href="<?php echo get_scripts_path(); ?>libs/font-awesome/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_path(); ?>libs/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>icons/nucleo.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_path(); ?>libs/animate.css/animate.min.css"/>
  <!-- BEGIN PAGE STYLE -->
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>text-animation.css"/>
  <!-- END PAGE STYLE -->
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>buttons.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>builder.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>colors.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>footers.css"/>    
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>main.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>nav.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>master.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>preloader.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>themes.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>ui.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>widgets.css"/>
  <link rel="stylesheet" href="<?php echo get_scripts_css_path(); ?>style2.css"/>
  <script type="text/javascript" src="<?php echo get_scripts_path(); ?>jquery-1.7.1.min.js"></script>
  <script src="<?php echo get_scripts_path(); ?>master.js"></script>
  <script src="<?php echo get_scripts_path(); ?>modernizr-2.8.3-respond-1.4.2.min.js"></script>

  <!-- BEGIN MAIN NAVIGATION -->
    <header id="header">
      <div id="main-navigation">
        <div class="main-nav-wrapper">
          <div class="container-fluid">
            <div class="nav-left">
              <div id="logo">
                <a href="../index.php" data-logo-light="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png" data-logo-dark="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png">
                  <img src="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png" alt="logo">
                </a>
              </div>
            </div>
            <div class="nav-right">
              <nav id="main-menu" class="current-dark">
               <?php wp_page_menu(); ?>
              </nav>
              <ul class="nav-tools">
                <li class="search-tool">
                  <a href="#" class="tools-btn" data-toggle-search="fullscreen">
                    <span class="tools-btn-icon"><i class="nc-icon-outline ui-1_zoom"></i></span>
                  </a>
                </li>
                <li class="mobile-menu-btn">
                  <button class="toggle-menu" data-toggle="mobile-menu" data-effect="hover">
                    <span class="menu-label label-left">Menu</span>
                    <i class="nc-icon-outline ui-2_menu-35"></i>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- END MAIN NAVIGATION -->
