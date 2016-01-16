	<div id="tooplate_content">
           		<div id="homepage_slider">
                    <div id="slider">
                        <a href="#"><img src="<?php echo base_url()."assets/images/"; ?>slideshow/01.jpg" alt="Slide 01" title="Nam fermentum lacus suscipit diam feugiat fringilla." /></a>
                        <a href="#"><img src="<?php echo base_url()."assets/images/"; ?>slideshow/02.jpg" alt="Slide 02" title="Proin bibendum est id velit tincidunt ut sodales ligula facilisis." /></a>
                        <a href="#"><img src="<?php echo base_url()."assets/images/"; ?>slideshow/03.jpg" alt="Slide 03" title="Fusce tincidunt diam eu metus iaculis hendrerit." /></a>
                        <a href="#"><img src="<?php echo base_url()."assets/images/"; ?>slideshow/04.jpg" alt="Slide 04" title="Nulla faucibus luctus quam eget placerat. " /></a>
                        <a href="#"><img src="<?php echo base_url()."assets/images/"; ?>slideshow/05.jpg" alt="Slide 05" title="Aliquam quis velit et sem vestibulum dignissim." /></a>
                    </div>
                </div>
               <?php foreach ($contents as $content) { ?>
               
                <div class="post_box">
                	<div class="date_box">
                    	<div class="date"><?php echo date('d',strtotime($content['tanggal'])) ?><span><?php echo date('M Y',strtotime($content['tanggal'])); ?></span></div>
                        <div class="post_comment">123 comments</div>
                    </div>
					
                    <div class="post_box_right">
                        <h2><?php echo $content['judul_konten']; ?></h2>
                        <div class="post_meta"><a href="#"><?php echo $content['penulis']; ?></a></div>
                        <p><?php echo $content['isi']; ?></p>
                         <a href="blog_post.html" class="more float_r">Continue Reading</a>
                    </div>
					
                    <div class="cleaner"></div>
				</div>
                <?php } ?>
                    