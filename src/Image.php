<?php

class Image extends MediaBase {
  use RenderAsLinkTrait;
  public function __construct($filename, $url, $width = 'auto', $height = 'auto') {
    parent::__construct($filename, $url);
  }
}
