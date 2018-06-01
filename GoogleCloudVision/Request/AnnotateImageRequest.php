<?php
namespace GoogleCloudVision\Request;
use GoogleCloudVision\Request\Image;
use GoogleCloudVision\Request\ImageSource;
use GoogleCloudVision\Request\Feature;
use GoogleCloudVision\Request\ImageContext;
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
  protected $features = array();

  /**
  *Additional context that may accompany the image.
  */
  protected $imageContext;


  public function setImage($imageString){
    $this->image = new Image();
    $this->image->setContent($imageString);
  }

  public function setImageUri($imageString){
    $this->image = new Image();
    $imageSource = new ImageSource();
    $imageSource->setImageUri($imageString);
    $this->image->setSource($imageSource);

  }

  public function setFeature($type, $maxResults = 1, $model = "builtin/stable"){
    $feature = new Feature();
    $feature->setType($type);
    $feature->setMaxResults($maxResults);
    $feature->setModel($model);
    array_push($this->features, $feature);
  }

  public function setImageContext(){
    $this->imageContext = new ImageContext();
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
