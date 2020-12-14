<?php
ob_start();
include_once "data_model_gallery_id.php";

$gallery = get_gallery_by_id($product_id);
header('Content-type:application/json;charset=utf-8');

$myJSON_G_I = json_encode($gallery);

echo $myJSON_G_I;

?>

