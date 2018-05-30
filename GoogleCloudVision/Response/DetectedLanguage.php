<?php
namespace GoogleCloudVision\Response;

/**
 * Represents Detected language for a structural component.
 */
class DetectedLanguage
{

  /**
   * The BCP-47 language code, such as "en-US" or "sr-Latn".
   */
  protected $languageCode;

  /**
   * Confidence of detected language. Range [0, 1]. 
   */
  protected $confidence;

  function __construct(argument)
  {
    # code...
  }
}
 ?>
