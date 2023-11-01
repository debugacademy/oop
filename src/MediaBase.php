<?php

abstract class MediaBase implements MediaInterface {
  protected $label;
  protected $url;
  public function __construct($filename, $url) {
    $this->label = $filename;
    $this->url = $url;
  }
  public function getLabel() {
    return $this->label;
  }
  public function getUrl() {
    return $this->url;
  }
}
