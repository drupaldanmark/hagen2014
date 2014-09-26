<!doctype html><!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --><!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]--><!--[if IE 7]>
<html class="no-js ie7 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]--><!--[if IE 8]>
<html class="no-js ie8 oldie" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]--><!--[if IE 9]>
<html class="no-js ie9" lang="<?php print $language->language; ?>" <?php print $rdf_namespaces; ?> <?php print $html_attributes; ?>> <![endif]--><!-- Consider adding an manifest.appcache: h5bp.com/d/Offline --><!--[if gt IE 9]><!-->
<?php print $mothership_poorthemers_helper; ?>
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $appletouchicon; ?>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <meta http-equiv="cleartype" content="on">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <?php print $styles; ?>

  <!--[if lt IE 9]>
  <script src="<?php print $mothership_path; ?>/js/html5.js"></script><![endif]-->
  <?php print $selectivizr; ?>
  <?php if (!theme_get_setting('mothership_script_place_footer')) { print $scripts; } ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes; ?>>
<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
<?php print $page_top; //stuff from modules always render first ?>
<?php print $page; // uses the page.tpl ?>
<?php
if (theme_get_setting('mothership_script_place_footer')) {
  print $scripts;
}
?>
<?php print $page_bottom; //stuff from modules always render last ?>
</body>
</html>
