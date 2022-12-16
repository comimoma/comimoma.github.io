<?php include 'resources/inc/datafromarrays.php'; ?>
<?php include 'resources/templates/header.php'; ?>

<?php
    // I need an array of products
    $products = getProductArrayBasedOnQuerystring();

    // rule: that array needs to be based on the querystring
    // getProductArrayBasedOnQuerystring

?>



<!-- BREADCRUMBS -->
<div class="container-xxl mt-3">
    <div class="row">
        <div class="col-2 d-none d-lg-block border border-1">
            FILTER/SEARCH BAR
        </div>
        <div class="col col-lg-10">
            <div class="container-xxl px-0 mb-3">
                <a href=""><i class="bi bi-house mx-2 text-secondary"></i></a>
                >
                <a href="">DinnerWare</a>
                >
                12" Dinner Plates
            </div>

            <div class="row row-cols-2 g-4 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-5">
                <?php
                foreach ($products as $product) {
                ?>
                <div class="col">
                    <img class="w-100" src="<?php echo $product['imgName']; ?>" />
                    <p class="my-0 px-2"><?php echo $product['Name']; ?></p>
                    <p class="my-0 px-2 lead">$42.00</p>
                </div>
                <?php   
                    }
                ?>
            </div>
        </div>
    </div>
</div>


<?php include 'resources/templates/footer.php';?>
