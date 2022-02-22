<?php
include_once("config.php");

$product_id = addslashes($_POST['edit_product_id']);
$product_name = addslashes($_POST['edit_product_name']);
$product_tagline = addslashes($_POST['edit_product_tagline']);
$category_select = $_POST['edit_category_select'];
$stock = $_POST['edit_stock'];
$purchase_price = $_POST['edit_purchase_price'];
$sale_price = $_POST['edit_sale_price'];
if($_POST['edit_price_radio'] === "1"){
   $discounted_price = $_POST['edit_sale_price'];
}else if($_POST['edit_price_radio'] === "2"){
   $discounted_price = $_POST['edit_discounted_price'];
}
$add_badge = $_POST['edit_add_badge'];   
$publish_type = intval($_POST['edit_publish_type']);
$description = addslashes($_POST['edit_description']);


$sql1 = "SELECT category , tag FROM products WHERE product_id = {$product_id}";
$result1 = mysqli_query($conn , $sql1);
if(mysqli_num_rows($result1) == 1){
    $row1 = mysqli_fetch_assoc($result1);
    $existing_category_id = $row1["category"];
    $existing_tag_id = $row1["tag"];


    $sql = "UPDATE products SET product_name = '{$product_name}' , product_tagline = '{$product_tagline}' , product_description = '{$description}' , purchase_price = {$purchase_price} , sale_price = {$sale_price} , discounted_price = {$discounted_price} , stock = {$stock} , tag = {$add_badge} ,status = {$publish_type}, category = {$category_select} WHERE product_id = {$product_id};";

    $sql .= "UPDATE categories SET products = products - 1 WHERE category_id = {$existing_category_id};";
    $sql .= "UPDATE categories SET products = products + 1 WHERE category_id = {$category_select};";

    $sql .= "UPDATE tags SET usedby_products = usedby_products - 1 WHERE tags_id = {$existing_tag_id};";
    $sql .= "UPDATE tags SET usedby_products = usedby_products + 1 WHERE tags_id = {$add_badge}";

    if(mysqli_multi_query($conn,$sql)){
       echo json_encode(["success" => "Your product has been successfully added"]);
    }else{
       echo json_encode(["error" => "Your product has been successfully added"]);
    }


}





echo json_encode(["message" => $sql]);

?>