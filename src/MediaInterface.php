<?php

interface MediaInterface {
  /** 
   * Return the label (typically the filename).
   */
  public function getLabel();

  /**
   * Return the URL.
   */
  public function getUrl();

  /**
   * Print the media as HTML.
   */
  public function render();
}
