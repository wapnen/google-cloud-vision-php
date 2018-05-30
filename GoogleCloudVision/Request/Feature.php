<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;
/**
 *Represents the type of Google Cloud Vision API detection to perform
 */
class Feature implements JsonSerializable
{

  /**
   *The feature type. Could be TYPE_UNSPECIFIED, FACE_DETECTION, LANDMARK_DETECTION, LOGO_DETECTION, LABEL_DETECTION
   *TEXT_DETECTION, DOCUMENT_TEXT_DETECTION, SAFE_SEARCH_DETECTION, IMAGE_PROPERTIES, CROP_HINTS, WEB_DETECTION
   */
  protected $type;

  /**
   *Maximum number of results of this type.
   *Does not apply to TEXT_DETECTION, DOCUMENT_TEXT_DETECTION, or CROP_HINTS.
   */
  protected $maxResults;
  /**
  *Model to use for the feature. Supported values: "builtin/stable" (the default if unset) and "builtin/latest".
  */
  public $model;

  /**
  * Set the feature type
  */
  public function setType($type){
    $this->type = $type;
  }

  /**
  * Set the maximum number of results of the specified type
  */
  public function setMaxResults($maxResults){
    $this->maxResults = $maxResults;
  }

  /**
  * Set the model to use for the feature
  */
  public function setModel($model){
    $this->model = $model;
  }

  /**
  * Get the feature type
  */
  public function getType(){
    return $this->type;
  }

  /**
  * Get maxumum number of results of the specified type
  */
  public function getMaxResults(){
    return $this->maxResults;
  }

  /**
  * Get the feature type
  */
  public function getModel(){
    return $this->model;
  }

  public function jsonSerialize(){
    return [
      'type' => $this->type,
      'maxResults' => $this->maxResults,
      'model' => $this->model
    ];
  }
}
 ?>
