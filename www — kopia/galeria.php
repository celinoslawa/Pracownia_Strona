<!DOCTYPE HTML>
<html lang="pl">
    <body>
    <?php
    	$imagesTotal=12;
    	
    	$description[1] = 'fot. Agniefotszka Skawiańczyk';
		$description[2] = 'fot. Agniefotszka Skawiańczyk';
		$description[3] = 'fot. Agniefotszka Skawiańczyk';
		$description[4] = 'fot. Agniefotszka Skawiańczyk';
		$description[5] = 'fot. Agniefotszka Skawiańczyk';
		$description[6] = 'fot. Agniefotszka Skawiańczyk';
		$description[7] = 'fot. Agniefotszka Skawiańczyk';
		$description[8] = 'fot. Agniefotszka Skawiańczyk';
		$description[9] = 'fot. Agniefotszka Skawiańczyk';
		$description[10] = 'fot. Agniefotszka Skawiańczyk';
		$description[11] = 'fot. Agniefotszka Skawiańczyk';
		$description[12] = 'fot. Agniefotszka Skawiańczyk';

    ?>
    <div class="subcontainer">
    	<div class="content">
    		
    		<h2>Galeria</h2>
    		
			<div class="galleryThumbnailsContainer">
				<div class="galleryThumbnails">
                    <?php
                        for ($t = 1; $t <= $imagesTotal; $t++) {
                            echo '<a href="javascript: changeimage(' . $t . ')" class="thumbnailsimage' . $t . '">
                                    <div class="image-list-item" style="background-image: url(\'images/thumbs/image' . $t . '.jpg\')" alt=""></div>
                                  </a>';
                        }
                    ?>
				</div>
			</div>

			<div class="galleryPreviewContainer">
				<div class="galleryPreviewImage">
					<?php
						for ($i = 1; $i <= $imagesTotal; $i++) {
							echo '<div class="previewImage' . $i . '" style="background-image: url(\'images/image' . $i . '.jpg\'); " alt="" ></div>';
						}
					?>
				</div>

				<div class="galleryPreviewArrows">
					<a href="#" class="previousSlideArrow">&lt;</a>
					<a href="#" class="nextSlideArrow">&gt;</a>
				</div>
			</div>

			<div class="galleryNavigationBullets">
				<?php
					for ($b = 1; $b <= $imagesTotal; $b++) {
						echo '<a href="javascript: changeimage(' . $b . ')" class="galleryBullet' . $b . '"><span>Bullet</span></a> ';
					}
				?>
			</div>

			<div class="galleryDescription">
				<?php
					for ($x = 1; $x <= $imagesTotal; $x++) {
						echo '<div class="description' . $x . '">' . $description[$x] . '</div>';
					}
				?>
			</div>
		</div>
<script language="JavaScript" type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript">
// init variables
var imagesTotal = <?php echo $imagesTotal; ?>;
var currentImage = 1;
var thumbsTotalWidth = 0;


changeimage(currentImage);


// SET WIDTH for THUMBNAILS CONTAINER
$(window).load(function() {
	$('.galleryThumbnails a div').each(function() {
		thumbsTotalWidth += $(this).width() + 10 + 8;
	});
	$('.galleryThumbnails').width(thumbsTotalWidth);
    
});


// PREVIOUS ARROW CODE
$('a.previousSlideArrow').click(function() {
	$('div.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage--;

	if (currentImage == 0) {
		currentImage = imagesTotal;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('div.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");

	return false;
});
// ===================


// NEXT ARROW CODE
$('a.nextSlideArrow').click(function() {
	$('div.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('div.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");

	return false;
});
// ===================


// BULLETS CODE
function changeimage(imageNumber) {
	$('div.previewImage' + currentImage).hide();
	currentImage = imageNumber;
	$('div.previewImage' + imageNumber).show();

    
	$('.galleryNavigationBullets a').removeClass("active");
	$('.galleryThumbnails a').removeClass("active");
	$('.galleryDescription > div').removeClass("visible");

	$('a.galleryBullet' + imageNumber).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('div.description' + currentImage).addClass("visible");
}
// ===================


// AUTOMATIC CHANGE SLIDES
function autoChangeSlides() {
	$('div.previewImage' + currentImage).hide();
	$('a.galleryBullet' + currentImage).removeClass("active");
	$('a.thumbnailsimage' + currentImage).removeClass("active");
	$('div.description' + currentImage).removeClass("visible");

	currentImage++;

	if (currentImage == imagesTotal + 1) {
		currentImage = 1;
	}

	$('a.galleryBullet' + currentImage).addClass("active");
	$('a.thumbnailsimage' + currentImage).addClass("active");
	$('div.previewImage' + currentImage).show();
	$('div.description' + currentImage).addClass("visible");
}

var slideTimer = setInterval(function() {autoChangeSlides(); }, 50000);
</script>
    		
    		<div id="footer">
    		
    		Pracownia Krawiecka s.c. Cecylia Job, Agnieszka Job &copy; Wszelkie prawa zastrzeżone
    		
    		</div>
    	 
    	
    	
    	</div>
    	
    </body>    
</html>