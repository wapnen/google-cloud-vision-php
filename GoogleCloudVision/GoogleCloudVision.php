<?php
namespace GoogleCloudVision;
use Exception;
use GoogleCloudVision\Request\Image;
use GoogleCloudVision\Request\ImageSource;
use GoogleCloudVision\Request\AnnotateImageRequest;
use GoogleCloudVision\Request\Feature;
use GoogleCloudVision\Request\ImageContext;

 /**
  *
  */
 class GoogleCloudVision
 {
   protected $request;
   protected $image;
   protected $features = array();
   protected $imageContext;
   protected $annotateImage;

   public function __construct(){
     $this->annotateImage = new AnnotateImageRequest();
   }

   public function setImage($imageString){
     $this->image = new Image();
     $this->image->content = $imageString;
   }

   public function setImageUri($imageString){
     $this->image = new Image();
     $imageSource = new ImageSource();
     $imageSource->setImageUri($imageString);
     $this->image->setSource($imageSource);
     return $this->image;
   }

   public function addFeature($type, $maxResults = 1, $model = "builtin/stable"){
     $feature = new Feature();
     $feature->setType($type);
     $feature->setMaxResults($maxResults);
     $feature->setModel($model);

     array_push($this->features, $feature);
   }

   public function setImageContext(){
     $this->imageContext = new ImageContext();
     $this->annotateImage->setImageContext($this->imageContext);
   }

   public function imageContext(){
     return $this->imageContext;
   }

   public function annotate()
   {
     //$annotate = $this->annotateImage;
     $this->annotateImage->setImage($this->image);
     $this->annotateImage->setFeatures($this->features);

     return json_encode($this->annotateImage);
   }

 }
  ?>
