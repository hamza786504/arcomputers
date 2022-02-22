<?php
include_once("config.php");

$product_name = addslashes($_POST['product_name']);
$product_tagline = addslashes($_POST['product_tagline']);
$category_select = $_POST['category_select'];
$stock = $_POST['stock'];
$purchase_price = $_POST['purchase_price'];
$sale_price = $_POST['sale_price'];
if($_POST['price_radio'] === "1"){
   $discounted_price = $_POST['sale_price'];
}else if($_POST['price_radio'] === "2"){
   $discounted_price = $_POST['discounted_price'];
}
$add_badge = $_POST['add_badge'];   
$publish_type = intval($_POST['publish_type']);
$description = addslashes($_POST['description']);



// Loop all files
$varients = array("","","","");
for($index = 0 ; $index < count($_FILES['files']['name']) ; $index++){
      if($_FILES['files']['name'][$index] != ""){
         $varients[$index] = $_FILES['files']['name'][$index];
         $filename = $_FILES['files']['name'][$index];
         $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
         $valid_ext = array("png","jpeg","jpg","gif");
         if(in_array($ext, $valid_ext) == false){
            echo json_encode(["error" => "You can only upload .png, .jpg, .jpeg and .gif files"]);
         }else{
            $path = "../../images/".$filename;
            move_uploaded_file($_FILES['files']['tmp_name'][$index],$path);
         }
      }
   }

$date = date("Y/m/d");
$sql = "INSERT INTO products (product_name , product_tagline , product_description , purchase_price , sale_price , discounted_price , stock,tag , varient_one , varient_two , varient_three , varient_four ,  status, category,date) VALUES ('{$product_name}','{$product_tagline}','{$description}',{$purchase_price},{$sale_price},{$discounted_price},{$stock},{$add_badge},'{$varients[0]}','{$varients[1]}','{$varients[2]}','{$varients[3]}',{$publish_type},{$category_select},'{$date}');";
$sql .= "UPDATE categories SET products = products + 1 WHERE category_id = {$category_select};";
$sql .= "UPDATE tags SET usedby_products = usedby_products + 1 WHERE tags_id = {$add_badge}";


if(mysqli_multi_query($conn,$sql)){
   echo json_encode(["success" => "Your product has been successfully added"]);
}else{
   echo json_encode(["error" => "Your product has been successfully added"]);
}


// echo json_encode(["message" => $sql]);

?>