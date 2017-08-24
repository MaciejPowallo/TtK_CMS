    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php SITE_PATH;?>/"><img class="logo" src="<?php echo APP_RES?>/images/main/logo.png" alt=""></a>
            </div>

 <!-- Menu tabs-->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php SITE_PATH;?>/">Strona główna</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php SITE_PATH;?>/about.php">O nas</a>
                    </li>
			      	<li id="drop" class="dropdown">
			        <a class="dropdown-toggle" id="drop" data-toggle="dropdown" href="#">Inwestycje<span class="caret"></span></a>
				        <ul class="dropdown-menu">
      						<li class="dropdown-header">W SPRZEDAŻY</li>
				          	<li><a class="page-scroll indentation" href="<?php SITE_PATH;?>/forsale/detached-house.php">Domy wolnostojące</a></li>
				          	<li><a class="page-scroll indentation" href="<?php SITE_PATH;?>/forsale/semi-detached-house.php">Domy bliźniacze</a></li>
				          	<li><a class="page-scroll indentation" href="<?php SITE_PATH;?>/forsale/terraced-house.php">Domy szeregowe</a></li>
      						<li class="divider"></li>
      						<li class="dropdown-header">SPRZEDANE</li>
                            <li><a class="page-scroll indentation" href="<?php SITE_PATH;?>/sold/detached-house.php">Domy wolnostojące</a></li>
                            <li><a class="page-scroll indentation" href="<?php SITE_PATH;?>/sold/semi-detached-house.php">Domy bliźniacze</a></li>
                            <li><a class="page-scroll indentation" href="<?php SITE_PATH;?>/sold/terraced-house.php">Domy szeregowe</a></li>
      						<li class="divider"></li>
				        </ul>
			      	</li>
                    <li>
                        <a class="page-scroll" href="<?php SITE_PATH;?>/news.php"">Aktualności</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php SITE_PATH;?>/contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>