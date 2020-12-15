<?php
ob_start();
include_once 'model_gallery.php';
include_once 'data_model_search.php';

if(isset($_GET['keyword'])){
      $keyword = $_GET['keyword'];
    } else {
      $keyword='';
  }


?>