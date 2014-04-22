<div class="row"><div class="container" style="background: #fff; padding-top:10px">
  <div class="span8" style="margin-left: -20px; margin-bottom: -8px; position: relative; z-index: 51">
  <img src="/sites/default/files/img/logo.png"></div>
  
   <div class="span4 pull-right" style="margin: 0px; padding:0;">
   <div class="row-fluid">
   <div class="span1" style="padding:0; text-align: right;"><img style="padding-right: 8px" src="/sites/default/files/img/lo.png"></div>
   <div class="span11" style="margin: 0px; padding:0; font-size: 12px">Civic Offices, Clonmel | Civic Offices, Nenagh, Co. Tipperary<br>
   Opening Times: 9.30- 5.30, Mon-Fri</div></div>
   
   
   
   <div class="row-fluid" style="margin-top: 15px;">
   <div class="span1" style="padding:0; text-align: right;"><img style="padding-right: 8px" src="/sites/default/files/img/ph.png"></div>
   <div class="span5" style="margin: 0px; padding:0; font-size: 12px">0761 065000<br>Out of Hours: 1890 923 948</div>
   <div class="span1" style="margin: 0px; padding:0; text-align: right;"><img style="padding-right: 8px" src="/sites/default/files/img/ma.png"></div>
   <div class="span5 actions" style="margin: 0px; padding:0; font-size: 12px"><a href="mailto: info@tipperarycoco.ie">info@tipperarycoco.ie</a></div>
   </div>
  </div></div></div>


 <div class="row nav3"><div class="navbar-wrapper" style="background: #152634">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar">
              <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">Services 
				  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("your-council","Your-Council","Your-council","your-Council"))){ echo 'class="active"';} ?> ><a href="/your-council">Your Council</a></li>
					<hr>
					<li><a href="/arts">Arts</a></li>
					<li><a href="/civil-defence">Civil Defence</a></li>
                    <li><a href="/community-and-economic-development">Community & Economic Development</a></li>
                    <li><a href="/environment">Environment</a></li>
					<li><a href="/finance">Finance</a></li>
					<li><a href="/fire-services">Fire Services</a></li>
					<li><a href="/heritage">Heritage</a></li>
                    <li><a href="/housing">Housing</a></li>
                    <li><a href="http://www.tipperarylibraries.ie">Libraries</a></li>
					<li><a href="/motor-tax">Motor Tax</a></li>
					<li><a href="/museum">Museum</a></li>
					<li><a href="/planning">Planning</a></li>
					<li><a href="/roads">Roads</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="/swimming-pools">Swimming Pools</a></li>
					<li><a href="/water-services">Water</a></li>
                  </ul>
                </li>
                <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("news","News"))){ echo 'class="active"';} ?> ><a href="/news">News</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("faqs","FAQS","Faqs","FAQs"))){ echo 'class="active"';} ?> ><a href="/faqs">FAQs</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("publications","Publications"))){ echo 'class="active"';} ?> ><a href="/publications">Download it</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("forms","Forms"))){ echo 'class="active"';} ?> ><a href="/forms">Apply for it</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">Municipal Districts 
				  <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a href="/clonmel-municipal-district">Clonmel</a></li>
					<li><a href="/carrick-on-suir-municipal-district">Carrick-on-Suir</a></li>
					<li><a href="/cashel-tipperary-municipal-district">Cashel-Tipperary</a></li>
					<li><a href="/nenagh-municipal-district">Nenagh</a></li>
                    <li><a href="/templemore-thurles-municipal-district">Templemore-Thurles</a></li>
                  </ul>
                </li>
				
			</ul>
			<?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
            <div class="span2 pull-right">
		<ul class="social"><li><a href="#"><img src="/sites/default/files/img/fb.png"></a></li>
		<li><a href="#"><img src="/sites/default/files/img/tw.png"></a></li>
		<li><a href="#"><img src="/sites/default/files/img/rs.png"></a></li></ul></div></div>
          </div>
        </div>
		
		</div>

      </div>
    </div>



<div class="row" style="background: #d2d2d2; margin-left: 0"><div class="container">
<div>
	
	</div></div></div>

<div class="row newsmainrow"><div class="container">
<div class="row-fluid" id="one-true" style="background-color: #fff; padding: 12px; width: auto">
    <?php if (!empty($page['sidebar_first'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>  <!-- /#sidebar-first -->
    <?php endif; ?>  

<div class="span8 col" id="pagebody"><?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
	 
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
	  <?php print $feed_icons; ?>
	 </section>	
	 
	 </div>

<div class="span4 pull-right col" style="background: #e5e5e5">
	
    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	
	
	</div>






</div></div> 



<div class="row" style="background: #333; margin-left: 0"><div class="container" style="background: #fff; padding-top: 0px;"><div class = "footerbg" >             
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






<div class="navbar-bottom footerbg" style="padding-top: 20px; padding-bottom: 20px">
<div class="container address1 footerbg">
<div class="span3"><img src="/sites/default/files/img/logo_sm.png"></div>

<div class="span4 pull-right" style="margin: 0px; padding:0;">
   <div class="row-fluid">
   <div class="span1" style="padding:0; text-align: right;"><img style="padding-right: 8px" src="/sites/default/files/img/lo1.png"></div>
   <div class="span11" style="margin: 0px; padding:0; font-size: 12px">Civic Offices, Clonmel | Civic Offices, Nenagh, Co. Tipperary<br>
   Opening Times: 9.30- 5.30, Mon-Fri</div></div>
   
   
   
   <div class="row-fluid" style="margin-top: 15px;">
   <div class="span1" style="padding:0; text-align: right;"><img style="padding-right: 8px" src="/sites/default/files/img/ph1.png"></div>
   <div class="span5" style="margin: 0px; padding:0; font-size: 12px">0761 065000<br>Out of Hours: 1890 923 948</div>
   <div class="span1" style="margin: 0px; padding:0; text-align: right;"><img style="padding-right: 8px" src="/sites/default/files/img/ma1.png"></div>
   <div class="span5" style="margin: 0px; padding:0; font-size: 12px"><a href="mailto: info@tipperarycoco.ie">info@tipperarycoco.ie</a></div>
   </div>
  </div>
<div class="row">
<div class="span7" style="font-size: 10px; color: #d4d4d7; padding-left: 100px">
Copyright © 2014 Tipperary County Council
<div class="row" style="padding-left: 31px; padding-top: 5px;"><a style="display: inline-block; font-size: 12px" href="/disclaimer">Disclaimer</a> | 
<a style="display: inline-block; font-size: 12px" href="/privacy-statement">Privacy Statement</a> | 
<a style="display: inline-block; font-size: 12px" href="/accessibility-statement">Accessibility</a> | 
<a style="display: inline-block; font-size: 12px" href="https://owa.tipperarycoco.ie/owa/">Webmail</a></div>

</div>
</div>
</div>
</div>






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


