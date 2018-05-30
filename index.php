<?php
include "vendor/autoload.php";
use GoogleCloudVision\GoogleCloudVision;


$gcv = new GoogleCloudVision();
$setsource = $gcv->setImageUri("https://cdn.pixabay.com/photo/2016/02/19/11/25/supreme-court-building-1209701_960_720.jpg");
//var_dump($setsource);
$gcv->addFeature('IMAGE_PROPERTIES');
$gcv->setImageContext();
$gcv->imageContext()->setCropHintsParams([1.333]);
$gcv->imageContext()->setWebDetectionParams(false);
$response = $gcv->annotate();
echo $response;


 ?>
