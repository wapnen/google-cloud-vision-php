# google-cloud-vision-php
# Overview

Performs Label detection, face detection, Logo detection, explicit content detection, landmark detection, optical character   recogition and web detection on images.
  You can read more about Google cloud vision here https://cloud.google.com/vision/

# Getting Started
  You will need a google account to use this API so if you do not already have an account with google, head over there and create one

## Installation
  ```bash
composer require wapnen/google-cloud-vision-php
```

## Enable the API
  To start using the google cloud vision api, follow the instructions here to enable the api for your google account https://cloud.google.com/vision/docs/before-you-begin

## Authentication
  You must set up an Api key to authenticate your requests. Follow the instructions here https://support.google.com/cloud/answer/6158862?hl=en to set up an API key for your project on google cloud platform console

# Usage
```
<?php
include "vendor/autoload.php";
use GoogleCloudVision\GoogleCloudVision;
use GoogleCloudVision\Request\AnnotateImageRequest;
use GoogleCloudVision\Request\Request;


$annotateImageRequest1 = new AnnotateImageRequest();
$annotateImageRequest1->setImageUri("https://cdn.pixabay.com/photo/2016/02/19/11/25/supreme-court-building-1209701_960_720.jpg");
$annotateImageRequest1->setFeature('IMAGE_PROPERTIES');
$annotateImageRequest1->setFeature('LABEL_DETECTION');
$annotateImageRequest1->setFeature('WEB_DETECTION');

$gcvRequest = new GoogleCloudVision([$annotateImageRequest1], "Your_api_key");
$response = $gcvRequest->annotate();

echo json_encode($response);



 ?>

```
Note : You can create as many as 16 Annotate image requests to be sent with the request object

The function ```setImageUri();``` takes a Google Cloud Storage image location, or publicly-accessible image URL. Alternatively you can use ```setImage();``` which takes a base64 encoded image string.

You can set as many features as are available to the annotateImageRequest by calling the ```setFeature();``` function on the annotateImageRequest which takes any of the following enum parameters ; TYPE_UNSPECIFIED, FACE_DETECTION, LANDMARK_DETECTION, LOGO_DETECTION, LABEL_DETECTION, TEXT_DETECTION, DOCUMENT_TEXT_DETECTION, SAFE_SEARCH_DETECTION, IMAGE_PROPERTIES, CROP_HINTS, WEB_DETECTION.

Optionally, you can set the image context for each annotateImageRequest object like so
```
$annotateImageRequest1 = new AnnotateImageRequest()
$annotateImageRequest1->setImageContext();
$annotateImageRequest1->getImageContext()->setCropHintsParams([1.333]); //array
$annotateImageRequest1->getImageContext()->setWebDetectionParams(false);  //boolean
$annotateImageRequest1->getImageContext()->setLanguageHints([]); //array
```
Finally, the GoogleCloudVision request object takes an array of AnnotateImageRequest objects as the first parameter and the api key as the second parameter

### Response object
If successful, you will receive a json object response in the format below;
```
{
  "responses": [
    {
      object(AnnotateImageResponse)
    }
  ]
}
```
