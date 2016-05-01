<?php
/**
 * Daimensa includes
 */

$daimensa_includes = [
    'functions/wordpress_extend.php',    // Extend Wordpress functionalities
    'functions/placeholders.php',    // Functions for using placeholders
];

foreach ($daimensa_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);
