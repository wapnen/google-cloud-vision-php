<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;

/**
 *Represents Request for performing Google Cloud Vision API tasks over a user-provided image, with user-requested features.
 */
class AnnotateImageRequest implements JsonSerializable
{

  /**
   *The image to be processed
   */
  protected $image;

  /**
   *Requested features
   */
  protected $features;

  /**
  *Additional context that may accompany the image.
  */
  protected $imageContext;


  public function setImage($image){
    $this->image = $image;
  }

  public function setFeatures($features){
    $this->features = $features;
  }

  public function setImageContext($imageContext){
    $this->imageContext = $imageContext;
  }

  public function getImage(){
    return $this->image;
  }

  public function getFeatures(){
    return $this->features;
  }

  public function getImageContext(){
    return $this->imageContext;
  }

  public function jsonSerialize(){
    return [
      'image' => $this->getImage(),
      'features' => $this->getFeatures(),
      'imageContext' => $this->getImageContext(),
    ];
  }
}

 ?>
