<?php 
/*
Template Name: My Awesome Custom Page
*/
 ?>

 <!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""><![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang=""><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=""><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>::...::<?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?>::...::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="<?php echo get_images_path(); ?>various/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?php echo get_images_path(); ?>favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Satisfy%7CMontserrat:400,700%7COpen+Sans:300,400,700,800' rel='stylesheet' />
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
  <script type="text/javascript" src="<?php echo get_scripts_path(); ?>jquery-1.7.1.min.js"></script>
  <script src="<?php echo get_scripts_path(); ?>modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body class="one-page header-transparent">
  <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!-- BEGIN PRELOADER -->
  <div class="loader-wrapper">
    <div class="loader-circle"></div>
  </div>
  <!-- END PRELOADER -->

  <div id="wrapper">

    <!-- BEGIN OFF ASIDE MENU -->
    <aside id="aside-nav">
      <div id="main-aside-navigation">
        <div class="main-nav-wrapper">
          <div class="close-aside-nav">
            <i class="nc-icon-outline ui-1_simple-remove"></i>
          </div>
          <div id="aside-logo">
             <a href="#" data-logo-light="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png" data-logo-dark="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png">
              <img width="170" height="166" src="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png" alt="logo">
            </a>
          </div>
          <nav id="main-aside-menu">
            <ul>
              <?php $pages = get_pages();
foreach($pages as $page) {
    echo "<li>". "<a href=" .' " ' .get_permalink( get_page_by_title( $page->post_title ) )  .' " ' .">" .$page->post_title ."</a>" ."</li>";

} ?>
            </ul>
          </nav>
          <footer>
            <a href="#" class="facebook">
              <span><i class="fa fa-facebook"></i></span>
            </a>
            <a href="#" class="instagram">
              <span><i class="fa fa-instagram"></i></span>
            </a>
            <a href="#" class="twitter">
              <span><i class="fa fa-twitter"></i></span>
            </a>
          </footer>
        </div>
      </div>
    </aside>
    <!-- END OFF ASIDE MENU -->

    <!-- BEGIN MAIN NAVIGATION -->
    <header id="header">
      <div id="main-navigation">
        <div class="main-nav-wrapper">
          <div class="container-fluid">
            <div class="nav-left">
              <div id="logo">
                <a href="overview" data-logo-light="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png" data-logo-dark="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png">
                  <img src="<?php echo get_images_path(); ?>logo/EyeDeux_MainLogo-01.png" alt="logo">
                </a>
              </div>
            </div>
            <div class="nav-right">
              <nav id="main-menu" class="current-dark">
                <ul>
                  <?php $pages = get_pages();
foreach($pages as $page) {
    echo "<li>". "<a href=" .' " ' .get_permalink( get_page_by_title( $page->post_title ) )  .' " ' .">" .$page->post_title ."</a>" ."</li>";

} ?>

                </ul>
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

    <!-- BEGIN MAIN CONTENT -->
    <div id="main-content">

      <!-- BEGIN PAGE TITLE -->
      <section id="page-title" class="page-title-full page-title-dark video-bg">
        <div class="video-wrapper">
          <div class="video-overlay"></div>
        </div>
        <div class="container" data-0="transform:translateY(-0px);opacity:1;" data-600="transform:translateY(80px);opacity:0;">
          h438
          <div class="page-title-wrapper">

            <!----Begin slider here-->

            <div id="da-slider" class="da-slider">
        <div class="da-slide">
          <h2>Easy management</h2>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"><img src="<?php echo get_images_path(); ?>2.png" alt="image01" /></div>
        </div>
        <div class="da-slide">
          <h2>Revolution</h2>
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"><img src="<?php echo get_images_path(); ?>3.png" alt="image01" /></div>
        </div>
        <div class="da-slide">
          <h2>Warm welcome</h2>
          <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"><img src="<?php echo get_images_path(); ?>1.png" alt="image01" /></div>
        </div>
        <div class="da-slide">
          <h2>Quality Control</h2>
          <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img"><img src="<?php echo get_images_path(); ?>4.png" alt="image01" /></div>
        </div>
        <nav class="da-arrows">
          <span class="da-arrows-prev"></span>
          <span class="da-arrows-next"></span>
        </nav>
      </div>

            <!--End slider-->
          </div>
        </div>
      </section>

      <section id="process" class="section half-section container m-t-60">
        <div class="text-element">
          <div class="text-element-wrapper p-l-0 p-t-0 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="text-element-inner">
              <h2 class="m-b-50">WHAT WE CAN ‘DEUX’ FOR YOU.</h2>
              <p>REVIEW THE MANY SERVICES EYE DEUX HAS TO OFFER.</p>
              <a href="#" class="btn btn-hg btn-purple btn-bordered m-t-50">Services</a>
            </div>
          </div>
        </div>
        <div class="p-t-70 animated" data-animation="fadeInUp" data-animation-delay="900">
          <img src="<?php echo get_images_path(); ?>home/EyeDeux_ServicesIMG.png" alt="mobile" data-parallax='{"y": -70, "smoothness": 30}'>
        </div>
      </section>

      <section id="design" class="section half-section container">
        <div class="p-t-60 animated" data-animation="fadeInUp" data-animation-delay="600">
          <img src="<?php echo get_images_path(); ?>home/EyeDeux_GalleryIMG.png"alt="ipad" data-parallax='{"y": -70, "smoothness": 30}'>
        </div>
        <div class="text-element">
          <div class="text-element-wrapper p-r-0 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="text-element-inner">
              <h2 class="m-b-50">TAKE A CLOSER LOOK</h2>
              <p>VIEW THE AWESOME RESULTS FROM OUR CLIENTS.</p>
              <a href="services-extended" class="btn btn-hg btn-purple btn-bordered m-t-50">Gallery</a>
            </div>
          </div>
        </div>
      </section>

      <section id="clients" class="section half-section container m-t-60">
        <div class="text-element">
          <div class="text-element-wrapper  p-l-0 p-t-0 animated" data-animation="fadeInUp" data-animation-delay="300">
            <div class="text-element-inner">
              <h2 class="m-b-50">START WITH EYE DEUX</h2>
              <p>INTERESTED IN A NEW CAREER PATH? VIEW OUR UPCOMING CLASSES.</p>
              <a href="#" class="btn btn-hg btn-purple btn-bordered m-t-50">Classes</a>
              <div class="counter counter-lg">
                <div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="p-t-60 t-right animated" data-animation="fadeInUp" data-animation-delay="600">
          <img src="<?php echo get_images_path(); ?>home/EyeDeux_ClassesIMG.png" alt="tablet" data-parallax='{"y": -70, "smoothness": 30}'>
        </div>
      </section>

  
    </div>

    <!-- BEGIN FOOTER -->
    <?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
    <!-- END FOOTER -->

  </div>

  <!-- BEGIN OFF FULLSCREEN SEARCH -->
  <div class="search-overlay overlay-dark">
    <a href="#" class="search-overlay-close"><i class="nc-icon-outline ui-1_simple-remove"></i></a>
    <form action="search-result" method="post">
      <input type="search" placeholder="Search...">
      <button type="submit"><i class="nc-icon-outline ui-1_zoom-split"></i></button>
    </form>
  </div>
  <!-- END OFF FULLSCREEN SEARCH -->

  
  <a href="#" class="scrollup">
    <i class="nc-icon-outline arrows-1_minimal-up"></i>
  </a>

  <script type="text/javascript" src="<?php echo get_scripts_path(); ?>jquery.cslider.js"></script>
    <script type="text/javascript">
      $(function() {
      
        $('#da-slider').cslider({
          autoplay  : true,
          bgincrement : 450
        });
      
      });
    </script>
</body>
</html>