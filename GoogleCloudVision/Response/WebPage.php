<?php
namespace GoogleCloudVision\Response;

/**
 * Metadata for web pages
 */
class WebPage
{

  /**
  * @var string
  *
  *The result web page URL.
  */
  protected $url;

  /**
  * @var number
  *
  *(Deprecated) Overall relevancy score for the web page.
  */
  protected $score;

  /**
  * @var string
  *
  *Title for the web page, may contain HTML markups.
  */
  protected $pageTitle;

  /**
  * @var array
  *
  *Fully matching images on the page
  */
  protected $fullMatchingImages = array();

  /**
  * @var array
  *
  *Partial matching images on the page
  */
  protected $partialMatchingImages = array();

  function __construct(argument)
  {
    # code...
  }
}
 ?>
