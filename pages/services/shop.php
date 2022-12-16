<?php 
   //include top_nav bar and banner
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>
<!--Shop-->
<section class="p-4" id="shop">
    <div class="container-lg p-auto py-0">
        <div class="row">
            <!--Nav Sidebar-->
            <div class="col-auto col-sm-4 col-md-3 col-xl-2 d-none d-sm-block ps-0">
                <div class="flex-columnn mt-5">
                    <div class="py-1 text-center">
                        <a href="/pages/services/shop.php?theproductpageID=bestSellers" class="product_navbar">Best Sellers</a>
                    </div>
                    <div class="py-1 text-center">
                        <a href="/pages/services/shop.php?theproductpageID=newArrivals" class="product_navbar">New Arrivals</a>
                    </div>
                    <div class="py-1 text-center">
                        <a href="/pages/services/shop.php?theproductpageID=petSupplies" class="product_navbar">Pet Supplies</a>
                    </div>
                    <div class="py-1 text-center">
                        <a href="/pages/services/shop.php?theproductpageID=accessories" class="product_navbar">Accessories</a>
                    </div>
                    <div class="py-1 text-center">
                        <a href="/pages/services/shop.php?theproductpageID=giftCollection" class="product_navbar">Gift Collection</a>
                    </div>
                    <div class="py-1 text-center">
                        <a href="shop.php" class="product_navbar">View All</a>
                    </div>
                </div>
            </div>
            <!--Products-->
            <div class="col-auto col-sm-8 col-md-9 col-xl-10">
                <?php
                    if (isset($_GET["theproductpageID"])) {
                        $set_list_type = $_GET["theproductpageID"];
                        switch ($_GET["theproductpageID"]) {
                            case "bestSellers": 
                                $Product_Category = "Best Sellers";
                                break;
                            case "newArrivals":
                                $Product_Category = "New Arrivals";
                                break;
                            case "petSupplies": 
                                $Product_Category = "Pet Supplies";
                                break;
                            case "accessories":
                                $Product_Category = "Accessories";
                                break;
                            case "giftCollection":
                                $Product_Category = "Gift Collection";
                                break;
                        } } else {
                        $Product_Category = "All Products";
                        $set_list_type = "none";
                    }
                ?>
                <div>
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb" style="font-size: 12px;">
                            <li class="breadcrumb-item">
                                <a class="breadcrumb_link" href="#">All</a>
                            </li>
                            <?php
                                if ($Product_Category != "All Products") {
                            ?>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo $Product_Category; ?></li>
                            <?php
                                }
                            ?>
                        </ol>
                    </nav>
                </div>
                <h3 class="pb-3"><?php echo $Product_Category; ?></h3>
                <!--Grid Cards-->
                <div class="row text-dark p-1 m-0">
                    <?php
                        $set_num_items = 20;
                        $actual_total_num_items = count($pet_products);
                        if ($set_list_type != "none") {
                            $actual_num_items = 0;
                            $GLOBALS['filtered_pet_products'] = array();
                            for ($i=0;$i<$actual_total_num_items;$i++){
                                // -------- THIS IS FOR PHP7 -------- 
                                // if (strpos($pet_products[$i]["listType"], $set_list_type) === 0) { 
                                // -------- BELOW IS FOR PHP8 -------- 
                                if (str_contains($pet_products[$i]["listType"], $set_list_type)) {
                                    $actual_num_items+=1;
                                    array_push($filtered_pet_products, $pet_products[$i]);
                                }
                            }
                            $actual_total_num_items = $actual_num_items;
                        }
                        if ($set_num_items <= $actual_total_num_items){
                            $display_num_items = $set_num_items;
                        } else{
                            $display_num_items = $actual_num_items;
                        }
                        for ($i =0; $i < $display_num_items; $i++) {
                            if ($set_list_type != "none") {
                                $general_img_path = "/resources/img/" . $filtered_pet_products[$i]["imgRef"];
                                $the_item = $filtered_pet_products[$i]["itemName"];
                                $the_desc = $filtered_pet_products[$i]["itemDesc"];
                                $the_cost = $filtered_pet_products[$i]["Price"];
                            } else {
                                $general_img_path = "/resources/img/" . $pet_products[$i]["imgRef"];
                                $the_item = $pet_products[$i]["itemName"];
                                $the_desc = $pet_products[$i]["itemDesc"];
                                $the_cost = $pet_products[$i]["Price"];
                            }
                    ?>
                            <div class="col-xl-3 col-lg-4 col-sm-6 mb-1 p-2">
                                <div class="card h-100 product-item">
                                    <a href="#" class="text-decoration-none text-black p-0 m-0 text-center">
                                        <img src="<?php echo $general_img_path;?>" class="card-img-top w-100" alt="item">
                                        <h5 class="card-title px-2 fw-bold text-capitalize"><?php echo $the_item?></h5>
                                        <h5 class="card-title px-2 fw-normal text-capitalize fs-6"><?php echo $the_desc;?></h5>
                                        <p class="card-text px-3 text-md-black text-end pb-1"><?php echo "$" . $the_cost;?></p>
                                    </a>
                                </div>
                            </div>
                    <?php        
                        }
                    ?>
                </div>
                <?php 
                    if ($set_num_items <= $actual_total_num_items) {
                        $page_display = "";
                    } else {
                        $page_display = "hidden";
                    }
                ?>
                <div class="text-md-black mt-3 hidden" <?php echo $page_display ?> >
                    <nav aria-label="Page navigation example">
                        <ul class="pagination  justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="">1</a></li>
                            <li class="page-item"><a class="page-link" href="">2</a></li>
                            <li class="page-item"><a class="page-link" href="">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>