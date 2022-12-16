//include top_nav bar and banner
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
// include page data
<?php 
   //$data = $_SERVER['DOCUMENT_ROOT'];
   //$data .= "/database.php";
   //include_once($data);
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
                <div>
                    <p class="" style="font-size: 12px;">Category/Best Sellers</p>
                </div>
                <h3 class="pb-3">Best Sellers</h3>
                <!--Grid Cards-->
                <div class="row text-dark p-1 m-0">
                    <?php
                        $set_num_items = 9;
                        $actual_num_items = count($pet_products);
                        if ($set_num_items <= $actual_num_items){
                            $display_num_items = $set_num_items;
                        } else{
                            $display_num_items = $actual_num_items;
                        }
                        for ($i =0; $i < $display_num_items; $i++) {
                            $general_img_path = "/resources/img/" . $pet_products[$i]["imgRef"];
                    ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6 mb-1 p-2">
                        <div class="card h-100 product-item">
                            <a href="#" class="text-decoration-none text-black p-0 m-0 text-center">
                                <img src="<?php echo $general_img_path;?>" class="card-img-top w-100" alt="item">
                                <h5 class="card-title px-2 fw-bold text-capitalize"><?php echo $pet_products[$i]["itemName"];?></h5>
                                <h5 class="card-title px-2 fw-normal text-capitalize fs-6"><?php echo $pet_products[$i]["itemDesc"];?></h5>
                                <p class="card-text px-3 text-md-black text-end pb-1"><?php echo "$" . $pet_products[$i]["Price"];?></p>
                            </a>
                        </div>
                    </div>
                    <?php        
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Behavior Consult-->
<section class="p-5 bg-darkred text-light" id="behavior_consult">
    <div class="h1 text-center">
        <h2 class="text-uppercase">
            <?php echo $behaviorControl["header"];?>
        </h2>
        <h5 class="text-md-white mb-4">
            <?php echo $behaviorControl["header_desc"];?>
        </h5>
    </div>
    <div class="container">
        <p class="lead">
            <?php echo $behaviorControl["content_lead"];?>
        </p>
        <p class="">
            <?php echo $behaviorControl["content"];?>
        </p>
    </div>
    <div class="container-lg d-flex text-center">
        <div class="flex-grow-1">
            <a href="/pages/services/behavior_consult.php" class="btn btn-danger w-100">Learn More About What We Offer to Help</a>
        </div>
    </div>
</section>
<!--Travel Support-->
<section class="p-5" id="travel_support">
    <div class="h1 text-center">
        <h2 class="text-uppercase">
            <?php echo $travelSupport["header"];?>
        </h2>
        <h5 class="text-md-black mb-4">
            <?php echo $travelSupport["header_desc"];?>
        </h5>
    </div>
    <div class="container">
        <p class="lead">
            <?php echo $travelSupport["content_lead"];?>
        </p>
        <p class="">
            <?php echo $travelSupport["content"];?>
        </p>
    </div>
    <div class="container-lg d-flex text-center">
        <div class="flex-grow-1">
            <a href="/pages/services/travel_support.php" class="btn btn-danger w-100">Learn More About What We Offer to Help</a>
        </div>
    </div>
</section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>