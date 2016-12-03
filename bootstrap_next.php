<?php
/* Template Name: Bootstrap_next
*/
wp_head();
?>
<i class="fa fa-bars" id="bars"></i>
<div class="slideup">
	<i class="fa fa-angle-double-up upp" ></i>
</div>
<div id="slide_menu">
	<i class="fa fa-remove"></i>
	<?php wp_nav_menu(array('theme_location'=>'primary','menu_class'=>'nav nul','container_class'=>'collapse navbar-collapse ','container_id'=>'top-navbar'));?>
</div>
<div class="nback">
	<center>
		<h1>Start Bootstrap</h1>
		<h3>Free Bootstrap Themes & Templates</h3>
		<a  href="#find"><button class="find_out_btn">Find out more</button></a>
	</center>
</div>
<div class="section1" id="find">
	<center>
		<b><h2>Stylish Portfolio is the perfect theme for your next project!</h2></b>
		<h3>This theme features some wonderful photography courtesy of <a href="">Death to the Stock Photo.</a></h3>
	</center>	
</div>
<div class="section2">
	<center>
		<h2>Our Services</h2>
		<hr class="hr_next" >
		<div class="row">
			<div class="col-md-offset-2 col-md-2">
				<i class="fa fa-cloud"></i>
				<h3>Service Name</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<button>Learn More</button>
			</div>
			<div class="col-md-2">
				<i class="fa fa-gitlab"></i>
				<h3>Service Name</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<button>Learn More</button>
			</div>
			<div class="col-md-2">
				<i class="fa fa-flask"></i>
				<h3>Service Name</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<button>Learn More</button>
			</div>
			<div class="col-md-2">
				<i class="fa fa-shield"></i>
				<h3>Service Name</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<button>Learn More</button>
			</div>
		</div>
	</center>
</div>
<div class="section3">
	<h1>Vertically Centered Text</h1>
</div>
<div class="section4">
	<center>
		<h1>Our Work</h1>
		<hr class="hr_next">
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/img-next/portfolio-1.jpg'?>">
			</div>
			<div class="col-md-4 col-md-offset-1">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/img-next/portfolio-2.jpg'?>">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-offset-1 col-md-4">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/img-next/portfolio-3.jpg'?>">
			</div>
			<div class="col-md-4 col-md-offset-1">
				<img src="<?php echo get_stylesheet_directory_uri().'/image/img-next/portfolio-4.jpg'?>">
			</div>
		</div>
		<br>
		<button class="find_out_btn">View More Items</button>
	</center>
</div>
<div class="section5">
	<center>
		<h3>The buttons below are impossible to resist.</h3>
		<button >Click Me!</button>
		<button>Look At Me!</button>
	</center>
</div>
<div class="section6">
	<center><b><h3>Start Bootstrap</h3></b>
			3481 Melrose Place<br> 
			Beverly Hills, CA 90210<br>
 			<i class="fa fa-phone"></i> (123) 456-7890<br>
			<i class="fa fa-envelope"></i> name@example.com<br></br>
			<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-apple"></i>
			<br>
			</br>
			<p>Copyright © Your Website 2014</p>
	</center>

</div>