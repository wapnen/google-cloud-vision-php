<?php
namespace GoogleCloudVision\Response;
use JsonSerializable;

/**
 * Represents Response to a batch image annotation request.
 */
class Response implements JsonSerializable
{

  /**
  * @var array
  *
  * Individual responses to image annotation requests within the batch.
  */
  protected $responses = array();

  function __construct($responses)
  {
    $this->responses = $responses;
  }

  public function getResponses(){
    return $this->responses;
  }

  public function jsonSerialize(){
    return [
      'responses' => $this->getResponses(),
    ];
  }
}

 ?>
