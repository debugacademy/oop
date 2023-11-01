<?php

trait RenderAsLinkTrait {
  use PostRenderFormatTrait;
  public function render() {
    $url = $this->url;
    $label = $this->label;
    print "<a href='$url'>$label</a>";
    $this->postRender();
  }
}