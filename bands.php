<?php 
include("app/init.php");
include('app/settings/models/m_settings.php');
$settings = new Settings();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset=utf-8>
   <meta name=viewport content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>css/main-style.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>lightbox/css/lightbox.css">
   <script src="<?php echo APP_RES?>js/jquery-3.2.1.min.js"></script>
   <?php $CMS->head(); ?>

   <title> 
      <?php 
         if(isset($_GET['name'])){ 
            echo $_GET['name'];
         } 
         else{
            echo 'Bands';
         } 
      ?> 
   </title>
</head>
<body>
   <?php $CMS->toolbar(); ?>
   <!-- Navigation -->
   <section class="row">
      <?php $CMS->navigation(); ?>
   </section>

   <!-- Image bg -->
   <section id="bg_nav">
      <img src="<?php echo APP_RES?>/images/main/bg.png" class="bg_image_top_page" alt="bg">
   </section>

   <!-- Content -->
   <?php 
   if(!isset($_GET['name']) || $_GET['name'] == '') {?>
      <section id="bands_list" class="container marg-top-2">
         <?php include('controllers/alerts.php'); ?>
         <h2 class="text-center">Zespoły muzyczne</h2>
         <?php include('views/advertisement.php'); ?>
         <?php include('controllers/bands_list.php'); ?>
         <div class="text-red marg-top-1"><strong>lość zespołów w bazie: <?php echo $settings->countBands(); ?></strong></div>
         <!-- addblock detector -->
      </section>
   <?php 
   } 
   else { ?>
      <section id="bands_list" class="container marg-top-2">
         <?php include('controllers/alerts.php'); ?>

         <?php $name = $_GET['name']; ?>
         <?php include('controllers/bands_item.php'); ?>
      </section>
   <?php 
   } ?>

   <!--    Advertisement       -->
   <section id="advertisement" class="container">
      <div class="advertisement col-xs-12">
         <?php include('views/advertisement.php'); ?>
      </div>
   </section>

   <!--      Fb comments       -->
   <section id="fb-comments" class="container">
      <div class="col-md-10 col-md-offset-1 col-sm-12 marg-top-3">
         <div id="fb-root"></div>
         <div class="fb-comments" data-href="<?php echo PAGE_PATH; ?>" data-numposts="5" data-mobile="Auto-detected" data-order-by="reverse_time" data-width="100%"></div>
      </div>
   </section>

   <!-- footer -->
   <footer class="container-fluid text-center marg-top-4">
      <?php include('app/core/templates/t_footer.php'); ?>
   </footer>

   <!-- scripts -->
   <script src="<?php echo APP_RES?>/lightbox/js/lightbox.js"></script>
   <script src="<?php echo APP_RES?>/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo APP_RES?>/js/main-style.js"></script>
   <script src="<?php echo APP_RES?>/js/scroll-to-top.min.js"></script>

   <!-- scroll-to-top -->
   <a href="" id="scroll-to-top" >
      <span class="scroll-top fa-stack fa-2x fixed-up">
         <i class="fa fa-circle fa-stack-2x fa-check"></i>
         <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
      </span>
   </a>

</body>
</html>