<?php
namespace GoogleCloudVision\Response;

/**
 *Represents relevant information for the image from the internet
 */
class WebDetection
{

  /**
  * @var array
  *
  *Deduced entities from similar images on the Internet.
  */
  protected $webEntities = array();

  /**
  * @var array
  *
  *Fully matching images from the Internet
  */
  protected $fullMatchingImages = array();

  /**
  * @var array
  *
  *Partial matching images from the Internet
  */
  protected $partialMatchingImages = array();

  /**
  * @var array
  *
  *Web pages containing the matching images from the Internet
  */
  protected $pagesWithMatchingImages = array();

  /**
  * @var array
  *
  *The visually similar image results.
  */
  protected $visuallySimilarImages = array();

  /**
  * @var array
  *
  *Best guess text labels for the request image.
  */
  protected $bestGuessLabels = array();
  
  function __construct(argument)
  {
    # code...
  }
}
 ?>
