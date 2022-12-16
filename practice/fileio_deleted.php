<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<?php include 'fileio.php';?>
<section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>


<section class="p-5" id="">
    <div class="h1 text-center">
        <h2 class="text-uppercase">File IS Deleted</h2>
        <h5 class="text-md-black mb-4">The file dup_userpassword.json has been deleted</h5>
    </div>
    <div class="container mb-5">
        <p class="lead">
           Check your server folder to verify if the file (dup_userpassword.json) has been successfully deleted. 
        </p>
    </div>
    <?php 
        deleteTheJSONFile("dup_userpassword.json");
    ?>

    
    <div class="container mb-5">
        <p class="lead">Delete the JSON file -> dup_userpassword.json </p>
        <p> Click the button if you want to go back to the previous page the JSON file... <br>
        **** NOTE: going back to the previous page will create "dup_userpassword.json" file again! ****
        </p>
        <a href="fileio_demo.php" class="btn btn-danger">Go Back</a>
    </div>

</section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>
