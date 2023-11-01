<?php
  // Load the PHP classes/etc when they're used.
  include_once 'autoloader.php';
?>

<html>
  <head>
    <title>OOPs I did it again.</title>
  </head>
  <body>
    <h1>Our Media</h1>
    <?php

    $all_media = MediaManager::load();
    foreach ($all_media as $media) {
      if ($media instanceof MediaInterface) {
        print $media->render();
      }
    }

    ?>
  </body>
</html>