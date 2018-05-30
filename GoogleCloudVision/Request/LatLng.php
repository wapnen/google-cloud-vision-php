<?php
namespace GoogleCloudVision\Request;

/**
 *An object representing a latitude/longitude pair
 */
class LatLng
{

  /**
  *The latitude in degrees. It must be in the range [-90.0, +90.0].
  */
  protected $latitude;

  /**
  *The longitude in degrees. It must be in the range [-90.0, +90.0].
  */
  protected $longitude;

  function __construct($latitude, $longitude)
  {
    $this->latitude = $latitude;
    $this->longitude = $longitude;
  }
}
 ?>
