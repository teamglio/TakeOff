<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $ideaname; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        margin: auto;
        background-image: url('img/back.png');
        padding-top: 0px;
        padding-bottom: 40px;
      }

      .social {
        margin-top: 50px;

      }

      .socialspan {
        text-align: center;
        font-size: 50px;
      }

      .social a:link, .social a:hover{
text-decoration: none;

      }

      .well {
 background-color: #cfcfcf;

      }

      .tagline {

        text-align: center;
        margin-bottom: 20px;
      }

      .logo {
        padding: 50px;
        text-align: center;
      }
      a {
        color: <?php echo $color; ?> !important;

      }
     
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.css">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="img/logo.png">

  </head>

  <body>

  
    <div class="container" style="width: 500px;">

      <div class="logo">

<img src="<?php echo $ideatag ?>" />

      </div>

      <div class="tagline">
          <h4><?php echo $ideatag ?></h4>

        </div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h2><?php echo $ideaname; ?></h2>
        

        <p>
          <?php echo $ideatext ?>

        </p>
        <div class="well">
          <h2>Sign Up &raquo;</h2>
          


        <form class="input-prepend form-search" action="Subscribe.php" method="post">
          <span class="add-on">Email</span><input class="span2" id="appendedPrependedInput" size="16" type="email" name="email">
  <button type="submit" class="btn">Sign Up  &raquo;</button>
</form>

        </div>
      </div>

      <!-- Example row of columns -->
      <div class="row social">
        
        <?php if ($twitter != null) {
        echo '<div class="span2 socialspan" class="twitter"><a href="http://www.twitter.com/';
        echo $twitter;
        echo '"><i class="icon-twitter-sign icon-large" target="_blank"></i></a></div>';
        }; ?>

        <?php if ($facebook != null) {
         echo '<div class="span2 socialspan" class="facebook"><a href="http://www.facebook.com/';
         echo $facebook;
         echo '"><i class="icon-facebook-sign icon-large" target="_blank"></i></a></div>';
        }; ?>

        <?php if ($plus != null) {
         echo '<div class="span2 socialspan" class="plus"><a href="';
         echo $plus;
         echo '"><i class="icon-google-plus-sign icon-large"></i></a></div>';
        }; ?>
        
      </div>

      <hr>

      <footer>
        <p>&copy; <?php echo $ideaname; ?> <?php echo $copyrightyear; ?></p>
      </footer>

    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
