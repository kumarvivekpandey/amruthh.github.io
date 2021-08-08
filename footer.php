

<div class="footer">

<div class="container">

<div class="col-md-3">

 <h1 style="font-size:30px;">Menu</h1><hr style="border:2px solid red;">
<ul style="font-size:18px;font-weight:bold;">
  
<li>  <a style="font-size:20px;font-weight:bold;" href="index-2.php"> Home</a> </li>
<li>  <a href="about.php">About</a> </li>
<li>  <a href="product.php">Product</a> </li>

<li>  <a href="contact.php">Contact Us  </a> </li>
  
</ul>

</div>

 

<div class="col-md-4">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.7786656748663!2d82.52226915032826!3d18.896897787128044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3a935efaeadc9b%3A0xfa91b76f55b7700e!2sAmruth(Vignesh%20foods)!5e0!3m2!1sen!2sin!4v1625292175107!5m2!1sen!2sin" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<div class="col-md-5">

<h1 style="font-size:30px;">Registered Office:  </h1><hr style="border:2px solid red;">

<p style="font-size:15px;">
Bagriaguda, near paper mill jeypore, odisha 764002 India
</p>
<div class="clearfix"></div>

<div class="phone"><i class="fa fa-phone-square" aria-hidden="true"></i> Phone:   +919437123433 </div>

<span class="email_ph"> <i class="fa fa-envelope-o" aria-hidden="true"></i> Email:
        vigneshfoods.jeypore@gmail.com </span>
		
		<div class="clearfix"></div>
		
		
		<ul style="font-size: 25px;" class="social-icons">
       <a target="_blank" href="https://www.facebook.com/Amruthbyvigneshfoods"><i class="fab fa-facebook-square" style="color:rgb(59, 89, 153);background-color:transparent;" title=""></i></a><a target="_blank" href="https://www.instagram.com/amruth.official/"><i class="fab fa-instagram" style="color:rgb(228, 64, 95);background-color:transparent;" title=""></i></a><a target="_blank" href="https://twitter.com/Amruth23030664?s=08"><i class="fab fa-twitter-square" style="color:rgb(61, 133, 198);background-color:transparent;" title=""></i></a><a target="_blank" href="https://www.youtube.com/channel/UCEiLLFqLktKuKNtNB80zGRA"><i class="fab fa-youtube" style="color:#e52d27;background-color:transparent;" title=""></i></a>
       

      
   
  
    </ul>
</div>

</div>

</div>
<div class="footer_btm"> <marquee style="font-size:15px;">

&copy; 2021 Amruth, All rights reserved.</marquee> </div>

</div>


 


<div class="phone-call cbh-phone cbh-green cbh-show  cbh-static" id="clbh_phone_div" style="position: fixed; bottom: -30px; right: -35px; z-index: 80;"><a id="WhatsApp-button" href="https://api.whatsapp.com/send?phone=919437123433&amp;text=Welcome.."  target="_blank" class="phoneJs" title="How Can I help You ?" rel="noopener noreferrer"><div class="cbh-ph-circle"></div><div class="cbh-ph-circle-fill"></div><div class="cbh-ph-img-circle1"></div></a></div>










<!-- Page Content -->
<!-- /.container -->
<!-- jQuery -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<!-- Bootstrap Core JavaScript -->
<script src="1/js/bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
<script>
$('.without-caption').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

$('.with-caption').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		zoom: {
			enabled: true
		}
	});
	
	</script>
<script>
	
 $(document).ready(function(){
  //the trigger on hover when cursor directed to this class
    $(".core-menu li").hover(
    function(){
      //i used the parent ul to show submenu
        $(this).children('ul').slideDown('fast');
    }, 
      //when the cursor away 
    function () {
        $('ul', this).slideUp('fast');
    });
  //this feature only show on 600px device width
    $(".hamburger-menu").click(function(){
      $(".burger-1, .burger-2, .burger-3").toggleClass("open");
        $(".core-menu").slideToggle("fast");
    });
});
/** credit:@rafonzoo 
http://rafonzo.blogspot.co.id/ **/
</script>
<script>
$(document).ready(function(){
  // jquery code here
  
});

</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script src='1/js/script1.js'></script>
 <script src='1/js/script2.js'></script>

       

    <script>
$("#scroller").simplyScroll();
    </script>
    
	
	
	
	
	 <script src='https://cdn.jsdelivr.net/g/jquery@2.1.4,jquery.migrate@1.4.1,bootstrap@3.3.7,jquery.matchheight@0.7.0,jquery.owlcarousel@1.31'></script>

<script>
jQuery(document).ready(function($) {

	var owl = $("#owl-demo-2");
  owl.owlCarousel({
      items : 3, 
      itemsDesktop : [992,3],
      itemsDesktopSmall : [768,2], 
      itemsTablet: [480,1], 
      itemsMobile : [320,1],
	  autoPlay: 5000,
    stopOnHover:true,
    navigation: false
  });
  $(".next").click(function(){ owl.trigger('owl.next'); });
  $(".prev").click(function(){ owl.trigger('owl.prev'); });

$('.latest-blog-posts .thumbnail.item').matchHeight();
	
});



jQuery(document).ready(function($) {

	var owl = $("#owl-demo-3");
  owl.owlCarousel({
      items : 3, 
      itemsDesktop : [992,3],
      itemsDesktopSmall : [768,2], 
      itemsTablet: [480,2], 
      itemsMobile : [320,1],
	  autoPlay: 5000,
    stopOnHover:true,
    navigation: false
  });
  $(".next").click(function(){ owl.trigger('owl.next'); });
  $(".prev").click(function(){ owl.trigger('owl.prev'); });

$('.latest-blog-posts .thumbnail.item').matchHeight();
	
});








jQuery(document).ready(function($) {

	var owl = $("#owl-demo-4");
  owl.owlCarousel({
      items : 1, 
      itemsDesktop : [992,3],
      itemsDesktopSmall : [768,2], 
      itemsTablet: [480,2], 
      itemsMobile : [320,1],
	  autoPlay: 5000,
    stopOnHover:true,
    navigation: false
  });
  $(".next").click(function(){ owl.trigger('owl.next'); });
  $(".prev").click(function(){ owl.trigger('owl.prev'); });

$('.latest-blog-posts .thumbnail.item').matchHeight();
	
});



</script>
<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 1,
						nav: false
					},
					1000: {
						items: 1,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	
	
	
	
	
	

</body>



</html>