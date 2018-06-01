<?php
include "vendor/autoload.php";
use GoogleCloudVision\GoogleCloudVision;
use GoogleCloudVision\Request\AnnotateImageRequest;
use GoogleCloudVision\Request\Request;
//$gcv = new GoogleCloudVision();
$request1 = new AnnotateImageRequest();
$request1->setImageUri("https://cdn.pixabay.com/photo/2016/02/19/11/25/supreme-court-building-1209701_960_720.jpg");
$request1->setFeature('IMAGE_PROPERTIES');
$request1->setFeature('LABEL_DETECTION');
$request1->setFeature('WEB_DETECTION');
$request1->setImageContext();
$request1->getImageContext()->setCropHintsParams([1.333]);
$request1->getImageContext()->setWebDetectionParams(false);

echo(getenv("KEY"));
$gcvRequest = new GoogleCloudVision([$request1], "your_api_key");
$response = $gcvRequest->annotate();

echo json_encode($response);



 ?>
