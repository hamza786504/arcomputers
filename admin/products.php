<?php include_once("partial/header.php");
if(!isset($_SESSION["user_name"])){
        header("Location: login.php");
}
?>
<div class="row" style="min-height: 100px; text-align: end;">
        <div class="col">
                <button class="btn btn-secondary" id="add_product">Add products</button>
        </div>
</div>
<div class="row">
                <div class="col">
                        <div class="box">
                                <div class="content-box">
                                        <p>Products</p>
                                        <br/><br/>
                                        <div class="table-responsive">
                                        <table class="table">
                                                <thead>
                                                        <tr>
                                                                <th>Name</th>
                                                                <th>Price</th>
                                                                <th>Category</th>
                                                                <th>Total Sales</th>
                                                                <th></th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <?php
                                                        if(isset($_GET["page_no"])){
                                                          $page_no = $_GET["page_no"];
                                                        }else{
                                                          $page_no = 1;
                                                        }
                                                        $limit = 50;
                                                        $offset = ($page_no - 1) * $limit;

                                                        $read_products_query = "SELECT product_id , product_name , discounted_price , tags_name , total_sales , category_name FROM products 
                                                        LEFT JOIN tags ON tags.tags_id = products.tag
                                                        LEFT JOIN categories ON categories.category_id = products.category ORDER BY product_id DESC LIMIT {$offset} , {$limit}";
                                                        $read_products_result = mysqli_query($conn , $read_products_query);
                                                        if(mysqli_num_rows($read_products_result) > 0){
                                                                while($read_products_row = mysqli_fetch_assoc($read_products_result)){
                                                                        echo "<tr>
                                                                                <td>"; echo substr($read_products_row['product_name'],0,40); echo "</td>
                                                                                <td>{$read_products_row['discounted_price']}</td>
                                                                                <td>{$read_products_row['category_name']}</td>
                                                                                <td>{$read_products_row['total_sales']}</td>
                                                                                <td style='text-align: end;'>
                                                                                <button class='btn btn-sm btn-warning'>View</button>
                                                                                <button class='btn btn-sm btn-success'>Edit</button>
                                                                                <button id='delete_product' data-id='{$read_products_row['product_id']}' class='btn btn-sm btn-danger'>Delete</button>
                                                                                </td>
                                                                        </tr>";
                                                                }
                                                        }
                                                        echo "
                                                </tbody>
                                        </table>
                                </div>";
                                        $pagination_query = "SELECT * FROM products";
                                        $pagination_result = mysqli_query($conn , $pagination_query);
                                                        if(mysqli_num_rows($pagination_result) > $limit){
                                echo "<ul class='custom-pagination'>";
        if(mysqli_num_rows($pagination_result) > 0){
          $total_pages = ceil(mysqli_num_rows($pagination_result) / $limit);

            if($page_no >= 2){
              echo "<li><a href='products.php?page_no=" . $page_no - 1 . "'>Prev</a></li>";
            }
            for($i = $page_no; $i <= $total_pages; $i++){
              $times = $page_no + 1;
              if($i <= $total_pages){
                echo "<li><a href='products.php?page_no=" . $i . "'>" . $i . "</a></li>";
              }
            }
            

        
          if($page_no < $total_pages){
            echo "<li><a href='products.php?page_no=" . $page_no + 1 . "'>Next</a></li>";
          }
        }
                                echo "</ul>"; } echo"
                        </div>
                </div>
        </div>
                <!-- <div class='col-4'>
                        <div class='box-4'>
                                <div class='content-box'>
                                        <p>Total Sale <span>Sell All</span></p>
                                        <div class='circle-wrap'>
                                                <div class='circle'>
                                                        <div class='mask full'>
                                                                <div class='fill'></div>
                                                        </div>
                                                        <div class='mask half'>
                                                                <div class='fill'></div>
                                                        </div>
                                                        <div class='inside-circle'> 70% </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div> -->
        </div>";
?>

<?php include_once("partial/footer.php"); ?>