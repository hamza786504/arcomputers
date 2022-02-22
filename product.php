<?php 
include_once('partial/header.php');
$product_id = $_GET["id"];
$single_product_query = "SELECT product_id , product_name , product_tagline , product_description , sale_price , discounted_price , tags_name , stock , varient_one , varient_two , varient_three , varient_four , category_name FROM products 
LEFT JOIN tags ON tags.tags_id = products.tag
LEFT JOIN categories ON categories.category_id = products.category
WHERE product_id = '{$product_id}'";
$execute_single_prod_query = mysqli_query($conn,$single_product_query);
if(mysqli_num_rows($execute_single_prod_query) == 1){
    while($row = mysqli_fetch_assoc($execute_single_prod_query)){
echo "
<div class='wrapper'>
    <div class='product-img'>
      <img src='images/{$row['varient_one']}' id='active_varient'>
      <div class='varients'>
          <div class='varient active'>
              <img class='varient_img' src='images/{$row['varient_one']}' alt='image' />
          </div>";
            if($row['varient_two'] !== ""){
                echo "<div class='varient'>
                        <img class='varient_img' src='images/{$row['varient_two']}' alt='image' />
                    </div>";
            }
            if($row['varient_three'] !== ""){
                echo "<div class='varient'>
                        <img class='varient_img' src='images/{$row['varient_three']}' alt='image' />
                    </div>";
            }
            if($row['varient_four'] !== ""){
                echo "<div class='varient'>
                        <img class='varient_img' src='images/{$row['varient_four']}' alt='image' />
                    </div>";
            }
          echo"
      </div>
    </div>
    <div class='product-info'>
      <div class='product-text'>
        <h1 class='product-title'>"; echo stripslashes($row['product_name']); echo "</h1>";
            if($row['product_tagline'] !== ""){
                echo "<h2 class='product-tagline'>"; echo stripslashes($row['product_tagline']); echo "</h2>";
            }
            echo "
        <table class='product_quantity'>
            <tr>
                <td><h4>Quantity</h4></td>
                <td>
                    <div class='quantity-counter'>
                        <button class='counter-change-btn' id='decrement_quantity' onclick='decreament_quantity()'>-</button>
                        <h2 class='quantity' id='quantity' style='color: black; display: inline-block; margin_bottom:0;'></h2>
                        <button class='counter-change-btn' id='increment_quantity' onclick='increament_quantity({$row['stock']})'>+</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><h4>Prize</h4></td>
                <td>
                    <span class='price_outer mt-2'>
            <b>Rs. </b>";
            if($row['sale_price'] !== $row['discounted_price']){
              echo "<span class='cut-price'>{$row['sale_price']}</span>";
            }
            echo "&nbsp;&nbsp;
            <span class='price'>{$row['discounted_price']}</span>
            /-</span>
        </div>
                </td>
            </tr>
            <tr>
                <td><button class='wishlist-btn'><i class='icon fa-solid fa-heart'></i></button></td>
                <td><input type='submit' class='addtocart-btn' value='Add to cart' /></td>
            </tr>
        </table>
        <p class='product-description'>"; echo stripslashes($row['product_description']); echo "</p>
      </div>
    </div>
  </div>";
    } } 
  include_once('partial/footer.php'); ?>
