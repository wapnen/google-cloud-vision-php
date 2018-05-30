<?php
namespace GoogleCloudVision\Request;
use LatLng;

/**
 *Represents a Rectangle determined by min and max LatLng pairs.
 */
class LatLongRect
{

  /**
  * Min lat/lng pair
  */
  protected $minLatLng;

  /**
  * Max lat/lng pair
  */
  protected $maxLatLng;

  function __construct(LatLng $minLatLng, LatLng $maxLatLng)
  {
    $this->minLatLng = $minLatLng;
    $this->maxLatLng = $maxLatLng;
  }


}
 ?>
