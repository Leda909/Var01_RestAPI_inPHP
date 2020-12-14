<?php
ob_start();
include_once 'model_gallery.php';
include_once "data_model_gallery_create.php";


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");

// get posted data
$data = json_decode(file_get_contents("php://input"));
    $myObj=new Gallery();

    // for setting items property values -->    $product->name = $data->name; 
    $myObj->set_product_category($data->product_category);
    $myObj->set_product_type($data->product_type);
    $myObj->set_product_image($data->product_image);
    $myObj->set_product_title($data->product_title);

$create = create_gallery($myObj);
// echo json_encode($myObj);

if($myObj){
    $myJSON_Created = json_encode($myObj);
    echo json_encode(array("message" => "Product has been successfully inserted."));
    echo $myJSON_Created;
    } 
    // if unable to create the product, tell the user
    else {
        http_response_code(503);
        // tell the user product does not created
        echo json_encode(array("message" => "Product couldn't be created."));
    }

?>