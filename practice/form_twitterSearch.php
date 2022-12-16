<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<!--   <section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>-->
   <section class="p-5" id="">
       <div class="container-sm w-50 mt-5 pt-5">
           <h2 class="mb-3">Search on Twitter:</h2>
           <form action="https://twitter.com/search" method="get">
               <div class="row mb-3">
                   <label for="inputKeyword" class="col-sm-12 col-form-label">Search What? </label>
                   <div class="col-sm-12">
                       <input type="text" class="form-control" id="inputKeyword" name="q">
                   </div>
               </div>
               <div class="row mb-3">
                   <label for="ControlSearchType" class="col-sm-12 form-label">Search Type:</label>
                   <div class="col-12">
                       <select class="form-select" id="ControlSearchType" aria-label="Default select" name="f">
                           <option selected value="">Just Search</option>
                           <option value="live">Search Latest</option>
                           <option value="user">Search People</option>
                           <option value="image">Search Images</option>
                           <option value="video">Search Videos</option>
                       </select>
                   </div>
               </div>
               <div class="text-end">
                   <button type="submit" class="btn btn-danger">Search</button>
               </div>
           </form>
       </div>
   </section>
<!--
     THIS MUST BE THE LAST LINE IN THE FILE 
    <script src="resources/bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
-->
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>
