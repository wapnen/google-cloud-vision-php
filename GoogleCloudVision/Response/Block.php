<?php
namespace GoogleCloudVision\Response;

/**
 * Represents logical element on the page
 */
class Block
{

  /**
   *  Additional information detected for the block.
   */
  protected $property;

  /**
   *  The bounding box for the block
   */
  protected $boundingBox;

  /**
   *  List of paragraphs in this block
   */
  protected $paragraphs = array();

  /**
   *  Detected block type (text, image etc) for this block.
   */
  protected $blocktype;

  /**
   *  Confidence of the OCR results on the block. Range [0, 1]. 
   */
  protected $confidence;

  function __construct(argument)
  {
    # code...
  }
}

 ?>
