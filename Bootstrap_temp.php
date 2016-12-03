<?php
/*Template Name:Bootstrap_juyal
*/
wp_head();
?>
<div class="bheader">
	<div class="row">
		<div class="col-md-offset-1 col-md-4">
			<h3 class="start_boot1"><b>START BOOTSTRAP</b></h3>
		</div>
		<div class="col-md-7">
				<nav class="navbar navbar-default">
					<div class="container-fluid" >
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle btn_togg" data-toggle="collapse" data-target="#top-navbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span> 
					      </button>
					 </div>
					 <div class="collapse navbar-collapse" id="top-navbar">
						<ul class="nav navbar-nav bulclass">
					        <li class="home"><a href="#">HOME</a></li>
					        <li class="port"><a href="#portfolio">PORTFOLIO</a></li>
					        <li class="abt"><a href="#about">ABOUT</a></li> 
					        <li class="cnt"><a href="#contactme">CONTACT ME</a></li> 
    					 </ul>
					</div>
					</div>
				</nav>
		</div>
	</div>
</div>
<div class="bimage_part" >
	<center>
		<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/profile.png'?>">
		<h1 class="start_boot"><b>START BOOTSTRAP</b></h1>
		<h2 class="hr_star"><i class="fa fa-star star_row"></i></h2>
		<h3><b>Web Developer - Graphic Artist - User Experience Designer</b></h3>
	</center>
</div>
<div class="bportfolio" id="portfolio">
	<center>
		<h1 class="b_head"><b>PORTFOLIO</b></h1>
		<h2 class="hr_star"><i class="fa fa-star star_row2"></i></h2>
		<br>
		</br>
		<br>
		<div class="row">
			<div class="col-md-4">
			<div id="im1" onmouseenter="bmouseimg(this.id)" onmouseleave="bmouselev(this.id)"  onclick="clickimg(this.id)"data-toggle="modal" data-target="#myModal2">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/im1.png'?>" class="img-responsive bimg">
				<i class="fa fa-search-plus" id="searchplus"></i>
			</div>
			</div>
			<div class="col-md-4">
			<div id="im2"  onmouseenter="bmouseimg(this.id)" onmouseleave="bmouselev(this.id)" onclick="clickimg(this.id)" data-toggle="modal" data-target="#myModal2">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/im2.png'?>"  class="img-responsive bimg" >
				<i class="fa fa-search-plus" id="searchplus"></i>
			</div>
			</div>
			<div class="col-md-4">
			<div id="im3"  onmouseenter="bmouseimg(this.id)" onmouseleave="bmouselev(this.id)" onclick="clickimg(this.id)" data-toggle="modal" data-target="#myModal2">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/im3.png'?>"  class="img-responsive bimg">
				<i class="fa fa-search-plus" id="searchplus"></i>
			</div>
			</div>
		</div>
		<br>
 		</br>
		<div class="row">
			<div class="col-md-4">
				<div id="im4"  onmouseenter="bmouseimg(this.id)" onmouseleave="bmouselev(this.id)" onclick="clickimg(this.id)" data-toggle="modal" data-target="#myModal2">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/im4.png'?>"  class="img-responsive bimg" >
				<i class="fa fa-search-plus" id="searchplus"></i>
			</div>
			</div>
			<div class="col-md-4">
				<div id="im5"  onmouseenter="bmouseimg(this.id)" onmouseleave="bmouselev(this.id)" onclick="clickimg(this.id)" data-toggle="modal" data-target="#myModal2">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/im5.png'?>"  class="img-responsive bimg">
				<i class="fa fa-search-plus" id="searchplus"></i>
			</div>
			</div>
			<div class="col-md-4">
 			<div id="im6"  onmouseenter="bmouseimg(this.id)" onmouseleave="bmouselev(this.id)" onclick="clickimg(this.id)" data-toggle="modal" data-target="#myModal2">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/image_boot/im6.png'?>"  class="img-responsive bimg">
				<i class="fa fa-search-plus" id="searchplus"></i>
			</div>
			</div>
		</div>
	</center>
</div>
<div class="babout" id="about">
<center>
	<h1 class="b_head"><b>ABOUT</b></h1>
	<h2 class="hr_star"><i class="fa fa-star star_row3"></i></h2>
	<br>
	</br>
	<br>
	<div class="row">
		<div class="col-md-offset-2 col-md-4">
			<p>Freelancer is a free bootstrap theme created by Start Bootstrap.
			 The download includes the complete source files including HTML, CSS, and JavaScript as well as optional LESS stylesheets for easy customization.</p>
		</div>
		<div class="col-md-4">
			<p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects, this template is the perfect starting point!</p>
		</div>
	</div>
	<br>
	</br>
	<button class="download"><i class="fa fa-download" style="color:black;"></i><b> Download Theme</b></button>
</center>
</div>
<div class="bcontactme" id="contactme">
	<center>
		<h1 class="b_head"><b>CONTACT ME</b></h1>
		<h2 class="hr_star"><i class="fa fa-star star_row4"></i></h2>
		<br>
		</br>
		<br>
		<form class="form-group">
		<input class="input-lg" type="text" placeholder="Name"><br>
		<input class="input-lg" type="text" placeholder="Email Address"><br>
		<input class="input-lg" type="text" placeholder="Phone Number"><br>
		<textarea class="input-lg textarea"  placeholder="Message"></textarea><br>
		</form>
	</center>
	<button class="btn-lg btn-info bbtn_send">Send</button>
</div>
<div class="bfooter">
	<div class="row">
		<center><div class="col-md-offset-1 col-md-3">
			<h3>LOCATION</h3>
			<br>
			<h4>3481 Melrose Place<br> 
Beverly Hills, CA 90210</h4>
			</div>
			<div class="col-md-4">
				<h3>AROUND THE WEB</h3>
				<br>
				<i class="fa fa-facebook bfb"></i>
				<i class="fa fa-google-plus bgplus"></i>
				<i class="fa fa-twitter "></i>
				<i class="fa fa-pinterest-p bpin"></i>
				<i class="fa fa-apple bapp"></i>
			</div>
			<div class="col-md-3">
				<h3>ABOUT FREELANCER</h3>
				<br>
				<h4>Freelance is a free to use, open source Bootstrap theme created by <a href="">Start Bootstrap.</a></h4>
			</div>
		</center>
	</div>
</div>
<div class="bfooter2"><p>Copyright © Your Website 2016</p></div>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <center><h3 class="modal-title"><b>------PORTFOLIO------</b></h3></center>
      </div>
      <div class="modal-body">
        <center><img src="" id="bkimage">
        <br>
        </br>
        <p><em>Use this area of the page to describe your project.
         The icon above is part of a free icon set by Flat Icons. On their website, you can download their free set with 16 icons, 
        or you can purchase the entire set with 146 icons for only $12!</em></p>
        </center>
      </div>
    </div>

  </div>
</div>
