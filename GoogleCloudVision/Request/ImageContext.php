<?php
namespace GoogleCloudVision\Request;
use GoogleCloudVision\Request\LatLngRect;
use GoogleCloudVision\Request\LatLng;
use GoogleCloudVision\Request\CropHintsParams;
use GoogleCloudVision\Request\WebDetectionParams;
use JsonSerializable;

/**
 *Image context and/or feature-specific parameters.
 */
class ImageContext implements JsonSerializable
{

  protected $latLongRect;

  /**
  *List of languages to use for TEXT_DETECTION
  */
  protected $languageHints = array();

  /**
  *Parameters for crop hints annotation request.
  */
  protected $cropHintsParams;

  /**
  *Parameters for web detection.
  */
  protected $webDetectionParams;

  /**
  *
  */
  public function setLatLongRect($minLatLng , $maxLatlng){
    $this->latLongRect = new LatLongRect(new LatLng($minLatLng[0], $minLatLng[1]), new LatLng($maxLatLng[0], $maxLatLng[1]));
  }

  /**
  *
  */
  public function getLatLongRect(){
    return $this->latLongRect;
  }

  /**
  * set the list of languages to use for TEXT_DETECTION
  */
  public function setLanguageHints($languageHints){
    $this->languageHints = $languageHints;
  }

  /**
  * Get the list of languages to use for TEXT_DETECTION
  */
  public function getLanguageHints(){
    return $this->languageHints;
  }

  /**
  * set the parameters for crop hints annotation request
  */
  public function setCropHintsParams($aspectRatios){
    $this->cropHintsParams = new CropHintsParams($aspectRatios);
  }

  /**
  * get the parameters for crop hints annotation request
  */
  public function getCropHintsParams(){
    return $this->cropHintsParams;
  }

  /**
  * set the parameters for crop hints annotation request
  */
  public function setWebDetectionParams($includeGeoResults){
    $this->webDetectionParams = new WebDetectionParams($includeGeoResults);
  }

  public function getWebDetectionParams(){
    return $this->webDetectionParams;
  }

  public function jsonSerialize(){
    return [
      'latLongRect' => $this->getLatLongRect(),
      'languageHints' => $this->getLanguageHints(),
      'cropHintsParams' => $this->getCropHintsParams(),
      'webDetectionParams' => $this->getWebDetectionParams()
    ];
  }

}
 ?>
