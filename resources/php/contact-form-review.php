<?php
if (!$_GET)
?>
   <section class="p-5" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase">Contact Us</h2>
            <h5 class="text-md-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5>
        </div>
        <p class="mb-3 text-center"><b>Please confirm your contact information and the message you'd like to send to us.</b></p>
        <p class="mb-3 text-center">
            <?php
            $thename = $_GET['name'];
            $theemail = $_GET['email'];
            $thephone = $_GET['phone'];
            $message = $_GET['message'];            
            echo "Your Name: " . $thename . " <br />";
            echo "Your Email Address: " . $theemail . "<br />";
            echo "Your Phone Number: " . $thephone ."<br />";
            echo "Message: " . $message . "<br />";

        ?>
        <a href="/pages/contact-submit.php?name=<?php echo $thename ?>&email=<?php echo $theemail ?>&phone=<?php echo $thephone ?>">
            <button type="button" class="btn btn-danger btn-lg mt-3">Confirm &amp; Send</button>
        </a>
        </p>
    </div>
</section>