<section class="p-5" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="text-uppercase"><?php echo array_keys($CategoryTag)[5]; ?> Us</h2>
            <h5 class="text-md-black"><?php $catkeys = array_keys($CategoryTag)[5]; echo $CategoryTag[$catkeys]["desc"]; ?></h5>
        </div>
        <form action="/pages/contact-review.php" method="get">
            <div class="row d-flex justify-content-center mt-5">
                <div class="col-lg-6 col-md-12 contact-max-width">
                    <div class="">
                        <label for="name">Your Name:</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        </div>
                        <label for="email">Your Email:</label>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <label for="phone">Your Phone (Optional):</label>
                        <div class="input-group mb-3">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="1234567890">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 contact-max-width">
                    <div class="">
                        <label for="message">Message:</label>
                        <div class="input-group">
                            <textarea class="form-control" rows="7" id="message" name="message" placeholder="Leave your message here."></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-danger btn-lg">Send Message</button>
            </div>
        </form>
    </div>
</section>