<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;

/**
 * Represents the Parameters for web detection request.
 */
class WebDetectionParams implements JsonSerializable
{

  /**
  *Whether to include results derived from the geo information in the image. boolean
  */
  protected $includeGeoResults;

  function __construct($includeGeoResults)
  {
    $this->includeGeoResults = $includeGeoResults;
  }

  public function getIncludeGeoResults(){
    return $this->includeGeoResults;
  }

  public function jsonSerialize(){
    return [
      'includeGeoResults' => $this->getIncludeGeoResults()
    ];
  }
}

 ?>
