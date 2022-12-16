<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<?php
    $Blog_Card = array(
        array(
            "Type"=>"Img_Top",
            "Header"=>"",
            "Card_Title"=>"About", 
            "Desc"=>"Hi! I'm Connie and welcome to my space. I have two besties, Mocha and Maple. We love to travel, snow shoe, and be couch potatos!",
            "Btn"=>array("#", "Know more about us!"),
            "Date"=>"",),
        array(
            "Type"=>"Header_Top",
            "Header"=>"News",
            "Card_Title"=>"Happy New Year", 
            "Desc"=>"The Lunar New Year is around the corner! Next Tuesday on Feburary 1st, 2022 will be the Lunar New Year Day! 2022 will be the year of Tiger, so stay warm and have fun with families.",
            "Btn"=>array("#", "Checkout More"),
            "Date"=>"Jan 27, 2022",),
        array(
            "Type"=>"List_Group",
            "Header"=>"",
            "Card_Title"=>"Subscribe", 
            "Desc"=>"Get <b>unlimited</b> times of service and <b>10% off</b> on all orders today! Also unlock our <b>speical bonus</b> each month!",
            "Btn"=>array("#", "Buy"),
            "Link"=>array("#", "Compare Plan"),
            "Date"=>"",
            "List_item"=>array("$9.99/Mo", "$109.99/Yr", "$199.99/2Yrs")),
        array(
            "Type"=>"",
            "Header"=>"",
            "Card_Title"=>"", 
            "Desc"=>"",
            "Btn"=>array("#", ""),
            "Date"=>"",),
        array(
            "Type"=>"",
            "Header"=>"",
            "Card_Title"=>"", 
            "Desc"=>"",
            "Btn"=>array("#", ""),
            "Date"=>"",),
    
    
    );
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
                            <div class="card">
                                <img src="/resources/img/home_h750.jpg" class="card-img-top w-100" alt="Mocha&Maple">
                                <div class="card-body">
                                    <h5 class="card-title">About</h5>
                                    <p class="card-text">Hi! I'm Connie and welcome to my space. I have two besties, Mocha and Maple. We love to travel, snow shoe, and be couch potatos!</p>
                                    <a href="#" class="btn btn-danger">Know more about us!</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    News
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Happy New Year</h5>
                                    <p class="card-text">The Lunar New Year is around the corner! Next Tuesday on Feburary 1st, 2022 will be the Lunar New Year Day! 2022 will be the year of Tiger, so stay warm and have fun with families. </p>
                                    <a href="#" class="btn btn-danger">Checkout More</a>
                                </div>
                                <div class="card-footer text-muted">
                                    Jan 27, 2022 <small>Today</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Subscribe</h5>
                                    <p class="card-text">Get <b>unlimited</b> times of service and <b>10% off</b> on all orders today! Also unlock our <b>speical bonus</b> each month!</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">$9.99/Mo</li>
                                    <li class="list-group-item">$109.99/Yr</li>
                                    <li class="list-group-item">$199.99/2Yrs</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="btn btn-danger">Buy</a>
                                    <a href="#" class="card-link px-3">Compare Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="row g-0">
                                    <div class="col-md-6">
                                        <img src="/resources/img/cattree_h756xw378.jpg" class="card-img-top" id="card3_img" alt="Mocah on cat tree" style="max-height: 300px; max-width: 200px">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body">
                                            <h5 class="card-title">New!</h5>
                                            <p class="card-text">Our new product is on-line now! Buy it today and get free-shipping! The number is limited so act quick and own it now!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    Announcement
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><span class="badge bg-success">New</span> New Web Design is Coming! </h5>
                                    <p class="card-text">We will launch a new design soon in Feburary. Check back our website next month for the new look! </p>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width: 53%"></div>
                                        <p>&nbsp&nbsp14 days left...</p>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <small class="text-muted">Last updated 3 days ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <img src="/resources/img/car_h1080.jpg" class="card-img-top w-100" alt="Mocha&Maple on roadtrip">
                                <div class="card-body">
                                    <h5 class="card-title">Gallery</h5>
                                    <p class="card-text">Check out the Gallery of Mocha and Maple. We've been traveling a lot and got many awesome photographies for everyone!
                                    </p>
                                    <a href="#" class="btn btn-danger">Gallery</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2022 Canlender</h5>
                                    <p class="card-text">Our 2022 Desk Calendar is now available! Based on our roadtrip in August 2021, we have tons of amazing images with our two puuur-fect models. Limited quantity is available so buy it now!
                                    </p>
                                </div>
                                <a href="#"><img src="/resources/img/2022calendar.png" class="card-img-top w-100" alt="Mocha&Maple 2022"></a>
                                <div class="card-footer text-muted">
                                    <small class="text-muted">Last updated 7 days ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    Blog
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Pet Diet</h5>
                                    <p class="card-text">Is dry food really good for your pet's health? Do you know what is the dry food you buy made of? When was the first pet dry food and canned food invented? Check out the links below to find out the reality in pet food industry! </p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a href="https://youtu.be/2eVoicSHimI" target="_blank" class="card-link">Pet Foo<small>le</small>d</a></li>
                                    <li class="list-group-item"><a href="https://topdogtips.com/pet-food-controversies/" target="_blank" class="card-link">Pet Food Industry Controversies</a></li>
                                    <li class="list-group-item"><a href="https://topdogtips.com/most-dog-food-recalls/" target="_blank" class="card-link">Brands with Most Recalls</a></li>
                                </ul>
                                <div class="card-footer text-muted">
                                    Jan 18, 2022 <small>Tuesday</small>
                                </div>
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