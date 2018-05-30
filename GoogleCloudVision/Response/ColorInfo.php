<?php
namespace GoogleCloudVision\Response;

/**
 *  consists of RGB channels, score, and the fraction of the image that the color occupies in the image
 */
class ColorInfo
{

  /**
   *  RGB components of the color
   */
  protected $color;

  /**
   *  Image-specific score for this color. Value in range [0, 1].
   */
  protected $score;

  /**
   *  The fraction of pixels the color occupies in the image. Value in range [0, 1]. 
   */
  protected $pixelFraction;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
