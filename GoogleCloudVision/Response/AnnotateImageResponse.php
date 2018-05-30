<?php
namespace GoogleCloudVision\Response;

/**
 *
 */
class AnnotateImageResponse
{
  protected $includeGeoResults;

  function __construct($includeGeoResults)
  {
    $this->includeGeoResults = $includeGeoResults;
  }
}

 ?>
