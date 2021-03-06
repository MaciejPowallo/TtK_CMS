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
   <meta name="Description" content="Portal Reggae Polskie to wszystko czego potrzebujesz o muzyce Reggae/Ragga/Dancehall/Ska/Dub oraz kulturze Rastafari w jednym miejscu. Naszym celem jest promowanie muzyki reggae, imprez i artystów grających nie tylko reggae, ale wszystkie gatunki oscylujące wokół tej muzyki. Reggae Polskie jest DOBRE, BO POLSKIE."/>
   <meta name="Keywords" content="reggae, regee, ragga, rege, redzi,  regge, raga, polskie+reggae, reggaepolskie, polskiereggae, roots, dancehall, ska, dub, roots, rockers, polskie, zespoły, maniek, historia, bob, marley, kultura, aktualnosci, plyty, albumy, cd, gatunki,  odmiany, rastafari, koncerty, słownik, slownik, muzyka, muza, music, polish, polen, soundsystem, sound, system, opolskie, opole, namysłów, raggamaniek">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>css/main-style.min.css">
   <script src="<?php echo APP_RES?>js/jquery-3.2.1.min.js"></script>
   <?php $CMS->head(); ?>
   <title>Home</title>
</head>
<body>
   <!--      Toolbar      -->
   <?php $CMS->toolbar(); ?>

   <!--      Navigation      -->
   <section class="row">
      <?php $CMS->navigation(); ?>
   </section>

   <!--      Carousele       -->
   <section class="row">
      <?php include('controllers/index_carousel.php'); ?>
   </section>

   <!-- Image bg -->
   <section id="bg_nav">
      <img src="<?php echo APP_RES?>/images/main/bg.png" class="bg_image_index" alt="">
   </section>

   <!--      News       -->
   <section id="news" class="container">
      <div class="col-sm-8 marg-top-1">	
         <?php include('controllers/index_news.php'); ?>
      </div>
      <div class="advertisement col-sm-4">
         <?php include('views/advertisement.php'); ?>
      </div>
   </section>
     
   <!--      Links       -->
   <section id="links" class="row col-xs-12 text-center links-marg">
      <div>
         <?php include('controllers/index_links.php'); ?>
      </div>
      <div class="advertisement col-xs-12">
         <?php include('views/advertisement.php'); ?>
      </div>
   </section>

   <!--      Fb comments       -->
   <section id="fb-comments" class="container">
      <div class="col-md-10 col-md-offset-1 col-sm-12 marg-top-3">
         <div id="fb-root"></div>
         <div class="fb-comments" data-href="<?php echo SITE_PATH; ?>" data-numposts="5" data-mobile="Auto-detected" data-order-by="reverse_time" data-width="100%"></div>
      </div>
   </section>

   <!--      Footes       -->
   <footer class="container-fluid text-center marg-top-4">
      <?php include('app/core/templates/t_footer.php'); ?>
   </footer>

   <!--      scripts      -->
   <script src="<?php echo APP_RES?>bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo APP_RES?>js/main-style.js"></script>
   <script src="<?php echo APP_RES?>js/facebook-comments.js"></script>
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