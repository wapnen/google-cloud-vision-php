<?php
namespace GoogleCloudVision\Response;

/**
 *Structural unit of text representing a number of words in certain order.
 */
class Paragraph
{

  /**
   *Additional information detected for the paragraph.
   */
  protected $property;

  /**
   *The bounding box for the paragraph
   */
  protected $boundingBox;

  /**
   *List of words in this paragraph.
   */
  protected $words = array();

  /**
   *Confidence of the OCR results for the paragraph. Range [0, 1].
   */
  protected $confidence;

  function __construct(argument)
  {
    # code...
  }
}


 ?>
