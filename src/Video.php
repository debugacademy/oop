<?php

class Video extends MediaBase {
  use PostRenderFormatTrait;
  public function render() {
    $url = $this->url;
    $label = $this->getLabel();
    print "$url, $label";
    $this->postRender();
  }
}