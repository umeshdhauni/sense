 		$(document).ready(function(){
	
	$(".slide").addClass("slide2");
   	$(window).scroll(function(){
	   	var scroll=$(window).scrollTop();
	  		if(scroll>=100){
	   	   		$(".col_eff").show('slow').delay(5000).addClass("col_efff");
	   	   		$(".bheader").addClass("header_scroll");
	   	   		$(".start_boot1").addClass("start_boot_eff");
	   	   		$(".port a").removeClass("port1");
	   	   		$(".slideup .upp").fadeIn(2000);
	   	   		}
	   	   	if(scroll<100){
	   	   		$(".bheader").removeClass("header_scroll").addClass("delay");
	   	   		$(".start_boot1").removeClass("start_boot_eff").addClass("delay");
	   	   		$(".slideup .upp").fadeOut(1000);
	   	   		}	
	   	   	if(scroll>=700)
	   	   	{
	   	   		$(".port a").addClass("port1");
	   	   		$(".abt a").removeClass("port2");
	   	   		$(".cnt a").removeClass("port3");
	   	   	}	
	   	   	if(scroll>=1000){
	   	   		$(".imgcol").addClass("imgcol_eff");
	   	   		}
	   	   	if(scroll>=1100){
	   	   		$(".our_staff").fadeIn(2000);
	   	   	}
	   	   	if(scroll>=1600){
	   	   		$(".abt a").addClass("port2");
	   	   		$(".port a").removeClass("port1");
	   	   		$(".cnt a").removeClass("port3");
	   	   	}
	   	   	if(scroll>=1700){
	   	   		$(".smimg_eff").addClass("smimg_efff");
	   	   		$(".head_eff").show('fast').delay(2000).addClass("head_efff");
	   	   		}
	   	   	if(scroll>=2200){
	   	   		$(".back_mid2").fadeIn(2000);
	   	   		$(".cnt a").addClass("port3");
	   	   		$(".abt a").removeClass("port2");
	   	   		}
	   	   	if(scroll==0){
	   	   		$(".port a").removeClass("port1");
	   	   		$(".abt a").removeClass("port2");
	   	   		$(".cnt a").removeClass("port3");
	   	   	}
	   	   	});

    $("#flip").click(function(){
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();
	});

    $("#flipp").click(function(){
        $("#center_block").addClass('rotate');
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();
    });

    $("#flippp").click(function(){
        $("#center_block").addClass('rotate2');
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();    
    });

    $("#flipppp").click(function(){
        $("#center_block").addClass('rotate3');
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();    
    });

    $("#flippppp").click(function(){
        $("#center_block").addClass('rotate4');
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();    
    });

    $("#flipppppp").click(function(){
        $("#center_block").addClass('rotate5');
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();    
    });

    $("#flippppppp").click(function(){
        $("#center_block").addClass('rotate6');
        $(".kajal").hide('slow').delay(1000);
        $("#back").show();    
    });

    $(".col_img1").mouseenter(function(){
    	$(".col_img1 span").removeClass('rotate_gly2').addClass('rotate_gly');
    });
        $(".col_img2").mouseenter(function(){
    	$(".col_img2 .glyphicon").removeClass('rotate_gly2').addClass('rotate_gly');
    });
        $(".col_img3").mouseenter(function(){
    	$(".col_img3 .glyphicon").removeClass('rotate_gly2').addClass('rotate_gly');
    });

        $(".col_img1").mouseleave(function(){
    	$(".col_img1 .glyphicon").removeClass('rotate_gly').addClass('rotate_gly2');
    });

        $(".col_img2").mouseleave(function(){
    	$(".col_img2 .glyphicon").removeClass('rotate_gly').addClass('rotate_gly2');
    });

   	    $(".col_img3").mouseleave(function(){
    	$(".col_img3 .glyphicon").removeClass('rotate_gly').addClass('rotate_gly2');
    });
   	    $(".upp").click(function(){
   	    	 
	   	    	 	$('html,body').animate({
   	    	 		scrollTop:0
   	    	 	},800);
   	    });

   	   $("#bars").click(function(){
   	   	$("#slide_menu").css("right","-15px");
   	   	$("#bars").hide();
   	   });
   	   $(".fa-remove").click(function(){
   	   	$("#slide_menu").css("right","-280px");
   	   	$("#bars").show();
   	   });
   	   $(".arrow").click(function(){
   	   		$(this).css("margin-left","100px");
   	   		$(".bottle").delay(400).queue(function(){
			$(this).css("margin-left","100px");
			$(this).addClass("bottle_rotate");
   	   });
   	   		$(".bottle").delay(800).queue(function(){
   	   			(this).css("-webkit-transform","rotate(0deg)");
   	   		});
   	   	});
   	  });
	
function zoom_in(id){
    	$("#"+id).find(".ab_zoom_image").addClass('zoom_imagehover');
    	$("#"+id).children(".img").fadeIn();
}
function zoom_out(id){
	$("#"+id).find(".ab_zoom_image").removeClass('zoom_imagehover');
    	$("#"+id).children(".img").hide();
}
function model(id){
	document.getElementById('image').src="http://localhost/wordpress/wp-content/themes/Template/image/"+id+".jpg";
}
function slide(){
	document.getElementById("mainimage").src=$(".slider .caro3").attr("src");
	var sc=$(".slider img").size();
	var count=4;
	setInterval(function(){
			document.getElementById("mainimage").src=$(".slider .caro"+count).attr("src");
		if(count==sc){
			count=2;
		}
		else{
			count=count+1;
		}
	},500);
}
/*function slide(){
	$(".slider .caro1").fadeIn(2000);
	$(".slider .caro1").delay(5500).hide("slide",{direction:"left"},500);
	var sc=$(".slider img").size();
	var count=2;
	setInterval(function(){
		$(".slider .caro"+count).show("slide",{direction:"right"},500);
		$(".slider .caro"+count).delay(5500).hide("slide",{direction:"left"},500);
		if(count==sc){
			count=1;
		}
		else{
			count=count+1
		}
	}2000);
}*/

function bmouseimg(id){
   			$("#"+id).children('.bimg').css("opacity","0.4");
   			$("#"+id).children('#searchplus').fadeIn(500);
}
function bmouselev(id){
   	    	$("#"+id).children('#searchplus').fadeOut(500);
   	    	$("#"+id).children('.bimg').css("opacity","1");
}
function clickimg(id){
	document.getElementById('bkimage').src="http://localhost/wordpress/wp-content/themes/Template/image/image_boot/"+id+".png";
}
function formenter(){
	$(".f_form").css("transform","translate3d(0,0,0)");
	$(".hide_part").slideDown(1000);
	$(".now").fadeIn(10000);
	$(".before_img").css("transform","translate3d(0,140px,0)");
	$(".after_img").css("transform","translate3d(0,140px,0)");

}
function formout(){
	$(".f_form").css("transform","translate3d(0,250px,0)");
	$(".hide_part").slideUp(1000);
	$(".before_img").css("transform","translate3d(0,0,0)");
	$(".after_img").css("transform","translate3d(0,0,0)");
}
jQuery(function(){
					
					jQuery('#camera_wrap_4').camera({
						height: 'auto',
						loader: 'bar',
						pagination: true,
						thumbnails: true,
						hover: false,
						opacityOnGrid: false,
						imagePath: image_url,
						time: 500,
					});
				});