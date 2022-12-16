<!--
Sitemap -- 
Home - Services - Pet Supplies
                - Behavior Control
                - Travel Support
     - Blog     - Hot
                - Travel
                - Training
                - Recipes
                - Lifestyle
                - All Post
                - [Categories]     - [Post]
     - About...
     - Team     - [Team_Bio]
     - Contact...
-->
<?php
/* Home 
   MasterHead - Headers
              - Background Images
*/
    $MasterHeader = array(
        "header"=>"Everything is Pawsible",
        "sub_header"=>"From paws to tails"
    );
    $MasterImg = array(
        "AZ.jpg",
        "bryceCanyonNP.jpg",
        "car_h1080.jpg",
        "home.jpg");
/* Home 
   Newsletter - (Newsletter frequency: daily/weekly/monthly/...)
              - Claim (small fonts)
*/
    $news_desc = array(
        "freq"=>"monthly",
        "discount"=>"25% OFF on the first order every month");
/* Home 
   Categories --> Sub-categories
   Home
   Services --> Pet Supplies / Behavior Consult / Travel Support
   Blog --> Hot / Travel / Training / Recipe / Lifestyle / All Posts
   About --> milestone #1, #2, #3, #4
   Team --> (Person #1, #2, #3)
   (Gallery) --> 
   Contact 
*/
    $sub_cat = array(
        "Services"=>array(
            "Pet Supplies"=>array(
                "icon"=>"bi bi-cart4",
                "desc"=>"We only offer high quality goods as we value each pet's health and happiness. 
                All of our products are checked out by Maple and Mocha with the very honest feedbacks.", 
                "btnName"=>"Shop",
                "btnLink"=>"/pages/service.php"), 
            "Behavior Consult"=>array(
                "icon"=>"bi bi-people",
                "desc"=>"Like humans need education, pets need proper education as well. Pet Training is necessary with no exception, yet it's never too late to teach your furkids :-)", 
                "btnName"=>"Learn More",
                "btnLink"=>"/pages/service.php#behavior_consult"),
            "Travel Support"=>array(
                "icon"=>"bi bi-geo-alt",
                "desc"=>"Going on a vacation with pets is never difficult! With a little preparation ahead, you will have the best travel experience with your loved ones.", 
                "btnName"=>"More Info",
                "btnLink"=>"/pages/service.php#travel_support")),
        "Blog"=>array("Hot", "Travel", "Training", "Recipe", "Lifestyle", "All Post"),
        "About"=>array(
            "mileStone1"=>array(
                "imgSrc"=>"mo_1stday_135x128.jpg",
                "MM YYYY"=>"February 2020",
                "header"=>"Lorem Ipsum Dolor",
                "info"=>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!"),
            "mileStone2"=>array(
                "imgSrc"=>"ma_1stday_135x128.jpg",
                "MM YYYY"=>"March 2020",
                "header"=>"Lorem Ipsum Dolor Sit",
                "info"=>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!"),
            "mileStone3"=>array(
                "imgSrc"=>"moma_roadtrip_135x128.jpg",
                "MM YYYY"=>"August 2021",
                "header"=>"Lorem Dolor Sit",
                "info"=>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!"),
            "mileStone4"=>array(
                "imgSrc"=>"mo_couch_135x128.jpg",
                "MM YYYY"=>"March 2022",
                "header"=>"Lorem Ipsum Dolor Sit Lorem Ipsum",
                "info"=>
                    "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!")),
        "Team"=>array(
            "Name"=>array("Ms. Maple", "Mr. Mocha", "Connie Ou"),
            "Title"=>array("Chief Crazy Officer", "Chief Social Officer", "Sales Manager</br>Pawrents of Two"),
            "DOB"=>array("February 01", "September 18", "Everyday"),
            "Age"=>array("2", "2", "18 Forever"),
            "ImgSrc"=>array(
                "ma_lake_128.jpg", 
                "mo_home_128.jpg",
                "co_yellowstone_128.jpg"),
            "twitter"=>array("#", "#", "#"),
            "fb"=>array("#", "#", "#"),
            "linkedin"=>array("#", "#", "#"),
            "ig"=>array("#", "#", "#"),),
        "Gallery"=>array("AZ_h756.jpg", 
                         "devilsTower_h756.jpg", 
                         "bryceCanyonNP_h756.jpg", 
                         "UT_h756.jpg", 
                         "cratersfthemoon_h756.jpg")
    );
        
    $CategoryTag = array(
        "Home"=>array("tag"=>"/index.php"),
        "Services"=>array("tag"=>"#services", "desc"=>"It's our pleasure to serve you.", "subCat"=>$sub_cat["Services"]),
        "Blog"=>array("tag"=>"#blog", "desc"=>"Do everything with all the heart.", "subCat"=>$sub_cat["Blog"]),
        "About"=>array("tag"=>"#about", "desc"=>"Old things are passed away; behold, all things are become new."),
        "Team"=>array("tag"=>"#team", "desc"=>"Together wE Achieve More."),
        "Contact"=>array("tag"=>"#contact", "desc"=>"How Can We Help? We'd like to hear from you!"));
?>



<?php
   // Include blog card templates
   $blogCard = $_SERVER['DOCUMENT_ROOT'];
   $blogCard .= "/resources/php/blog-card.php";
   include_once($blogCard);
?>
<?php
/* Services Category - 
   Supplies: $pet_products({$supplyItem_#})--> multidimentional associative arrays
        array_structure == (id,itemName,itemDesc,Price,imgRef,listType)
        *** listType: 
            1) bestSellers
            2) newArrivals
            3) pet_Supplies
            4) accessories
            5) gift_collection
   Behavior Control: $behaviorControl-->associative array
        array_structure == (id,header,header_desc,content_lead,content)
   Travel Support:$travelSupport-->associative array
        array_structure == (id,header,header_desc,content_lead,content)
*/ 
$pet_products=array(
    array("id"=>"0000001", "itemName"=>"Item1", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"20.00", "imgRef"=>"draft.jpg", "listType"=>"bestSellers*newArrivals"),
    array("id"=>"0000002", "itemName"=>"Item2", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"42.00", "imgRef"=>"draft1.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000003", "itemName"=>"Item3", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft2.jpg", "listType"=>"bestSellers*newArrivals"),
    array("id"=>"0000004", "itemName"=>"Item4", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft3.jpg", "listType"=>"bestSellers*accessories"),
    array("id"=>"0000005", "itemName"=>"Item5", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft4.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000006", "itemName"=>"Item6", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft5.jpg", "listType"=>"bestSellers*newArrivals"),
    array("id"=>"0000007", "itemName"=>"Item7", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft6.jpg", "listType"=>"petSupplies*accessories"),
    array("id"=>"0000008", "itemName"=>"Item8", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft7.jpg", "listType"=>"petSupplies"),
    array("id"=>"0000009", "itemName"=>"Item9", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft.jpg", "listType"=>"bestSellers*accessories"),
    array("id"=>"0000010", "itemName"=>"Item10", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft1.jpg", "listType"=>"accessories*giftCollection"),
    array("id"=>"0000011", "itemName"=>"Item11", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft2.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000012", "itemName"=>"Item12", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft3.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000013", "itemName"=>"Item13", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft4.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000014", "itemName"=>"Item14", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft5.jpg", "listType"=>"giftCollection"),
    array("id"=>"0000015", "itemName"=>"Item15", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft6.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000016", "itemName"=>"Item16", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft7.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000017", "itemName"=>"Item17", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000018", "itemName"=>"Item18", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft1.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000019", "itemName"=>"Item19", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft2.jpg", "listType"=>"bestSellers*accessories"),
    array("id"=>"0000020", "itemName"=>"Item20", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft3.jpg", "listType"=>"giftCollection"),
    array("id"=>"0000021", "itemName"=>"Item21", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft4.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000022", "itemName"=>"Item22", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft5.jpg", "listType"=>"giftCollection"),
    array("id"=>"0000023", "itemName"=>"Item23", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft6.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000024", "itemName"=>"Item24", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft7.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000025", "itemName"=>"Item25", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft.jpg", "listType"=>"giftCollection"),
    array("id"=>"0000026", "itemName"=>"Item26", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft1.jpg", "listType"=>"bestSellers*accessories"),
    array("id"=>"0000027", "itemName"=>"Item27", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft2.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000028", "itemName"=>"Item28", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft3.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000029", "itemName"=>"Item29", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft4.jpg", "listType"=>"bestSellers*accessories"),
    array("id"=>"0000030", "itemName"=>"Item30", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft5.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000031", "itemName"=>"Item31", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft6.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000032", "itemName"=>"Item32", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft7.jpg", "listType"=>"giftCollection"),
    array("id"=>"0000033", "itemName"=>"Item33", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft.jpg", "listType"=>"bestSellers"),
    array("id"=>"0000034", "itemName"=>"Item34", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft1.jpg", "listType"=>"giftCollection"),
    array("id"=>"0000035", "itemName"=>"Item35", "itemDesc"=>"Description</br> Lorem ipsum dolor loream", "Price"=>"30.00", "imgRef"=>"draft2.jpg", "listType"=>"bestSellers"),
    //last item indication
    array("id"=>"", "itemName"=>"", "itemDesc"=>"", "Price"=>"", "imgRef"=>"", "listType"=>"")
);
$pet_products=array_slice($pet_products, 0, -1);
list(
    $supplyItem_1,
    $supplyItem_2,
    $supplyItem_3,
    $supplyItem_4,
    $supplyItem_5,
    $supplyItem_6,
    $supplyItem_7,
    $supplyItem_8,
    $supplyItem_9,
    $supplyItem_10,
    $supplyItem_11,
    $supplyItem_12,
    $supplyItem_13,
    $supplyItem_14,
    $supplyItem_15,
    $supplyItem_16,
    $supplyItem_17,
    $supplyItem_18,
    $supplyItem_19,
    $supplyItem_20,
    $supplyItem_21,
    $supplyItem_22,
    $supplyItem_23,
    $supplyItem_24,
    $supplyItem_25,
    $supplyItem_26,
    $supplyItem_27,
    $supplyItem_28,
    $supplyItem_29,
    $supplyItem_30,
    $supplyItem_31,
    $supplyItem_32,
    $supplyItem_33,
    $supplyItem_34,
    $supplyItem_35
) = $pet_products;
//print_r(count($pet_products));
//print_r($supplyItem_35);
$behaviorControl=array(
    "id"=>"1000001",
    "header"=>"Behavior Consult",
    "header_desc"=>"Lorem ipsum dolor sit amet.",
    "content_lead"=>
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, vitae fugit accusamus nostrum eaque, quisquam commodi qui? Incidunt, neque, blanditiis!",
    "content"=>
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam eos soluta expedita, debitis neque fugit! Architecto officia suscipit ratione ipsam, aspernatur ipsa eaque deserunt. Fugit tenetur cum ut qui, numquam molestiae accusantium ipsum quo dignissimos cupiditate eum facere temporibus minus consequuntur vitae vel consectetur cumque incidunt, dolore sequi id veniam harum. Quasi ullam exercitationem inventore quibusdam aperiam soluta adipisci rerum obcaecati deserunt unde sint iusto recusandae cupiditate, quaerat ea quis accusantium aliquam beatae, veritatis perspiciatis. Adipisci, obcaecati debitis explicabo rem cupiditate, alias laboriosam natus a, id iusto fugiat fugit, deserunt quo porro quas vero! Facilis ratione dolorem sunt aliquam, minus, eveniet itaque culpa dolorum pariatur sint. Eaque veritatis dolores dolore nobis quo fuga similique eligendi. Voluptate laboriosam neque id possimus fugit animi odit ea, illum! Enim soluta at perferendis.
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam eos soluta expedita, debitis neque fugit! Architecto officia suscipit ratione ipsam, aspernatur ipsa eaque deserunt. Fugit tenetur cum ut qui, numquam molestiae accusantium ipsum quo dignissimos cupiditate eum facere temporibus minus consequuntur vitae vel consectetur cumque incidunt, dolore sequi id veniam harum. Quasi ullam exercitationem inventore quibusdam aperiam soluta adipisci rerum obcaecati deserunt unde sint iusto recusandae cupiditate, quaerat ea quis accusantium aliquam beatae, veritatis perspiciatis. Adipisci, obcaecati debitis explicabo rem cupiditate, alias laboriosam natus a, id iusto fugiat fugit, deserunt quo porro quas vero! Facilis ratione dolorem sunt aliquam, minus, eveniet itaque culpa dolorum pariatur sint. Eaque veritatis dolores dolore nobis quo fuga similique eligendi. Voluptate laboriosam neque id possimus fugit animi odit ea, illum! Enim soluta at perferendis."
);
$travelSupport=array(
    "id"=>"1000002",
    "header"=>"Travel Support",
    "header_desc"=>"Lorem ipsum dolor sit amet.",
    "content_lead"=>
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, vitae fugit accusamus nostrum eaque, quisquam commodi qui? Incidunt, neque, blanditiis!",
    "content"=>
        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam eos soluta expedita, debitis neque fugit! Architecto officia suscipit ratione ipsam, aspernatur ipsa eaque deserunt. Fugit tenetur cum ut qui, numquam molestiae accusantium ipsum quo dignissimos cupiditate eum facere temporibus minus consequuntur vitae vel consectetur cumque incidunt, dolore sequi id veniam harum. Quasi ullam exercitationem inventore quibusdam aperiam soluta adipisci rerum obcaecati deserunt unde sint iusto recusandae cupiditate, quaerat ea quis accusantium aliquam beatae, veritatis perspiciatis. Adipisci, obcaecati debitis explicabo rem cupiditate, alias laboriosam natus a, id iusto fugiat fugit, deserunt quo porro quas vero! Facilis ratione dolorem sunt aliquam, minus, eveniet itaque culpa dolorum pariatur sint. Eaque veritatis dolores dolore nobis quo fuga similique eligendi. Voluptate laboriosam neque id possimus fugit animi odit ea, illum! Enim soluta at perferendis.
        <br><br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aperiam eos soluta expedita, debitis neque fugit! Architecto officia suscipit ratione ipsam, aspernatur ipsa eaque deserunt. Fugit tenetur cum ut qui, numquam molestiae accusantium ipsum quo dignissimos cupiditate eum facere temporibus minus consequuntur vitae vel consectetur cumque incidunt, dolore sequi id veniam harum. Quasi ullam exercitationem inventore quibusdam aperiam soluta adipisci rerum obcaecati deserunt unde sint iusto recusandae cupiditate, quaerat ea quis accusantium aliquam beatae, veritatis perspiciatis. Adipisci, obcaecati debitis explicabo rem cupiditate, alias laboriosam natus a, id iusto fugiat fugit, deserunt quo porro quas vero! Facilis ratione dolorem sunt aliquam, minus, eveniet itaque culpa dolorum pariatur sint. Eaque veritatis dolores dolore nobis quo fuga similique eligendi. Voluptate laboriosam neque id possimus fugit animi odit ea, illum! Enim soluta at perferendis."
);
$services;
$services["Pet Products"]=$pet_products;
$services["Behavior Control"]=$behaviorControl;
$services["Travel Support"]=$travelSupport;
//print_r($services);
    
/* Blog Category - 
   [Categories]: Post
     blogCard_1($imgSrc, $imgAlt, $title, $content, $btnName, $btnLink)
     blogCard_2($header, $title, $content, $btnName, $btnLink, $postDate)
     blogCard_3($title, $content, $listGroup, $btnName, $btnLink, $secName, $secLink)
     blogCard_4($imgSrc, $imgAlt, $title, $content, $lastUpdateDateTime)
     blogCard_5($header, $badge_txt, $title, $content, $dueDate, $lastUpdateDate)
     blogCard_6($title, $content, $imgSrc, $imgAlt, $imgLink, $lastUpdateDate)
     blogCard_7($header, $title, $content, $listGroup, $postDate) 
     blogCard_default($title, $content) 
*/ 
$blog_Data1=array("id"=>"5000001", "cardType"=>"1",
          "header"=>"", 
          "badge"=>"",
          "title"=> "About", 
          "content"=>
                  "Hi! I'm Connie and welcome to my space. I have two besties, Mocha and Maple. We love to travel, snow shoe, and be couch potatos!", 
          "imgSrc"=>"home_h750.jpg", 
          "imgAlt"=>"Mocha&Maple",
          "imgLink"=>"",
          "btnName"=>"Know more about us",
          "btnLink"=>"#",
          "secName"=>"",
          "secLink"=>"#",
          "listGroup"=>array(
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>"")),
          "postDateTime"=>"",
          "lastUpdateDateTime"=>"",
          "dueDate"=>"");
$blog_Data2=array("id"=>"5000002", "cardType"=>"2",
          "header"=>"News", 
          "badge"=>"",
          "title"=> "Happy New Year", 
          "content"=>
                  "The Lunar New Year is around the corner! Next Tuesday on Feburary 1st, 2022 will be the Lunar New Year Day! 2022 will be the year of Tiger, so stay warm and have fun with families.", 
          "imgSrc"=>"", 
          "imgAlt"=>"",
          "imgLink"=>"",
          "btnName"=>"Checkout More",
          "btnLink"=>"#",
          "secName"=>"",
          "secLink"=>"#",
          "listGroup"=>array(
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>"")),
          "postDateTime"=>"Jan 27, 2022",
          "lastUpdateDateTime"=>"",
          "dueDate"=>"");
$blog_Data3=array("id"=>"5000003", "cardType"=>"3",
          "header"=>"", 
          "badge"=>"",
          "title"=> "Subscribe", 
          "content"=>
                  "Get <b>unlimited</b> times of service and <b>10% off</b> on all orders today! Also unlock our <b>speical bonus</b> each month!", 
          "imgSrc"=>"", 
          "imgAlt"=>"",
          "imgLink"=>"",
          "btnName"=>"Buy",
          "btnLink"=>"#",
          "secName"=>"Compare Plan",
          "secLink"=>"#",
          "listGroup"=>array(
            array("Name"=>"$9.99/Mo", "Link"=>""),
            array("Name"=>"109.99/Yr", "Link"=>""),
            array("Name"=>"$199.99/2Yrs", "Link"=>"")),
          "postDateTime"=>"",
          "lastUpdateDateTime"=>"3 mins",
          "dueDate"=>"");
$blog_Data4=array("id"=>"5000004", "cardType"=>"4",
          "header"=>"", 
          "badge"=>"",
          "title"=> "New!", 
          "content"=>
                  "Our new product is on-line now! Buy it today and get free-shipping! The number is limited so act quick and own it now!", 
          "imgSrc"=>"cattree_h756xw378.jpg", 
          "imgAlt"=>"Mocha on cat tree",
          "imgLink"=>"",
          "btnName"=>"",
          "btnLink"=>"",
          "secName"=>"",
          "secLink"=>"",
          "listGroup"=>array(
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>"")),
          "postDateTime"=>"",
          "lastUpdateDateTime"=>"3 mins",
          "dueDate"=>"");
$blog_Data5=array("id"=>"5000005", "cardType"=>"5",
          "header"=>"Announcement", 
          "badge"=>"New",
          "title"=> "New Web Design is Coming!", 
          "content"=>
                  "We will launch a new design soon in Feburary. Check back our website next month for the new look!", 
          "imgSrc"=>"", 
          "imgAlt"=>"",
          "imgLink"=>"",
          "btnName"=>"",
          "btnLink"=>"",
          "secName"=>"",
          "secLink"=>"",
          "listGroup"=>array(
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>"")),
          "postDateTime"=>"",
          "lastUpdateDateTime"=>"3 days",
          "dueDate"=>"14");
$blog_Data6=array("id"=>"5000006", "cardType"=>"1",
          "header"=>"", 
          "badge"=>"",
          "title"=> "Gallery", 
          "content"=>
                  "Check out the Gallery of Mocha and Maple. We've been traveling a lot and got many awesome photographies for everyone!", 
          "imgSrc"=>"car_h1080.jpg", 
          "imgAlt"=>"Mocha&Maple on roadtrip",
          "imgLink"=>"",
          "btnName"=>"Gallery",
          "btnLink"=>"#",
          "secName"=>"",
          "secLink"=>"#",
          "listGroup"=>array(
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>"")),
          "postDateTime"=>"",
          "lastUpdateDateTime"=>"",
          "dueDate"=>"");
$blog_Data7=array("id"=>"5000007", "cardType"=>"6",
          "header"=>"", 
          "badge"=>"",
          "title"=>"2022 Canlender", 
          "content"=>
                  "Our 2022 Desk Calendar is now available! Based on our roadtrip in August 2021, we have tons of amazing images with our two puuur-fect models. Limited quantity is available so buy it now!", 
          "imgSrc"=>"2022calendar.png", 
          "imgAlt"=>"Mocha&Maple 2022",
          "imgLink"=>"#",
          "btnName"=>"",
          "btnLink"=>"",
          "secName"=>"",
          "secLink"=>"",
          "listGroup"=>array(
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>""),
            array("Name"=>"", "Link"=>"")),
          "postDateTime"=>"",
          "lastUpdateDateTime"=>"7 days",
          "dueDate"=>"");
$blog_Data8=array("id"=>"5000008", "cardType"=>"7",
          "header"=>"Blog", 
          "badge"=>"",
          "title"=> "Pet Diet", 
          "content"=>
                  "Is dry food really good for your pet's health? Do you know what is the dry food you buy made of? When was the first pet dry food and canned food invented? Check out the links below to find out the reality in pet food industry!", 
          "imgSrc"=>"", 
          "imgAlt"=>"",
          "imgLink"=>"",
          "btnName"=>"",
          "btnLink"=>"",
          "secName"=>"",
          "secLink"=>"",
          "listGroup"=>array(
              array("Name"=>"Pet Foo<small>le</small>d",
                    "Link"=>"https://youtu.be/2eVoicSHimI"), 
              array("Name"=>"Pet Food Industry Controversies",
                    "Link"=>"https://topdogtips.com/pet-food-controversies/"),
              array("Name"=>"Brands with Most Recalls", 
                    "Link"=>"https://topdogtips.com/most-dog-food-recalls/")),
          "postDateTime"=>"Jan 18, 2022",
          "lastUpdateDateTime"=>"",
          "dueDate"=>"");

$blog_Data = array($blog_Data1, 
                   $blog_Data2, 
                   $blog_Data3, 
                   $blog_Data4, 
                   $blog_Data5, 
                   $blog_Data6, 
                   $blog_Data7,
                   $blog_Data8);
    
/* Services Category - 
   Supplies: $pet_products({$supplyItem_#})--> multidimentional associative arrays
   Behavior Control: $behaviorControl-->associative array
   Travel Support:$travelSupport-->associative array
*/ 


/* All categories in 1 database
*/
$ConnieWebDatabase;
$ConnieWebDatabase["Services"]=$services;
$ConnieWebDatabase["Blog"]=$blog_Data;
//$ConnieWebDatabase["About"]=$blog_Data;
//$ConnieWebDatabase["Team"]=$blog_Data;
//$ConnieWebDatabase["Contact"]=$blog_Data;
//print_r(array_keys($ConnieWebDatabase));
?>