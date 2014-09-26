<?php

/**
 * Decides how the sessions are rendered.
 */
//kpr(array_keys(get_defined_vars()));
//kpr($content);

?>
<article class="session">
  <?php print render($content['field_session_image']); ?>
  <h2><?php print $title; ?></h2>
  <?php print render($content['field_teaser']); ?>
  <?php print render($content['field_session_description']); ?>
  <?php print render($content['field_session_speaker']); ?>
</article>


