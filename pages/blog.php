<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<?php
   // include page data
   $data = $_SERVER['DOCUMENT_ROOT'];
   $data .= "/database.php";
   include_once($data);
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
                      <?php
                        $total_num_cards = count($blog_Data);
                        $set_max_load_num_cards = 20;
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
                </div>
            </section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>