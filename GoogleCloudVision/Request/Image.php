<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;
/**
 * Represents a Client image to perform Google Cloud Vision API tasks over.
 */
class Image implements JsonSerializable
{
  /**
   * Image content, represented as a stream of bytes. A base64-encoded string.
   */
  protected $content;
  /**
   * Google Cloud Storage image location, or publicly-accessible image URL
   */
  protected $source;

  /**
   * Sets the source of an image file
   */
  public function setSource($source){
    $this->source = $source;
  }

  /**
   * Sets the content of an image object
   */
  public function setContent($content){
    $this->content = $content;
  }

  /**
   * Gets the source of an image file
   */
  public function getSource(){
    return $this->source;
  }

  /**
   * Gets the content of an image object
   */
  public function getContent(){
    return $this->content;
  }

  public function jsonSerialize(){
    return [
        'content' => $this->getContent(),
        'source' => $this->getSource()
    ];
  }

}

 ?>
