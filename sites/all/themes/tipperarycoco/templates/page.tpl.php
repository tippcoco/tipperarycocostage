<div class="row addbar ie-address hidden-tablet hidden-phone">
   <div class="container">
   <div class="span5 add-back">
   <div class="span1"><img style="padding-right: 8px" src="/sites/default/files/img/lo.png"></div>
   <div class="span4">Tipperary County Council <br> Civic Offices, Clonmel | Civic Offices, Nenagh, <br>Co. Tipperary<br> 
   <a href="/office-locations">Office Locations | Get Directions</a></div>
   </div>
   <div class="span4 border add-back">
   <div class="span1"><img style="padding-right: 8px" src="/sites/default/files/img/ph.png"></div>
   <div class="span3">Telephone:<br> 0761 065000<br>9.30 - 4.30 Mon-Fri Emergency Out of Hours: 1890 923 948 | 052 915 7869</div>
   </div>
   <div class="span3 border add-back">
   <div class="span1"><img style="padding-right: 8px" src="/sites/default/files/img/ma.png"></div>
   <div class="span2 actions"><a href="/forms/customer-service-form">customerservices@tipperarycoco.ie</a></div>
   </div>
   </div>
</div>
   <div class="span12 add-border hidden-tablet hidden-phone">
</div>
<div class="row addbar ie-address hidden-desktop hidden-phone">
   <div class="container">
   <div class="span12 addback-tablet">
   <div class="span2"><img style="padding-right: 8px" src="/sites/default/files/img/lo.png">
   </div>
   <div class="span10">Tipperary County Council Civic Offices, Clonmel | Civic Offices, Nenagh, Co. Tipperary</div>
   </div>
   <div class="span12 addback-tablet">
   <div class="span2"><img style="padding-right: 8px" src="/sites/default/files/img/ph.png"></div>
   <div class="span10">Telephone: 0761 065000 9.30 - 4.30 Mon-Fri Emergency Out of Hours: 1890 923 948 | 052 915 7869</div>
   </div>
   <div class="span12 addback-tablet">
   <div class="span2"><img style="padding-right: 8px" src="/sites/default/files/img/ma.png"></div>
   <div class="span10 actions"><a href="forms/customer-service-form">customerservices@tipperarycoco.ie</a></div>
   </div>
   </div>
</div>
   <div class="span12 add-border hidden-desktop hidden-phone">
</div>
<div class="row addbar ie-address hidden-desktop hidden-tablet">  
<div class="container-fluid">
  <div class="row-fluid addback-phone">
    <div class="span2 addback-phone1">
      <img style="padding-right: 8px" src="/sites/default/files/img/lo.png">
    </div>
    <div class="span10 addback-phone2">
      Tipperary County Council Civic Offices, Clonmel | Civic Offices, Nenagh, Co. Tipperary
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row-fluid addback-phone">
    <div class="span2 addback-phone1">
      <img style="padding-right: 8px" src="/sites/default/files/img/ph.png">
    </div>
    <div class="span10 addback-phone2">
      Telephone: 0761 065000 9.30 - 4.30 Mon-Fri Emergency Out of Hours: 1890 923 948 | 052 915 7869
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row-fluid addback-phone">
    <div class="span2 addback-phone1">
      <img style="padding-right: 8px" src="/sites/default/files/img/ma.png">
    </div>
    <div class="span10 addback-phone2 actions">
      customerservices@tipperarycoco.ie
    </div>
  </div>
</div>
   <div class="span12 add-border hidden-desktop hidden-tablet">
 </div>
 </div>
 <div class="container"><div class="container" style="background: #fff; padding-top:10px">
  <div class="span12 front-header">
  <img src="/sites/default/files/img/logo.png">
  </div>
   </div></div>
   
<div class="row iespacing1">
<div class="row nav-wrap">
<div class="container">
<div class="navbar navbar-wrapper" style="background: #152634">
  <div class="navbar-inner">
    <div class="container">
			
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn1 btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
	  
	  <a class="btn btn-navbar-search hidden-desktop" data-toggle="collapse" data-target=".search-nav-collapse">
        <div>SEARCH</div>

      </a>

      <!-- Everything you want hidden at 940px or less, place within here -->
	  <div class="hidden-desktop search-nav-collapse collapse">
        <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
		</div>
	  
      <div class="nav-collapse collapse">
       <div class="span9 mainnavinner">
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
                    <li><a href="http://www.tipperarylibraries.ie" target="_new">Libraries</a></li>
					<li><a href="/motor-tax">Motor Tax</a></li>
					<li><a href="/museum">Museum</a></li>
					<li><a href="/planning">Planning</a></li>
					<li><a href="/roads">Roads</a></li>
                    <li><a href="/swimming-pools">Swimming Pools</a></li>
					<li><a href="/water-services">Water Services</a></li>
                  </ul>
                </li>
                <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("news","News"))){ echo 'class="active"';} ?> ><a href="/news">News</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("faqs","FAQS","Faqs","FAQs"))){ echo 'class="active"';} ?> ><a href="/faqs">FAQs</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("publications","Publications"))){ echo 'class="active"';} ?> ><a href="/publications">Download it</a></li>
				<li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("forms","Forms"))){ echo 'class="active"';} ?> ><a href="/forms">Apply for it</a></li>
                <li <?php $currentPage = basename($_SERVER['REQUEST_URI']); if (in_array($currentPage, array("Pay-for-it","pay-for-it"))){ echo 'class="active"';} ?> ><a href="/pay-for-it">Pay for it</a></li>
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
		</div>
		<div class="searchinner hidden-phone hidden-tablet">
        <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
		</div>
		</div>
      </div>
 
    </div>
  </div>
</div>
</div>
</div>
</div>   
<div class="row" style="background: #d2d2d2; margin-left: 0">
<div class="container">
<div>
</div>
</div>
</div>
<div class="row newsmainrow1 ie-content">
<div class="container">
<div class="row-fluid iepaddingright" id="one-true" style="background-color: #fff; padding: 12px; width: auto">
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
<div class="span4 pull-right col iepercent" style="background: #e5e5e5">
	<?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
	</div>
</div>
</div>
</div>
<div class="row ie-footer">
<div class="footerbg">             
<div class="navbar-bottom footerall">
<div class ="container"> 
<div class="row-fluid span12" style="margin-left:0px; margin-bottom:15px">
<div class="span6">
<div class="span12 iepadding">
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
<div id="footer3">   
<?php print render($page['footer3']); ?>
</div>  
</div>  
</div>  
</div>
<div class = "span6">
<div class = "span6">
<h4>Follow Us:</h4>
<div class = "span6">
<div id="footer4">   
<?php print render($page['footer4']); ?>
</div>  
</div>  
</div>
<div class = "span6">
<h4>Related Sites:</h4>
<div class = "span10">
<div id="footer5">   
<?php print render($page['footer5']); ?>
</div>  
</div>  
</div>											
</div>
</div>
</div>
</div>
</div></div>
<div class="navbar-bottom footerbg1" style="padding-top: 20px; padding-bottom: 20px">
<div class="container address1 footerbg">
<div class="span3"><img src="/sites/default/files/img/logo_sm.png"></div>
<div class="row">
<div class="span7" style="font-size: 10px; color: #d4d4d7; padding-left: 100px">
Copyright © 2014 Tipperary County Council
<div style="padding-top: 5px;"><a style="display: inline-block; font-size: 12px" href="/disclaimer" target="_new">Disclaimer</a> | 
<a style="display: inline-block; font-size: 12px" href="/privacy-statement" target="_new">Privacy Statement</a> | 
<a style="display: inline-block; font-size: 12px" href="/accessibility-statement" target="_new">Accessibility</a> | 
<a style="display: inline-block; font-size: 12px" href="https://owa.tipperarycoco.ie/owa/" target="_new">Webmail</a></div>
</div>
</div>
</div>
</div>

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
$('.dropdown-toggle').dropdown()
})(jQuery);
</script>