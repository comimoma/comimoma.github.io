<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>

<?php
    $blogCard = $_SERVER['DOCUMENT_ROOT'];
    $blogCard .= "/resources/php/blog-card.php";
    include_once($blogCard);
?>
            <section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>
            <!--Blog-->
            <section class="p-5" id="blog">
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-uppercase">Blog</h2>
                        <h5 class="text-md-black mb-4">
                            Lorem ipsum dolor sit amet, consectetur adipisicing.
                        </h5>
                    </div>
                    <div class="row text-dark">
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_1(
                                    "home_h750.jpg", 
                                    "Mocha&Maple", 
                                    "About", 
                                    "Hi! I'm Connie and welcome to my space. I have two besties, Mocha and Maple. We love to travel, snow shoe, and be couch potatos!", 
                                    "Know more about us",
                                    "#")
                            ?> 
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_2(
                                    "News", 
                                    "Happy New Year", 
                                    "The Lunar New Year is around the corner! Next Tuesday on Feburary 1st, 2022 will be the Lunar New Year Day! 2022 will be the year of Tiger, so stay warm and have fun with families.", 
                                    "Checkout More", 
                                    "#",
                                    "Jan 27, 2022")
                            ?> 
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_3(
                                    "Subscribe", 
                                    "Get <b>unlimited</b> times of service and <b>10% off</b> on all orders today! Also unlock our <b>speical bonus</b> each month!", 
                                    array(
                                        array("Name"=>"$9.99/Mo"),
                                        array("Name"=>"$109.99/Yr"),
                                        array("Name"=>"$199.99/2Yrs")), 
                                    "Buy", 
                                    "#",
                                    "Compare Plan",
                                    "#")
                            ?> 
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_4(
                                    "cattree_h756xw378.jpg", 
                                    "Mocha on cat tree", 
                                    "New!", 
                                    "Our new product is on-line now! Buy it today and get free-shipping! The number is limited so act quick and own it now!", 
                                    "3 mins")
                            ?>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_5(
                                    "Announcement", 
                                    "New", 
                                    "New Web Design is Coming!", 
                                    "We will launch a new design soon in Feburary. Check back our website next month for the new look!", 
                                    "14",
                                    "3 days")
                            ?>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_6(
                                    "2022 Canlender", 
                                    "Our 2022 Desk Calendar is now available! Based on our roadtrip in August 2021, we have tons of amazing images with our two puuur-fect models. Limited quantity is available so buy it now!", 
                                    "2022calendar.png", 
                                    "Mocha&Maple 2022", 
                                    "#",
                                    "7 days")
                            ?>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                           <?php
                                blogCard_7(
                                    "Blog", 
                                    "Pet Diet", 
                                    "Is dry food really good for your pet's health? Do you know what is the dry food you buy made of? When was the first pet dry food and canned food invented? Check out the links below to find out the reality in pet food industry!", 
                                    array(
                                        array(
                                            "Name"=>"Pet Foo<small>le</small>d",
                                            "Link"=>"https://youtu.be/2eVoicSHimI"), 
                                        array(
                                            "Name"=>"Pet Food Industry Controversies",
                                            "Link"=>"https://topdogtips.com/pet-food-controversies/"),
                                        array(
                                            "Name"=>"Brands with Most Recalls",
                                            "Link"=>"https://topdogtips.com/most-dog-food-recalls/")), 
                                    "Jan 18, 2022")
                            ?>
                        </div>
                    </div>
                </div>
            </section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>