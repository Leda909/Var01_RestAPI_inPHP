<?php
ob_start();
include_once 'model_gallery.php';
include_once 'data_model_gallery_delete.php';


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");


$data = json_decode(file_get_contents("php://input"));
    $myObj=new Gallery();

    $myObj->set_product_id($data->set_product_id);

    // $myObj->set_product_category($data->product_category);
    // $myObj->set_product_type($data->product_type);
    // $myObj->set_product_image($data->product_image);
    // $myObj->set_product_title($data->product_title);

$delete = delete_item_from_gallery($myObj);
echo json_encode($myObj);

?>