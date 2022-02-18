<?php include_once ("partial/header.php"); ?>

<div class="hero-image" style="height: 100%">
  <div class="hero-text">
    <h1>Al Rahman Computes</h1>
    <p>We make it happen</p>
    <a class="hero_button" href="#featured_product">FIND BEST IMAC</a>
  </div>
</div>

<!-- featured products -->

<div class="container" id="featured_product">
  <h2 class="heading">Featured Products<span></span></h2>
  <div class="row">
    <div class="col-lg-4 col-md-6 my-2">
      <div class="card" style="margin: 0 auto">
        <div class="card-header">
          <a href="product.php">
            <img src="images/imac.jpg" alt="rover" />
          </a>
        </div>
        <div class="card-body">
          <span class="tag cheap_tag">Cheap</span>
          <h4 class="product_title">
            <a href="product.php">Apple Imac MHK03 - 7th Gen Core i5 2.3Ghz processor</a>
          </h4>
          <p class="product_description">
            This iMac 2020 comes in a Space Gray colour it delivers visuals with
            simple clarity, nothing too fancy.
          </p>
          <span class="price_outer mt-2"
            ><b>Rs. </b> <span class="cut-price">224,900</span>&nbsp;&nbsp;<span
              class="price"
              >224,900</span
            >/-</span
          >
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-2">
      <div class="card" style="margin: 0 auto">
        <div class="card-header">
          <a href="product.php">
            <img src="images/imac2.jpg" alt="rover" />
          </a>
        </div>
        <div class="card-body">
          <span class="tag trending_tag">Trending</span>
          <h4 class="product_title">
            <a href="product.php">Apple Imac MHK03 - 7th Gen Core i5 2.3Ghz processor</a>
          </h4>
          <p class="product_description">
            The latest iMac 2020 that comes in silver colour and with 4K Retina
            display delivers impressively clear visuals, is great for 
          </p>
          <span class="price_outer mt-2"
            ><b>Rs. </b> <span class="cut-price">264,900</span>&nbsp;&nbsp;<span
              class="price"
              >264,900</span
            >/-</span
          >
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-2">
      <div class="card" style="margin: 0 auto">
        <div class="card-header">
          <a href="product.php">
            <img src="images/imac3.jpg" alt="rover" />
          </a>
        </div>
        <div class="card-body">
          <span class="tag indemand_tag">In demand</span>
          <h4 class="product_title">
            <a href="product.php">Apple Imac MHK03 - 7th Gen Core i5 2.3Ghz processor</a>
          </h4>
          <p class="product_description">
            Let's talk about the latest iMac 2020 by the company, particularly
            the Apple iMac MHK33.content
            creators and designers
          </p>
          <span class="price_outer mt-2"
            ><b>Rs. </b> <span class="cut-price">294,900</span>&nbsp;&nbsp;<span
              class="price"
              >294,900</span
            >/-</span
          >
        </div>
      </div>
    </div>
  </div>
</div>

<!-- contact us form -->

<div class="container" id="contact-us-form">
  <h1 class="heading">Contact Us<span></span></h1>
  <form action="" method="post">
    <div class="row input-container">
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="text" required />
          <label>Name</label>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="styled-input">
          <input type="text" required />
          <label>Email</label>
        </div>
      </div>
      <div class="col-md-6 col-sm-12">
        <div class="styled-input">
          <input type="text" required />
          <label>Phone Number</label>
        </div>
      </div>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <textarea required></textarea>
          <label>Message</label>
        </div>
      </div>
      <div class="col-xs-12">
        <input type="submit" class="addtocart-btn" value="Contact us" />
      </div>
    </div>
  </form>
</div>

<!-- testimonials -->

<?php include_once ("partial/footer.php"); ?>
