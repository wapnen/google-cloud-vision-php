<?php
namespace GoogleCloudVision\Response;

/**
 *Represents Set of features pertaining to the image, computed by computer vision methods over safe-search verticals
 */
class SafeSearchAnnotation
{

  /**
  * Represents the adult content likelihood for the image
  */
  protected $adult;

  /**
  * Spoof likelihood
  */
  protected $spoof;

  /**
  * Likelihood that this is a medical image.
  */
  protected $medical;

  /**
  * Likelihood that this image contains violent content.
  */
  protected $violence;

  /**
  * Likelihood that the request image contains racy content. 
  */
  protected $racy;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
