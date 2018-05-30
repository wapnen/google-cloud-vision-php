<?php
namespace GoogleCloudVision\Response;

/**
 * Represents entity deduced from similar images on the net
 */
class WebEntity
{

  /**
  * @var string
  *
  *Opaque entity ID.
  */
  protected $entityId;

  /**
  * @var number
  *
  *Overall relevancy score for the entity
  */
  protected $score;

  /**
  * @var string
  *
  *Canonical description of the entity, in English. 
  */
  protected $description;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
