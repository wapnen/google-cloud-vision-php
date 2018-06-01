<?php
namespace GoogleCloudVision\Response;

/**
 * Single crop hint that is used to generate a new crop when serving an image
 */
class CropHints
{
  /**
  * @var BoundingPoly
  *
  *The bounding polygon for the crop region
  */
  protected $boundingPoly;

  /**
  * @var number
  *
  *confidence of this being a salient region
  */
  protected $confidence;

  /**
  * @var number
  *
  *Fraction of importance of this salient region with respect to the original image
  */
  protected $importanceFraction;


  function __construct(argument)
  {
    # code...
  }
}

 ?>
