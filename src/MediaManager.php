<?php

class MediaManager {
  /**
   * Return all media objects.
   *
   * @return array
   */
  public static function load() {
    $files = [
      'Image' => [
        'logo' => 'images/logo.jpg',
        'avatar' => 'images/avatar.jpg',
        'banner' => 'images/banner.jpg',
      ],
      'Video' => [
        'intro' => 'https://www.youtube.com/watch?v=KxtrkptOIew',
        'testimonial' => 'https://www.youtube.com/watch?v=RnSIHj7ZGT4',
      ],
      'Document' => [
        'contract' => 'files/contract.pdf',
        'student_packet' => 'files/packet.pdf',
      ]
    ];
    foreach ($files as $class => $files_data) {
      foreach ($files_data as $file_name => $file_url) {
        $all_media[] = new $class($file_name, $file_url);
      }
    }
    return $all_media;
  }
}
