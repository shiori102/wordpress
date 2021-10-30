<!DOCTYPE html>
<html lang="en">
<head>
    <!-- loading css file -->
    <?php wp_head(); ?>
    

</head>
<body>
<!-- how to create a header -->
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
            <!-- refers back to the home page bc you did not provide a file path -->
          <a href="<?php echo site_url()?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('file path')?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>  

<!-- remove the closing head and body tags and adding them to the footer.php file -->





