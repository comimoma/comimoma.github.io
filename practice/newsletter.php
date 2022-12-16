<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<section class="p-0 m-0 mb-5" style="min-height: 90px" id="page-top"></section>
<!-- ORIGINAL --- Newsletter-->
<section class="px-5 py-2 bg-danger mb-5">
    <div class="container">
        <h5 class="py-3">ORIGINAL Element</h5>
        <div class="d-sm-flex justify-content-between align-items-center">
            <p class="text-center text-md-white lead fw-bolder px-4">Join Our Newsletter Today</p>
            <div class="input-group news-input">
                <input type="email" class="form-control" placeholder="Enter your email here">
                <button class="btn btn-warning" type="button">Subscribe</button>
                <p class="text-md-white p-0 m-0" style="font-size: 14px">Subscribe for <?php echo $news_desc["freq"]; ?> access to exclusive resources and <?php echo $news_desc["discount"]; ?>. <small>No Spam. We'll never share your email with anyone else.</small></p>
            </div>
        </div>
    </div>
</section>

<!-- FUNCTION --- Newsletter-->
<section class="px-5 py-2 bg-danger">
    <div class="container">
        <h5 class="py-3">FUNCTION Element</h5>
        <div class="d-sm-flex justify-content-between align-items-center">
            <p class="text-center text-md-white lead fw-bolder px-4">Join Our Newsletter Today</p>




            <div class="input-group news-input">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <input type="email" class="form-control" placeholder="Enter your email here" name="email">
                    <input type="submit" class="btn btn-warning" name="submit" value="Subscribe" data-bs-toggle="modal" data-bs-target="#subscribeNewsletter">
                    
                    
                </form>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#subscribeNewsletter">Subscribe</button>

                <!-- Modal -->
                <div class="modal fade" id="subscribeNewsletter" tabindex="-1" aria-labelledby="subscribeNewsletterLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="subscribeNewsletterLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>



                <p class="text-md-white p-0 m-0" style="font-size: 14px">Subscribe for <?php echo $news_desc["freq"]; ?> access to exclusive resources and <?php echo $news_desc["discount"]; ?>. <small>No Spam. We'll never share your email with anyone else.</small></p>
            </div>
        </div>
    </div>
</section>


<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>
