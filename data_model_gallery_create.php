<?php
include_once 'config.php';
include_once 'model_gallery.php';

function create_gallery($gallery){
	global $conn;
    
    // test hogy eléri a gettereket a galleryin
    // $temp=$gallery->get_product_category();

	$sql = "INSERT INTO gallery (product_title, product_category, product_type, product_image) VALUES('".$gallery->get_product_title()."', '".$gallery->get_product_category()."', '".$gallery->get_product_type()."', '".$gallery->get_product_image()."')";
    
    mysqli_query($conn, $sql);
       
    if(mysqli_affected_rows($conn)>0){
		  return true;
	   } else {
		 return false;
	   }			  
}

?>