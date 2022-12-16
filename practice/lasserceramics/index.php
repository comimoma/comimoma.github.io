<?php include 'resources/templates/header.php';?>


<!-- =======================================
    CAROUSEL
    ======================================== -->
<style>
    .carousel-item {
        text-shadow: black 0.05em 0.1em 0.2em;
    }
</style>
<div id="carouselExampleFade" class="carousel slide carousel-fade container-xxl" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/lasserceramics/resources/images/home_page_banners/building.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">First slide label</h3>
                <p class="lead">Some representative placeholder content for the second slide.</p>
                <button class="btn btn-primary border border-2">Click Here</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/lasserceramics/resources/images/home_page_banners/showroom.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">Second slide label</h3>
                <p class="lead">Some representative placeholder content for the second slide.</p>
                <button class="btn btn-primary border border-2">Click Here</button>
            </div>
        </div>
        <div class="carousel-item">
            <img src="/lasserceramics/resources/images/home_page_banners/goblets.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h3 class="text-uppercase">Third slide label</h3>
                <p class="lead">Some representative placeholder content for the second slide.</p>
                <button class="btn btn-primary border border-2">Click Here</button>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!-- ===============================================
Product Columns
================================================ -->
<div class="container-xxl mt-2">
    <div class="text-center row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col mt-2">
            <div class="card">
                <img src="resources/images/products/dinnerware/mugs/mugs1.jpg" />

                <div class="card-body">
                    <h5 class="card-title">Mugs</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="subcategory.php?category=mugs" class="btn btn-primary">Mugs</a>
                </div>
            </div>

        </div>
        <div class="col mt-2">
            <div class="card">
                <img src="resources/images/products/dinnerware/dinner-plates/Attachment-1%20(1).JPEG" />
                <div class="card-body">
                    <h5 class="card-title">Dinner Plates</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="subcategory.php?category=dinnerplates" class="btn btn-primary">Dinner Plates</a>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card">
                <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text>
                </svg>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <div class="card">
                <svg class="bd-placeholder-img bd-placeholder-img-lg img-fluid" width="100%" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Responsive image" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96" /><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Responsive image</text>
                </svg>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>



    <!-- ===============================================
    Product Feature
    ================================================ -->
    <style>
        .card-img-overlay {
            text-shadow: black 0.05em 0.1em 0.2em;
        }

    </style>
    <div class="card border-0 bg-dark text-white mt-3">
        <img src="/lasserceramics/resources/images/home_page_banners/plates.jpg" class="card-img" alt="...">
        <div class="card-img-overlay d-flex justify-content-center">
            <div class="my-auto text-center px-5">
                <h1 class="card-title fw-bold">CERAMICS AS COLORFUL AS YOUR LIFE</h1>
                <p class="card-text lead d-none d-md-block">
                    Whether you are entertaining friends, or enjoying a family gathering, a beautiful and impressive presentation makes all the difference. Lasser serveware makes an impression indeed!
                </p>
                <button class="border border-1 btn btn-secondary">Shop Now</button>
            </div>
        </div>
    </div>



    <!-- ===============================================
PLATES
================================================ -->
    <div class="row row-cols-3 row-cols-lg-4 row-cols-xl-6">
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/bluemoon.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/mango.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/mardigras.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/ocean.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/sanddollar.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/spanish.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/spanishnight.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/teal.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/bluemoon.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/bluemoon.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/bluemoon.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-0 text-center mt-3">
                <img src="/lasserceramics/resources/images/products/dinnerware/dinner-plates/bluemoon.jpg" class="card-img-top" alt="...">
                <div class="card-body d-none d-md-block">
                    <a href="#" class="">Blue Moon</a>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'resources/templates/footer.php';?>
