<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
            <section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>
            <?php 
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/resources/php/contact-form-review.php";
                include_once($path);
            ?>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>