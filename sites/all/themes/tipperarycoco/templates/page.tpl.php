<div class="row" style="background: #F5f5f5">
<div class="top-icons pull-right" style="margin-bottom: -12px;">
<div class="contact"><img src="http://www.tipperarycocostage.ie/sites/default/files/img/contactus.png"> 067 44500</div>
<div class="email"><img src="http://www.tipperarycocostage.ie/sites/default/files/img/emailus.png"> Email</div>
<div class="loc"><img src="http://www.tipperarycocostage.ie/sites/default/files/img/offices.png"> Office Locations</div></div></div>
<div class="container">
<div class="logo-inner"><img src="http://www.tipperarycocostage.ie/sites/default/files/logo_main2.png" alt="Home"></div></div>


<div class="row-fluid nav3"><div class="row" style="background: #EAC348; margin-left: 0; border-bottom: 1px solid #4D4D4F;"><div class="container" style="background: #EAC348">
<div class="container" style="background: transparent; position: relative; z-index: 150;">
  <div class="navbar">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

	<div class="nav-collapse collapse">
    <ul class="nav">
	  <li><a href="http://www.tipperarycocostage.ie/">Home</a></li>
      <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("services","Services"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/services">Services</a></li>
       <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("faqs","FAQS","Faqs","FAQs"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/faqs">FAQs</a></li>
	  <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("news","News"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/news">News</a></li>
      <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("your-council","Your-Council","Your-council","your-Council"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/your-council">Your Council</a></li>
      <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("publications","Publications"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/publications">Publications</a></li>
	  <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("forms","Forms"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/forms">Forms</a></li>
     <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("Maps","maps"))){ echo 'class="active"';} ?> ><a href="http://www.tipperarycocostage.ie/maps">Maps</a></li>	  
	</ul>
	<?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
    </div>
      
  </div></div></div></div></div>




<div class="row" style="background: #4d4d4f; margin-left: 0">
<div class="container" style="height: 160px; overflow: hidden"><img src="http://www.tipperarycocostage.ie/sites/default/files/img/bgimage_inner.jpg" width="100%">
</div></div>

<div class="row" style="background: #8B9092; margin-left: 0"><div class="main-container container">
<div>
	<?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
	</div></div></div>

 
<div class="main-container container">	
	
  <div class="row-fluid" style="background-color: #fff; padding: 12px; width: auto">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

	 <div class="span8" id="pagebody">
	 
    <section>
	  <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
	  <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
	 </section>	
	 
	 </div>
	 <div class="span4 pull-right">
	
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	
	
	</div>

	 
	

  </div>
</div>


<div class="row" style="background: #2b2b2b; margin-left: 0"><div class="container" style="background: #fff; padding-top: 0px;"><div class = "footerbg" >             
<div class="navbar-bottom footerall">
<div class ="container footerall"> 
<div class="row-fluid span12" style="margin-left:0px; margin-bottom:15px">
<div class="span6">
<div class="span12">
<h4>Services:</h4>
<div class = "span4"> 
<div id="footer1">   
<?php print render($page['footer1']); ?>
</div>  
</div>  
<div class = "span3">     
<div id="footer2">   
<?php print render($page['footer2']); ?>
</div>  
</div> 
<div class = "span3">     
<div id="footer2">   
<?php print render($page['footer3']); ?>
</div>  
</div>  
</div>  
</div>
<div class = "span6">
<div class = "span6">
<h4>Follow Us:</h4>
<div class = "span6">
<div id="footer2">   
<?php print render($page['footer4']); ?>
</div>  
</div>  
</div>
<div class = "span6">
<h4>Related Sites:</h4>
<div class = "span10">
<div id="footer2">   
<?php print render($page['footer5']); ?>
</div>  
</div>  
</div>											
</div>
</div>
</div>
</div>
</div></div>
<div class="navbar-bottom footerbg">
<div class="container address1 footerbg">
<h4>Tipperary County Council</h4><hr />
<div>
<div class="span2 directions">
<img src="/sites/default/files/img/directions.png"></div>
<div class="span4">
<div class="span12">
County Hall, Clonmel | County Hall, Nenagh
</div> 
<div class="span12">
Telephone (office hours): 067 44500  
</div> 
<div class="span12">
Out of Hours Emergency Number: 1890 923 948
</div> 
<div class="span12">
Email: info@tipperarycoco.ie
</div> 
</div> 
<div class="span3">
<a href="#">Translate: English/Irish</a>
<a href="#">Accessibility: Browse Aloud</a>
<a href="#">Disclaimer</a>
<a href="#">Webmail & Extranet</a></div>
<div class="span3">
<div class="input-append pull-right">  <input id="appendedInputButton" placeholder="Languages" type="text">  <button class="btn" type="button"><span class="caret"></button></div>
</div>
</div>
</div>
</div>
</div>



<div class="slide-out-div" style="line-height: 1; position: fixed; width: 100%; z-index: 40;">
<a class="handle" style="color: #4d4d4f; text-decoration: none; padding-top: 5px; padding-bottom: 5px; padding-left: 10px; padding-right: 0px; line-height: 30px; background: #EAC348; -webkit-border-radius: 10px 0px 0px 0px; border-radius: 10px 0px 0px 0px; width: 178px; height: 38px; display: block; text-indent: 0px; outline: none; position: absolute; top: 0px; right: -46px;">
<div class="circle_sm1" style="background: white; text-align: center"><i class="fa fa-cogs fa-1x" style="color: #4d4d4f"></i></div> Services</a>
<div class="container"><div class="row" style="display: block; margin: auto;">


<div class="span1 icongroup">
<div class="circle_med" style="background: #FCC120; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-users fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #FCC120; text-align:center;">Community</div></div>
<div class="span1 icongroup"><div class="circle_med" style="background: #0079C1; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-comments fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #0079C1; text-align:center;">Corporate<br>Services</div>
</div>
<div class="span1 icongroup">
<div class="circle_med" style="background: #0079C1; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-puzzle-piece fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #0079C1; text-align:center;">Economic<br>Development</div></div>
<div class="span1 icongroup">
<div class="circle_med" style="background: #F0514A; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-fire fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #F0514A; text-align:center;">Emergency<br>Services</div></div>
<div class="span1 icongroup"><div class="circle_med" style="background: #6AC0A3; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-leaf fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #6AC0A3; text-align:center;">Environment</div></div>
<div class="span1 icongroup"><div class="circle_med" style="background: #FCC120; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-key fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #FCC120; text-align:center;">Housing</div></div>
<div class="span1 icongroup">
<div class="circle_med" style="background: #F0514A; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-tachometer fa-3x" style="padding-top: 7px;"></i></div>
<div style="color: #F0514A; text-align:center;">Motor Tax</div></td>
</div>
<div class="span1 icongroup">
<div class="circle_med" style="background: #6AC0A3; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-arrows-alt fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #6AC0A3; text-align:center;">Planning</div>
</div>
<div class="span1 icongroup"><div class="circle_med" style="background: #F0514A; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-road fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #F0514A; text-align:center;">Roads</div></div>
<div class="span1 icongroup"><div class="circle_med" style="background: #4ABADE; color: white; padding: 5px; margin: 3px; text-align:center;">
<i class="fa fa-tint fa-3x" style="padding-top: 10px;"></i></div>
<div style="color: #4ABADE; text-align:center;">Water</div></div>


</div></div>


<script src="http://www.tipperarycocostage.ie/sites/all/themes/tipperarycoco/Tiles/js/jquery.tabSlideOut.v1.3.js"></script>
<script type="text/javascript">

			jQuery('document').ready(function($){
				$('.slide-out-div').tabSlideOut({
					tabHandle: '.handle',                     //class of the element that will become your tab
					imageHeight: '138px',                     //height of tab image           //Optionally can be set using css
					imageWidth: '46px',                       //width of tab image            //Optionally can be set using css
					tabLocation: 'bottom',                      //side of screen where tab lives, top, right, bottom, or left
					speed: 300,                               //speed of animation
					action: 'click',                          //options: 'click' or 'hover', action to trigger animation
					/*topPos: '200px',*/                          //position from the top/ use if tabLocation is left or right
					leftPos: '0px',                          //position from left/ use if tabLocation is bottom or top
					fixedPosition: true                      //options: true makes it stick(fixed position) on scroll
				});
			});
								</script>		
								
<script type="text/javascript">
(function ($) {
		$(document).ready(function() {
			// grab the initial top offset of the navigation 
		   	var stickyNavTop = $('.nav3').offset().top;
		   	
		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) { 
			        $('.nav3').addClass('sticky');
			    } else {
			        $('.nav3').removeClass('sticky'); 
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});
		});
		})(jQuery);
</script>


