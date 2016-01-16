<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elegant Theme - Free Website Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2030 Elegant
http://www.tooplate.com/view/2030-elegant
-->
<link href="<?php echo base_url()."assets/"; ?>tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/nivo-slider.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url()."assets/"; ?>js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false, 
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>

<div id="tooplate_wrapper">
	<div id="tooplate_header">
        <div id="site_title"><h1><a href="#">Elegant Template</a></h1></div>
    </div> <!-- end of forever header -->
    
    <div id="tooplate_menu">
        <ul>
            <li><a href="index.html" class="current">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html" class="last">Contact</a></li>
        </ul>    	
    </div> <!-- end of tooplate_menu -->
    
    <div id="tooplate_main">
    
       <!-- content -->
        <?php echo $content; ?>
       <!-- end content -->
                
            <div class="cleaner"></div>
        </div>

       <!-- sidebar -->
         <?php echo $sidebar; ?>
       <!-- end sidebar -->

        <div class="cleaner"></div>
	</div> <!-- end of main -->
        <!-- footer -->
         <?php echo $footer; ?>
        <!-- end footer -->
    
</div> <!-- end of wrapper -->

</body>
</html>