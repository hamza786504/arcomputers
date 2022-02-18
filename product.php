<?php include_once("partial/header.php"); ?>
<div class="wrapper">
    <div class="product-img">
      <img src="images/imac.jpg" id="active_varient">
      <div class="varients">
          <div class="varient active">
              <img class="varient_img" src="images/imac.jpg" alt="image" />
          </div>
          <div class="varient">
              <img class="varient_img" src="images/logo.jpg" alt="image" />
          </div>
          <div class="varient">
              <img class="varient_img" src="images/imac.jpg" alt="image" />
          </div>
          <div class="varient">
              <img class="varient_img" src="images/imac.jpg" alt="image" />
          </div>
      </div>
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1 class="product-title">Apple Imac MHK03 - 7th Gen Core i5 2.3Ghz processor 08GB 256GB SSD </h1>
        <h2 class="product-tagline">21.5" LED Display Intel Iris Plus Graphics 640 Magic Mouse 2 & Magic Keyboard Included (Space Gray 2020)</h2>
        <table class="product_quantity">
            <tr>
                <td><h4>Quantity</h4></td>
                <td>
                    <div class="quantity-counter">
                        <button class="counter-change-btn" id="decrement_quantity" onclick="decreament_quantity()">-</button>
                        <h2 class="quantity" id="quantity" style="color: black; display: inline-block; margin_bottom:0;"></h2>
                        <button class="counter-change-btn" id="increment_quantity" onclick="increament_quantity()">+</button>
                    </div>
                </td>
            </tr>
            <tr>
                <td><h4>Prize</h4></td>
                <td>
                    <div class="prize">10,000&nbsp;<span class="currency-unit">Pkr</span></div>
                </td>
            </tr>
            <tr>
                <td><button class="wishlist-btn"><i class="icon fa-solid fa-heart"></i></button></td>
                <td><input type="submit" class="addtocart-btn" value="Add to cart" /></td>
            </tr>
        </table>
        <p class="product-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum incidunt inventore obcaecati vel, iusto eum cupiditate dicta magni pariatur voluptatibus repudiandae perferendis illum quidem facilis veritatis sit distinctio enim aliquid.</p>
      </div>
    </div>
  </div>
<?php include_once("partial/footer.php"); ?>
