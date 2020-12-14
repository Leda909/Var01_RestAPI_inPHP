<?php
ob_start();
include_once 'model_gallery.php';
include_once 'data_model_gallery_delete.php';


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");


$data = json_decode(file_get_contents("php://input"));
    $myObj=new Gallery();
    
    $myObj->get_product_id($data->product_id);

$delete = delete_item_from_gallery($myObj);
echo json_encode($myObj);

?>