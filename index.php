<?php include 'resources/php/header-home.php';?>
<?php
   $blogCard = $_SERVER['DOCUMENT_ROOT'];
   $blogCard .= "/resources/php/blog-card.php";
   include_once($blogCard);
?>
<section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>
<!--MasterHead-->
<div class="bg-darkred py-3 m-0">
    <section class="container-lg bg-darkred text-light py-4 text-center text-sm-start masterhead align-items-center">
        <div class="container-lg py-5 my-5">
            <div class=" align-items-center justify-content-between pt-3">
                <div class="masterhead-title">
                    <h4 class="text-center m-3" ><?php echo "Best Wishes for a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?></h3>
                    
                    <h1 class="text-center"><?php echo "Merry Christmas" ?></h1>
                    
                    <h4 class="text-center m-3"><?php echo "And a &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ?></h3>
                    
                    <h1 class="text-center"><?php echo "Happy New Year!" ?></h1>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Services-->
<!--
<section class="p-5" id="services">
    <div class="container">
        <div class="h1 text-center">
            <h2 class="text-uppercase"><?php echo array_keys($CategoryTag)[1]; ?></h2>
            <h5 class="text-md-black mb-4"><?php $catkeys = array_keys($CategoryTag)[1]; echo $CategoryTag[$catkeys]["desc"]; ?></h5>
        </div>
        <div class="row text-center">
            <?php 
                foreach($sub_cat["Services"] as $subkey=>$subDesc){
            ?>
            <div class="col-md">
                <div class="card">
                    <div class="card-body text-center">
                        <h1 class="mb-3"><i class="<?php echo $subDesc["icon"]; ?>"></i></h1>
                        <h3 class="card-title mb-3"><?php echo $subkey; ?></h3>
                        <p class="card-text">
                            <?php echo $subDesc["desc"]; ?>
                        </p>
                        <a href="<?php echo $subDesc["btnLink"]; ?>" class="btn btn-danger tagRemove"><?php echo $subDesc["btnName"]; ?></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>
-->
<!--Newsletter-->
<!--
<section class="px-5 py-2 bg-danger">
    <div class="container">
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
-->
<!--Blog-->
<!--
<section class="bg-darkred text-light p-5" id="blog">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase"><?php echo array_keys($CategoryTag)[2]; ?></h2>
            <h5 class="text-md-white mb-4"><?php $catkeys = array_keys($CategoryTag)[2]; echo $CategoryTag[$catkeys]["desc"]; ?></h5>
        </div>
        <div class="row text-dark">
            <?php
                        $total_num_cards = count($blog_Data);
                        $set_max_load_num_cards = 4;
                        if ($total_num_cards < $set_max_load_num_cards){
                            $display_num_cards = $total_num_cards;
                        } else {
                            $display_num_cards = $set_max_load_num_cards;
                        }
                        for($i=0;$i<$display_num_cards;$i++){
                            $theBlogData = $blog_Data[$i];
                      ?>
            <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                <?php 
                            $card_type = $theBlogData["cardType"];
                            switch($card_type) {
                                case "1":
                                    blogCard_1(
                                        $theBlogData["imgSrc"],
                                        $theBlogData["imgAlt"],
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["btnName"],
                                        $theBlogData["btnLink"]);
                                    break;
                                case "2":
                                    blogCard_2(
                                        $theBlogData["header"],
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["btnName"],
                                        $theBlogData["btnLink"], $theBlogData["postDateTime"]);
                                    break;
                                case "3": 
                                    blogCard_3(
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["listGroup"],
                                        $theBlogData["btnName"],
                                        $theBlogData["btnLink"],
                                        $theBlogData["secName"],
                                        $theBlogData["secLink"]);
                                    break;
                                case "4":
                                    blogCard_4(
                                        $theBlogData["imgSrc"],
                                        $theBlogData["imgAlt"],
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["lastUpdateDateTime"]);
                                    break;
                                case "5":
                                    blogCard_5(
                                        $theBlogData["header"],
                                        $theBlogData["badge"],
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["dueDate"],
                                        $theBlogData["lastUpdateDateTime"]);
                                    break;
                                case "6":
                                    blogCard_6(
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["imgSrc"],
                                        $theBlogData["imgAlt"],
                                        $theBlogData["imgLink"],
                                        $theBlogData["lastUpdateDateTime"]);
                                    break;
                                case "7":
                                    blogCard_7(
                                        $theBlogData["header"],
                                        $theBlogData["title"],
                                        $theBlogData["content"],
                                        $theBlogData["listGroup"],
                                        $theBlogData["postDateTime"]);
                                    break;
                                default:
                                    blogCard_default(
                                        $theBlogData["title"],
                                        $theBlogData["content"]);
                                    
                            }
                        ?>
            </div>
            <?php        
                        }
                      ?>
        </div>
        <div class="container-lg d-flex text-center m-0 p-0">
            <div class="flex-grow-1 my-0 py-0">
                <a href="/pages/blog.php" class="btn btn-danger w-100">View All Recent Posts</a>
            </div>
        </div>
    </div>
</section>
-->
<!--About-->
<!--
<section class="p-5" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase"><?php echo array_keys($CategoryTag)[3]; ?></h2>
            <h5 class="text-md-black mb-4">
                <?php $catkeys = array_keys($CategoryTag)[3]; echo $CategoryTag[$catkeys]["desc"]; ?>
            </h5>
        </div>
        <ul class="timeline mt-5">
            <?php
                $Timeline = $sub_cat["About"];
                for ($j=0; $j<count($Timeline); $j++){
                    if ($j == 0) {
                        $timeline_pos = "";
                    }
                    else {
                        $server_php_ver = (float)phpversion();
                        if ($server_php_ver < 8){  // PHP7 or below 
                            if (strpos($timeline_pos, "inverted") === 9) {
                                $timeline_pos = "";
                            } else {
                                $timeline_pos = "timeline-inverted";
                            }
                        } else { // PHP8 or above
                            if (str_contains($timeline_pos, "timeline-inverted")){
                                $timeline_pos = "";
                            } else {
                                $timeline_pos = "timeline-inverted";
                            }
                        }
                    }
                    $TimeKey = array_keys($Timeline)[$j];
                    $about_img_src = "/resources/img/" . $Timeline[$TimeKey]["imgSrc"];
            ?>
            <li class="<?php echo $timeline_pos; ?>">
                <div class="timeline-image">
                    <a href="#">
                    <img class="rounded-circle img-fluid h-100" src="<?php echo $about_img_src; ?>" alt="..." />
                    </a>
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h5><?php echo $Timeline[$TimeKey]["MM YYYY"]; ?></h5>
                        <h4 class="subheading text-capitalize"><?php echo $Timeline[$TimeKey]["header"]; ?></h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted"><?php echo $Timeline[$TimeKey]["info"]; ?></p>
                    </div>
                </div>
            </li>
            <?php
                }
            ?>
            <li class="timeline-inverted">
               <a href="">
                <div class="timeline-image">
                    <h4>
                        Our Journey has not ended!
                    </h4>
                </div>
                </a>
            </li>
        </ul>
    </div>
</section>
-->
<!--Team-->
<!--
<section class="bg-darkred text-light p-5 pb-3" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase">Amazing <?php echo array_keys($CategoryTag)[4]; ?></h2>
            <h5 class="text-md-white mb-4"><?php $catkeys = array_keys($CategoryTag)[4]; echo $CategoryTag[$catkeys]["desc"]; ?></h5>
        </div>
        <div class="row">
            <?php
                $Staff = $sub_cat["Team"];
                for ($i=0; $i<count($Staff["Name"]); $i++){
            ?>
            <div class="col-md-4 col-sm-12">
                <div class="card border-0">
                    <div class="card-body text-center bg-darkred">
                        <a href="#" class="text-white text-decoration-none">
                            <img src="<?php echo "/resources/img/" . $Staff["ImgSrc"][$i]; ?>" alt="" class="rounded-circle mb-3">
                            <h5 class="fw-bold"><?php echo $Staff["Name"][$i]; ?></h5>
                        </a>
                        <h6 class="mb-3"><?php echo $Staff["Title"][$i]; ?></h6>
                        <h6 class="mb-3">DOB - <?php echo $Staff["DOB"][$i]; ?></h6>
                        <h6 class="mb-3">AGE <?php echo $Staff["Age"][$i]; ?></h6>
                        <a href="<?php echo $Staff["twitter"][$i]; ?>"><i class="bi bi-twitter text-white mx-1"></i></a>
                        <a href="<?php echo $Staff["fb"][$i]; ?>"><i class="bi bi-facebook text-white mx-1"></i></a>
                        <a href="<?php echo $Staff["linkedin"][$i]; ?>"><i class="bi bi-linkedin text-white mx-1"></i></a>
                        <a href="<?php echo $Staff["ig"][$i]; ?>"><i class="bi bi-instagram text-white mx-1"></i></a>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center mt-4 mb-0 pb-0">
                <p class="text-md-white my-0 py-0">
                    Nature is the source of all true knowledge. She has her own logic, her own laws, she has no effect without cause nor invention without necessity.
                </p>
            </div>
            <div class="col-lg-8 mx-auto text-end mt-0 pt-0">
                <p class="text-md-white">
                    --- Leonardo da Vinci
                </p>
            </div>
        </div>
    </div>
</section>
-->
<!--Gallery-->
<!--
<section class="m-0 p-0 bg-darkred pb-3">
    <div id="carouselExampleIndicators" class="carousel slide container-lg" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="active" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <?php
                $gallery_carousel = $sub_cat["Gallery"];
                foreach($gallery_carousel as $gallery_pic) {
                    $imgFilePath = "/resources/img/". $gallery_pic;
                    
                    
                    $server_php_ver = (float)phpversion();
                        if ($server_php_ver < 8){  // PHP7 or below 
                            if (strpos($gallery_pic, "bryceCanyonNP_h756") === 0) { 
                                $display_mode = "active";
                            } else {
                                $display_mode = "";
                            }
                        } else { // PHP8 or above
                            if (str_contains($gallery_pic, "bryceCanyonNP_h756")) {
                                $display_mode = "active";
                            } else {
                                $display_mode = "";
                            }
                        }
            ?>
            <div class="carousel-item <?php echo $display_mode; ?>">
                <img src="<?php echo $imgFilePath; ?>" class="d-block w-100" alt="">
            </div>
            <?php
                }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
-->
<!--
    <div class="container-lg d-flex text-center">
        <div class="flex-grow-1">
            <a href="#" class="btn btn-danger w-100">View Entire Gallery</a>
        </div>
    </div>
-->
</section>
<!--Contact-->
<?php //include 'resources/php/contact-form.php';?>
<!-- Modal -->
<!--!!!!!!! STATIC BACKDROP  !!!!!!!-->
<!--<div class="modal fade" id="greetingModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="theModalLabel" aria-hidden="true">-->
<!--!!!!!!! NON-STATIC BACKDROP !!!!!!!-->
<!--
<div class="modal fade" id="greetingModal" tabindex="-1" aria-labelledby="theModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-darkred text-white text-center">
                <h5 class="modal-title text-center" id="theModalLabel">
                    <img src="/resources/img/COMOMA LOGO New rev2_180x100.png" style="height:65px;" class="px-2">Connie's Website
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="text-center fw-bold fs-2">
                    <?php 
                        date_default_timezone_set("America/New_York");
                        $today=strtotime("Now");
                        if (date("H", $today) >= 5 and date("H", $today) < 12){
                            echo "Good Morning";
                        } elseif (date("H", $today) >= 12 and date("H", $today) < 18) {
                            echo "Good Afternoon";
                        } elseif (date("H", $today) >= 18 and date("H", $today) < 24) {
                            echo "Good Evening";
                        } else {
                            echo "Hi there!";
                        }
                    ?>
                </h3>
                <p class="text-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo architecto cumque reprehenderit quas perferendis veritatis.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Continue</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No Thanks</button>
            </div>
        </div>
    </div>
</div>
-->
<?php include 'resources/php/footer.php';?>