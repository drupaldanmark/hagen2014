<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!-- page.tpl.php-->
<?php } ?>

<div class="page">
<?php print render($page['content']); ?>
</div>

<footer role="contentinfo">
  <?php print render($page['footer']); ?>
</footer>

