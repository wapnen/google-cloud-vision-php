<?php
namespace GoogleCloudVision\Request;
use JsonSerializable;

/**
 *Represents an array of requests to be sent to the google cloud vision api
 */
class Request implements JsonSerializable
{

  /**
  * @var array
  *
  *Individual image annotation requests for this batch.
  */
  protected $requests = array();

  function __construct($requests)
  {
    $this->requests = $requests;
  }

  public function getRequests(){
    return $this->requests;
  }

  public function jsonSerialize(){
    return [
      'requests' => $this->getRequests()
    ];
  }

}
 ?>
