<?php
namespace GoogleCloudVision\Response;

/**
 *Represents a set of detected entity features
 */
class EntityAnnotation
{

  /**
  * Opaque entity ID
  */
  protected $mid;

  /**
  * The language code for the locale in which the entity textual description is expressed.
  */
  protected $locale;

  /**
  * Entity textual description, expressed in its locale language
  */
  protected $description;

  /**
  * Overall score of the result. Range [0, 1].
  */
  protected $score;

  /**
  * The relevancy of the ICA (Image Content Annotation) label to the image
  */
  protected $topicality;

  /**
  * Image region to which this entity belongs
  */
  protected $boundingPoly;

  /**
  * The location information for the detected entity
  */
  protected $locations = array();

  /**
  * Some entities may have optional user-supplied Property (name/value) fields, such a score or string that qualifies the entity. 
  */
  protected $properties = array();

  function __construct(argument)
  {
    # code...
  }
}
 ?>
