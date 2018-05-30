<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;

/**
 *External image source (Google Cloud Storage or web URL image location).
 */
class ImageSource implements JsonSerializable
{

  /**
   *The Google Cloud Storage URI of the image
   */
  protected $gcsImageUri;
  /**
   *The URI of the source image
   */
  protected $imageUri;

  /**
   *Sets URI of the source image
   */
  public function setImageUri($imageUri){
    $this->imageUri = $imageUri;
  }

  /**
   *Gets URI of the source image
   */
  public function getImageUri(){
    return $this->imageUri;
  }

  /**
   *Sets the Google Cloud Storage URI of the source image
   */
  public function setGcsImageUri($gcsImageUri){
    $this->gcsImageUri = $gcsImageUri;
  }

  /**
   *Sets the Google Cloud Storage URI of the source image
   */
  public function getGcsImageUri(){
    return $this->gcsImageUri;
  }

  public function jsonSerialize(){
    return [
        'imageUri' => $this->getImageUri(),
        'gcsImageUri' => $this->getGcsImageUri()
    ];
  }

}
 ?>
