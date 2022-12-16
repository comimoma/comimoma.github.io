<?php
    //Social Media Footer ref
    $social_media=array(
        array("#", "bi-twitter"),
        array("#", "bi-facebook"),
        array("#", "bi-linkedin"),
        array("#", "bi-instagram"),
        array("#", "bi-github"),
    );
?>
<?php
    //Site Map
    $SiteMap=array(
        array(
            "shop",
            array("#", "New Arrivals"),
            array("#", "Pet Supplies"),
            array("#", "Accessories"),
            array("#", "Gift Collection"),
            array("#", "Service Rates"),
            array("#", "Shipping Rates"),), 
        array(
            "blog",
            array("#", "Recent Post"),
            array("#", "Travel"),
            array("#", "Training"),
            array("#", "Recipes"),
            array("#", "Lifestyle"),
            array("#", "All Posts"),),  
        array(
            "gallery",
            array("#", "Road Trip"),
            array("#", "Holidays"),
            array("#", "Spring/Summer"),
            array("#", "Fall/Winter"),
            array("#", "All Photos"),), 
        array(
            "explore",
            array("#", "About"),
            array("#", "The Team"),
            array("#", "FAQs"),
            array("#", "Support Us"),
            array("#", "Newsletters"),
            array("#", "Contact"),), 
    );
?>       
            </main>
    <!--Offcanvas-->
<!--
    <div class="offcanvas offcanvas-start p-3 text-white" tabindex="-1" id="login-canvas" aria-labelledby="login-canvasLabel" style="background-color: #f1aeb5">
        <div class="offcanvas-header ">
            <div class="w-100 d-block">
                <a href="#" class="fw-bolder fs-5 text-decoration-none text-white">
                    <img src="/resources/img/COMOMA LOGO New rev2_180x100.png" style="height:75px;" class="px-2">Connie's Website
                </a>
            </div>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body mt-0 pt-0">
            <div class="p-0 m-0 text-center fw-bold fs-5">
                Login
            </div>
            <div class="mb-4">
                <label for="username">Username:</label>
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="username" placeholder="">
                </div>
                <label for="password">Password:</label>
                <div class="input-group mb-1">
                    <input type="text" class="form-control" id="password" placeholder="">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="">
                    <label class="form-check-label" for="">
                        Remember Me
                    </label>
                </div>
                <div class="text-center d-grid gap-2 col-6 mx-auto">
                    <button type="button" class="btn btn-danger btn-sm">Sign in</button>
                </div>
                <div class="text-center mb-2">
                    <a href="#" class="px-2"><small>forget password? </small></a>
                </div>
                <div class="text-center">
                    <p class="mb-1">or Sign in Using </p>
                    <a href="#"><i class="bi bi-google text-white mx-2 fs-5"></i></a>
                    <a href="#"><i class="bi bi-apple text-white mx-2 fs-5"></i></a>
                    <a href="#"><i class="bi bi-facebook text-white mx-2 fs-5"></i></a>
                    <a href="#"><i class="bi bi-twitter text-white mx-2 fs-5"></i></a>
                    <p class="mt-2 mb-0">Don't have an account? <a href="#"><small>Sign Up Now</small></a></p>
                    <div class="text-center mt-1">
                        <p class="d-inline m-0 p-0">or</p>
                        <button type="button" class="btn btn-danger btn-sm">Continue as Guest</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis sint, laboriosam odit in nulla ducimus, deleniti maiores voluptates. Alias eos ex, eius cupiditate ab distinctio nemo minima, sequi esse aspernatur.</p>
            </div>
        </div>
    </div>
-->
        <!--Footer-->
        <footer class="d-block">
<!--
            <section class="bg-darkred text-light p-3 position-relative text-center">
                <div class="container">
                    <div class="mb-3">
                        <a href="#page-top" class="p-5 tagRemove">
                            <i class="bi bi-arrow-up-circle h1 text-white"></i>
                        </a>
                    </div>
                    <div class="d-flex justify-content-evenly align-items-start">
                        <div class="p-1">
                            <div class="d-flex flex-column p-1 me-5">
                               <?php
                                    for ($s=0;$s<count($social_media);$s++){
                                ?>
                                <a href="<?php echo $social_media[$s][0];?>"><i class="bi <?php echo $social_media[$s][1];?> text-white d-block py-2"></i></a>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="p-1 flex-grow-1 ms-5">
                            <div class="row row-cols-2 row-cols-md-4 mb-3">
                               <?php
                                    for ($n=0;$n<count($SiteMap);$n++){
                                ?>
                                <div class="col mb-5">
                                    <h5 class="fw-bold text-uppercase"><?php echo $SiteMap[$n][0] ;?></h5>
                                    <div class="flex-column">
                                       <?php
                                            for ($n_n=1;$n_n<count($SiteMap[$n]);$n_n++) {
                                        ?>
                                        <div>
                                            <a href="#" class="text-decoration-none text-white"><small><?php echo $SiteMap[$n][$n_n][1] ;?></small></a>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </div>
                                
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <p class="text-md-white pt-3 mb-0 ">Copyright &copy; 2021-<?php echo date("Y");?> by Connie's Website. All Rights Reserved.</p>
                    <div class="">
                        <a class="link-light text-decoration-none me-3 text-md-white" href="#!">
                            <small>Privacy Policy</small></a>
                        <a class="link-light text-decoration-none text-md-white" href="#!"><small>Term of Use</small></a>
                    </div>
                </div>
            </section>
-->
        </footer>
    </div>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Customized JavaScript-->
    <script>
        // jQuery - remove anchor tag # from URL
        $(document).ready(function() {
            const the_anchor = $('.tagRemove');
            the_anchor.click(() => {
                setTimeout(() => {
                    clearURLtag();
                }, 1); // 1 ms timeout
            });
        });
        function clearURLtag() {
            history.replaceState('', document.title, window.location.origin + window.location.pathname + window.location.search);
        };
        // Auto Popup - Greeting Modal
        $(document).ready(function() {
            $curURL = window.location.href;
//            console.log($curURL);
            if ($curURL.includes("index") == false) {
                setTimeout(() => {
                    $("#greetingModal").modal('show');
                }, 1000); // 1 seconds timeout
            }
        });
    </script>
</body>
</html>