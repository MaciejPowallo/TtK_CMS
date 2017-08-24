<?php
error_reporting(E_ERROR | E_PARSE);
$imagesDir = 'app/res/images/investments/';
$images = glob($imagesDir . '*.{jpg,jpeg,png,gif,JPG,JPEG,GIF,PNG}', GLOB_BRACE);
$randomImage = $images[array_rand($images)];

for($i=0; $i<4; $i++){
	echo '<div class="row ">';

		for($j=0; $j<4; $j++){
			$randomImage = $images[array_rand($images)];
			if(isset($randomImage)){
			    echo '
	                <a data-lightbox="about" href="' . $randomImage . '" >
	                    <div  class="col-xs-3 box"><img  class="images" src="' . $randomImage . '" class="image" alt="image"></div>
	                </a>
				';
			}
			else{
			    echo '
	                <div  class="col-xs-3 box"><img  class="images" src="app/res/images/main/empty.gif" class="image" alt="image"></div>
				';
			}
		}
		
	echo '</div>';
}
