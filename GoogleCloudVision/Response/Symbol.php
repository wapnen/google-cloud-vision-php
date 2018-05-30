<?php
namespace GoogleCloudVision\Response;

/**
 * A single symbol representation
 */
class Symbol
{

  /**
   * Additional information detected for the symbol.
   */
  protected $property;

  /**
   * The bounding box for the symbol.
   */
  protected $boundingBox;

  /**
   * The actual UTF-8 representation of the symbol.
   */
  protected $text;
  /**
   * Confidence of the OCR results for the symbol. Range [0, 1].
   */
  protected $confidence;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
