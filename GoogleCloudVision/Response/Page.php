<?php
namespace GoogleCloudVision\Response;

/**
 * Detected page from OCR.
 */
class Page
{

  /**
   * Additional information detected on the page
   */
  protected $property;

  /**
   * Page width.
   */
  protected $width;

  /**
   * Page height
   */
  protected $height;

  /**
   * List of blocks of text, images etc on this page.
   */
  protected $blocks;

  /**
   * Confidence of the OCR results on the page. Range [0, 1]. 
   */
  protected $confidence;

  function __construct(argument)
  {
    # code...
  }
}


 ?>
