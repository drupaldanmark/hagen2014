<?php

// Plugin definition
$plugin = array(
  'title' => t('Hagenpage2014'),
  'icon' => 'hagenpage.png',
  'category' => t('Drupalhagen 2014'),
  'theme' => 'hagenpage2014',
  'css' => 'hagenpage2014.css',
  'regions' => array(
    'topbar' => t('Top navigation'),
    'header' => t('Header Alpha'),
    'headerbeta' => t('Header Beta'),
    'talks' => t('Talks'),
    'talks_details' => t('Talks details'),
    'tickets' => t('Tickets'),
    'sponsors' => t('Sponsors'),
    'venue' => t('Venue'),
    'venue_map' => t('Venue Map'),
    'footer_a' => t('Footer A'),
    'footer_b' => t('Footer B'),
    'footer_c' => t('Footer C'),
  ),
);
