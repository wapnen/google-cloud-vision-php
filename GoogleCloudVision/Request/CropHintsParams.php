<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;
/**
 *
 */
class CropHintsParams implements JsonSerializable
{
  protected $apectRatios = array();

  function __construct($aspectRatios)
  {
    $this->aspectRatios = $aspectRatios;
  }

  public function getAspectRatios(){
    return $this->aspectRatios;
  }

  public function jsonSerialize(){
    return [
      'aspectRatios' => $this->getAspectRatios()
    ];
  }
}

 ?>
