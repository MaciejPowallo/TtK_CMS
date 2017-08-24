<?php include("app/init.php") ?>
<!DOCTYPE html>
<html>
<head>
		<meta charset=utf-8>
		<meta name=viewport content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_RES?>/css/main-style.min.css">
    <script src="<?php echo APP_RES?>/js/jquery.min.js"></script>

		<?php $CMS->head(); ?>
	  <title>Kontakt - Nazwa firmy</title>

</head>
<body>
		<?php $CMS->toolbar(); ?>
    
<!-- Navigation -->
<div class="row">
  <?php $CMS->navigation(); ?>
</div>

<!-- Image bg -->
<section id="bg_nav">
    <img src="<?php echo APP_RES?>/images/main/black-and-white.jpeg" class="bg_image_top_page" alt="bg">
</section>

<section id="name_block">
  <div class="container">

      <div class="col-sm-5 col-sm-offset-1 name">
        <h3>Nazwa firmy</h3>
        <h3>ul. Jakaś 15, 11-222 Wrocław</h3>
      </div>
      <div class="col-sm-5 col-sm-offset-1 name">        
        <h3><i class="fa fa-phone-square" aria-hidden="true"></i> 111 222 333</h3>
        <h3><i class="fa fa-envelope" aria-hidden="true"></i> email&#64;example.com</h3>
      </div>
  </div>
</section>

<section  id="map" >
  <div class="map_overlay" onClick="style.pointerEvents='none'"></div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7824.408292185774!2d-77.01497462877735!3d38.89840615021885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7729f629ff08f%3A0xf6fd37328818c73a!2sGoogle!5e0!3m2!1spl!2spl!4v1503606451436" width="900" height="300" frameborder="0" allowfullscreen></iframe>

</section>

<section id="empty_block">
  <div></div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="row">
      <div class="col-lg-12 text-center">
          <h2 class="section-heading">Kontakt</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-12">
          <form name="sentMessage" id="contactForm" novalidate>
              <div class="row"> 
                  <div class="col-md-6">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Imię i nazwisko *" id="name" required data-validation-required-message="Musisz podać swoj imię i nazwisko">
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" placeholder="Emial *" id="email" required data-validation-required-message="Musisz podać swój email" data-validation-email-message="Nieprawidłowy email">
                          <p class="help-block text-danger"></p>
                      </div>
                      <div class="form-group">
                          <input type="tel" class="form-control" placeholder="Numer telefonu" id="phone">
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="form-group">
                          <textarea class="form-control" placeholder="Treść wiadomości *" id="message" required data-validation-required-message="Muisz podać treść wiadomości"></textarea>
                          <p class="help-block text-danger"></p>
                      </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-xs-12 text-center">
                      <div id="success"></div>
                      <button type="submit" class="btn btn-xl">Wyślij</button>
                      <button type="reset" class="btn btn-xl">Wyszyść</button>
                  </div>
              </div>
          </form>
      </div>
  </div>
</section>


<!-- footer -->
<footer class="container-fluid text-center offset-top">
  <?php include('app/core/templates/t_footer.php'); ?>
</footer>

<!-- scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="<?php echo APP_RES?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo APP_RES?>/js/main-style.js"></script>
	<script src="<?php echo APP_RES?>/js/scroll-to-top.min.js"></script>
  <script src="<?php echo APP_RES?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo APP_RES?>/js/contact_me.js"></script>

<!-- scroll-to-top -->
  <a href="" id="scroll-to-top" >
        <span class="scroll-top fa-stack fa-2x fixed-up">
            <i class="fa fa-circle fa-stack-2x fa-check"></i>
            <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
        </span>
  </a>
</body>
</html>