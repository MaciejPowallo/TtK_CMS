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
   <script src="<?php echo APP_RES?>js/jquery-3.2.1.min.js"></script>
   <?php $CMS->head(); ?>

   <title>Company Name</title>

</head>
<body>

   <!--      Toolbar      -->
   <?php $CMS->toolbar(); ?>

   <!--      Navigation      -->
   <div class="row">
      <?php $CMS->navigation(); ?>
   </div>

   <!--      Carousele       -->
   <div class="row">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="item active">
               <?php  
                  $id_image = 1;
                  $settings->selectCarouselImage($id_image);     
               ?>  
            </div>
            <div class="item">
               <?php  
                  $id_image = 2;
                  $settings->selectCarouselImage($id_image);     
               ?>  
            </div>
            <div class="item">
               <?php  
                  $id_image = 3;
                  $settings->selectCarouselImage($id_image);     
               ?> 
            </div>
         </div>

         <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div>

   <!--      Links       -->
   <div class="col-sm-12 text-center">
      <div class="col-md-4">
         <div class="thumbnail box-shadow">
            <a href="<?php SITE_PATH;?>forsale/detached-house.php">
               <?php  
                  $id_image = 4;
                  $settings->selectCarouselImage($id_image);     
               ?> 
               <div class="caption">
                  <p class="title">Domy parterowe wolnostojące</p>
               </div>
            </a>
         </div>
      </div>
      <div class="col-md-4">
         <div class="thumbnail box-shadow">
            <a href="<?php SITE_PATH;?>forsale/semi-detached-house.php">
               <?php  
                  $id_image = 5;
                  $settings->selectCarouselImage($id_image);     
               ?> 
               <div class="caption">
                  <p class="title">Domy w zabudowie bliźniaczej</p>
               </div>
            </a>
         </div>
      </div>
      <div class="col-md-4">
         <div class="thumbnail box-shadow">
            <a href="<?php SITE_PATH;?>forsale/terraced-house.php">
               <?php  
                  $id_image = 6;
                  $settings->selectCarouselImage($id_image);     
               ?> 
               <div class="caption">
                  <p class="title">Domy parterowe w zabudowie bliźniaczej</p>
               </div>
            </a>
         </div>
      </div>
   </div>

   <!--      News       -->
   <div class="container">
      <div class="col-sm-8  news-space">	
         <?php include('controllers/news_index.php'); ?>
      </div>

      <div class="col-sm-4">
         <div class="row sale">
            <div class="container thumbnail">
               <img src="<?php echo APP_RES?>/images/main/kosikowski.png" alt="Name" class="image">
               <a href="https://www.kosikowski.com.pl/" target="blank">
                  <div class="overlay">
                     <div class="text text-center">
                        <i class="fa fa-handshake-o fa-3x" aria-hidden="true"></i><br>
                        Firma realizująca sprzedaż nieruchomości<br>
                        <small><i class="fa fa-phone" aria-hidden="true"></i> (+48) 77 411 22 33</small>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>

   <!--      Footes       -->
   <footer class="container-fluid text-center offset-top">
      <?php include('app/core/templates/t_footer.php'); ?>
   </footer>

   <!--      scripts      -->
   <script src="<?php echo APP_RES?>bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo APP_RES?>js/main-style.js"></script>
   <script src="<?php echo APP_RES?>js/scroll-to-top.min.js"></script>

   <!--      scroll-to-top      -->
   <a href="" id="scroll-to-top" >
      <span class="scroll-top fa-stack fa-2x fixed-up">
         <i class="fa fa-circle fa-stack-2x fa-check"></i>
         <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
      </span>
   </a>
</body>
</html>