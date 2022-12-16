<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
            <section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>
            <section class="p-5" id="contact">
                <div class="container">
                    <div class="text-center">
                        <h2 class="text-uppercase">Contact Us</h2>
                        <h5 class="text-md-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
                    </div>
                    <div class="text-start mt-4">
                         <p class="mb-2">
                             <?php 
                                    $thename = $_GET['name'];
                                    $theemail = $_GET['email'];
                                    $thephone = $_GET['phone']; 
                                    date_default_timezone_set("America/New_York");
                                    $now=strtotime("Now");
                                    if (date("H", $now) >= 5 and date("H", $now) < 12){
                                        echo "Good Morning " . $thename . ", <br />";
                                    } elseif (date("H", $now) >= 12 and date("H", $now) < 18) {
                                        echo "Good Afternoon " . $thename . ", <br />";
                                    } elseif (date("H", $now) >= 18 and date("H", $now) < 24) {
                                        echo "Good Evening " . $thename . ", <br />";
                                    } else {
                                        echo "Hi" . $thename . ", <br />";
                                    }
                                ?>
                             We have received your message on <b><?php echo date("l n/j/Y g:i:sa-T", $now)?></b>. You should be receiving a response from us within in 3 business days. If you do not hear back from us by
                             <b>
                                 <?php 
                                    if (date("N", $now == 1)){
                                        if (date("H", $now) < 16){
                                            $deadline = date("l n/j/Y", strtotime(date("Y-m-d", $now) . " +3 days"));
                                        } else {
                                            $deadline = date("l n/j/Y", strtotime(date("Y-m-d", $now) . " +4 days"));
                                        }
                                        
                                    } elseif (date("N", $now == 2)) {
                                        if (date("H", $now) < 16){
                                            $deadline = date("l n/j/Y", strtotime(date("Y-m-d", $now) . " +3 days"));
                                        } else {
                                            $deadline = date("l n/j/Y", strtotime(date("Y-m-d", $now) . " +6 days"));
                                        }
                                    } else {
                                        if (date("H", $now) < 16){
                                            $deadline = date("l n/j/Y", strtotime(date("Y-m-d", $now) . " +5 days"));
                                        } else {
                                            $deadline = date("l n/j/Y", strtotime(date("Y-m-d", $now) . " +6 days"));
                                        }
                                    }
                                    echo $deadline . ",";
                                 ?>
                             </b> please call us with your phone number <i><?php echo $thephone ?></i> or email us using <u><?php echo $theemail ?></u> for further information. We apprecirate your patience.<br><br>
                             Sincerely,<br>
                             Connie, Mocha, &amp; Maple<br>
                         </p>
                        <p class="text-center">
                            
                            <a href="/index.php">
                                <button type="button" class="btn btn-danger btn-lg mt-3">Back to Home Page</button>
                            </a>
                        </p>
                    </div>
                </div>
                
            </section>
            
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>