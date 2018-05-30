<?php
namespace GoogleCloudVision\Response;

/**
 * Represents a color in the RGBA color space
 */
class Color
{

  /**
  *The amount of red in the color as a value in the interval [0, 1].
  * @var number
  */
   protected $red;

   /**
   *The amount of green in the color as a value in the interval [0, 1]. 
   *
   * @var number
   */
   protected $green;

   /**
   *The amount of blue in the color as a value in the interval [0, 1].
   *
   * @var number
   */
   protected $blue;

   /**
   *The fraction of this color that should be applied to the pixel
   *
   * @var number
   */
   protected $alpha;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
