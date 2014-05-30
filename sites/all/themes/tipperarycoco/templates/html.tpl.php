<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces;?>>
<head profile="<?php print $grddl_profile; ?>">

        
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <!--[if IE 8]> 
  <link rel="stylesheet" href="/sites/all/themes/tipperarycoco/css/styleie.css" />
  <![endif]-->
  <!--[if IE 7]> 
  <link rel="stylesheet" href="/sites/all/themes/tipperarycoco/css/styleie7.css" />
  <![endif]-->
  <link href="/sites/all/themes/tipperarycoco/css/FontAwesome/css/font-awesome.css" rel="stylesheet">
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  
  <?php print $scripts; ?>
  <script src="/sites/all/themes/tipperarycoco/bootstrap/js/bootstrap-dropdown.js"></script>
  <script src="/sites/all/themes/tipperarycoco/bootstrap/js/bootstrap-carousel.js"></script>
  <script src="/sites/all/themes/tipperarycoco/bootstrap/js/bootstrap-transition.js"></script>
  <meta name="google-translate-customization" content="f321577e8a5f7c7b-6a339af3b886c416-gcd1e55fa0b46dee6-14"></head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
