<?php
include_once 'config.php';
include_once 'model_gallery.php';

function get_item_by_word($keyword){
	global $conn;
    
	$sql = "SELECT FROM gallery WHERE product_category = '.$keyword->product_category().'";
			
	$result = mysqli_query($conn, $sql);
    $galleries = [];

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            array_push($galleries, $row);
        }
        return $product;
        } else {
        return false;
        }
    }
?>