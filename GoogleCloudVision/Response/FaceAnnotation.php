<?php
namespace GoogleCloudVision\Response;

/**
 *A face annotation object contains the results of face detection.
 */
class FaceAnnotation
{

  /**
  *The bounding polygon around the face.
  */
  protected $boundingPoly;

  /**
  *The fdBoundingPoly bounding polygon is tighter than the boundingPoly, and encloses only the skin part of the face
  */
  protected $fdBoundingPoly;

  protected $landmarks = array();

  protected $rollAngle;

  protected $panAngle;

  protected $tiltAngle;

  protected $detectionConfidence;

  protected $landmarkingConfidence;

  protected $joyLikelihood;

  protected $sorrowLikelihood;

  protected $angerLikelihood;

  protected $surpriseLikelihood;

  protected $underExposedLikelihood;

  protected $blurredLikelihood;

  protected $headwearLikelihood;

  function __construct(argument)
  {
    # code...
  }
}

 ?>
