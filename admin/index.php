<?php 
include_once("partial/header.php"); 
include_once("config.php"); 
?>
	<div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="box">
                                <p>
                                        <?php echo mysqli_num_rows(mysqli_query($conn,"SELECT product_id FROM products")); ?>
                                        <br/>
                                        <span>Products</span>
                                </p>
                                <i class="box-icon fa fa-sitemap"></i>
                        </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="box">
                                <p>0<br/><span>Orders</span></p>
                                <i class="fa fa-shopping-bag box-icon"></i>
                        </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="box">
                                <p>0<br/><span>Delevered</span></p>
                                <i class="box-icon fa fa-location-arrow"></i>
                        </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                        <div class="box">
                                <p>0<br/><span>Pending</span></p>
                                <i class="fa fa-clock-o box-icon"></i>
                        </div>
                </div>
        </div>
	<br/><br/>
	<div class="row">
                <div class="col-8">
                        <div class="box-8">
                                <div class="content-box">
                                        <p>Top Selling Projects <span>Sell All</span></p>
                                        <br/>
                                        <table>
                                                <tr>
                                                        <th>Company</th>
                                                        <th>Contact</th>
                                                        <th>Country</th>
                                                </tr>
                                                <tr>
                                                        <td>Alfreds Futterkiste</td>
                                                        <td>Maria Anders</td>
                                                        <td>Germany</td>
                                                </tr>
                                                <tr>
                                                        <td>Centro comercial Moctezuma</td>
                                                        <td>Francisco Chang</td>
                                                        <td>Mexico</td>
                                                </tr>
                                                <tr>
                                                        <td>Ernst Handel</td>
                                                        <td>Roland Mendel</td>
                                                        <td>Austria</td>
                                                </tr>
                                                <tr>
                                                        <td>Island Trading</td>
                                                        <td>Helen Bennett</td>
                                                        <td>UK</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>
                </div>
                <div class="col-4">
                        <div class="box-4">
                                <div class="content-box">
                                        <p>Total Sale <span>Sell All</span></p>
                                        <div class="circle-wrap">
                                                <div class="circle">
                                                        <div class="mask full">
                                                                <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                                <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> 70% </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>

<?php include_once("partial/footer.php"); ?>