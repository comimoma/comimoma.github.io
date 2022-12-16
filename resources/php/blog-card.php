<?php
/** blog card types 
     blogCard_1($imgSrc, $imgAlt, $title, $content, $btnName, $btnLink)
     blogCard_2($header, $title, $content, $btnName, $btnLink, $postDate)
     blogCard_3($title, $content, $listGroup, $btnName, $btnLink, $secName, $secLink)
     blogCard_4($imgSrc, $imgAlt, $title, $content, $postDateTime)
     blogCard_5($header, $badge_txt, $title, $content, $dueDate, $lastUpdateDate)
     blogCard_6($title, $content, $imgSrc, $imgAlt, $imgLink, $lastUpdateDate)
     blogCard_7($header, $title, $content, $listGroup, $postDate) 
*/
    function blogCard_1($imgSrc, $imgAlt, $title, $content, $btnName, $btnLink) {
        $imgPath = "/resources/img/" . $imgSrc;
?>
        <div class="card">
            <img src="<?php echo $imgPath;?>" class="card-img-top w-100" alt="<?php echo $imgAlt;?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title;?></h5>
                <p class="card-text">
                    <?php echo $content;?>
                </p>
                <a href="<?php echo $btnLink;?>" class="btn btn-danger"><?php echo $btnName;?></a>
            </div>
        </div>
<?php
    }

    function blogCard_2($header, $title, $content, $btnName, $btnLink, $postDate) {
?>
        <div class="card">
            <div class="card-header">
                <?php echo $header;?>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?php echo $title;?></h5>
                <p class="card-text">
                    <?php echo $content;?>
                </p>
                <a href="<?php echo $btnLink;?>" class="btn btn-danger"><?php echo $btnName;?></a>
            </div>
            <div class="card-footer text-muted">
                <?php echo $postDate;?><small> Today</small>
            </div>
        </div>
<?php
    }

    
    function blogCard_3($title, $content, $listGroup, $btnName, $btnLink, $secName, $secLink) {
?>
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"><?php echo $title;?></h5>
                  <p class="card-text">
                      <?php echo $content;?>
                  </p>
              </div>
              <ul class="list-group list-group-flush">
                 <?php
                    foreach($listGroup as $listItem){
                 ?> 
                        <li class="list-group-item">
                            <?php echo $listItem["Name"];?>
                        </li>
                 <?php
                    }
                 ?>
              </ul>
              <div class="card-body">
                  <a href="<?php echo $btnLink;?>" class="btn btn-danger"><?php echo $btnName;?></a>
                  <a href="<?php echo $secLink;?>" class="card-link px-3"><?php echo $secName;?></a>
              </div>
          </div>
<?php 
    }

    function blogCard_4($imgSrc, $imgAlt, $title, $content, $lastUpdateDateTime) {
        $imgPath = "/resources/img/" . $imgSrc;
?>
        <div class="card">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="<?php echo $imgPath;?>" class="card-img-top" id="" alt="<?php echo $imgAlt;?>" style="max-height: 300px; max-width: 200px">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $title;?></h5>
                        <p class="card-text">
                            <?php echo $content;?>
                        </p>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <small class="text-muted">Last updated 
                        <?php echo $lastUpdateDateTime;?> ago</small>
                </div>
            </div>
        </div>
<?php
    }

    function blogCard_5($header, $badge_txt, $title, $content, $dueDate, $lastUpdateDate) {
?>
           <div class="card">
               <div class="card-header">
                   <?php echo $header;?>
               </div>
               <div class="card-body">
                   <h5 class="card-title"><span class="badge bg-success"><?php echo $badge_txt;?></span> 
                   <?php echo $title;?> </h5>
                   <p class="card-text">
                       <?php echo $content;?>
                   </p>
                   <div class="progress">
                       <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100" style="width: 53%"></div>
                       <p>&nbsp&nbsp <?php echo $dueDate;?> days left...</p>
                   </div>
               </div>
               <div class="card-footer text-muted">
                   <small class="text-muted">Last updated 
                   <?php echo $lastUpdateDate;?> ago</small>
               </div>
           </div>
<?php
    }

    function blogCard_6($title, $content, $imgSrc, $imgAlt, $imgLink, $lastUpdateDate) {
        $imgPath = "/resources/img/" . $imgSrc;
?>
           <div class="card">
               <div class="card-body">
                   <h5 class="card-title"><?php echo $title;?></h5>
                   <p class="card-text">
                       <?php echo $content;?>
                   </p>
               </div>
               <a href="<?php echo $imgLink;?>">
                   <img src="<?php echo $imgPath;?>" class="card-img-top w-100" alt="<?php echo $imgAlt;?>">
               </a>
               <div class="card-footer text-muted">
                   <small class="text-muted">Last updated 
                   <?php echo $lastUpdateDate;?> ago</small>
               </div>
           </div>
<?php
    }

    function blogCard_7($header, $title, $content, $listGroup, $postDate) {
?>
           <div class="card">
               <div class="card-header">
                   <?php echo $header;?>
               </div>
               <div class="card-body">
                   <h5 class="card-title"><?php echo $title;?></h5>
                   <p class="card-text">
                       <?php echo $content;?>
                   </p>
               </div>
               <ul class="list-group list-group-flush">
                  <?php
                    foreach($listGroup as $listItem){
                 ?> 
                        <li class="list-group-item">
                            <a href="<?php echo $listItem["Link"];?>" target="_blank" class="card-link">
                                <?php echo $listItem["Name"];?>
                            </a>
                        </li>
                 <?php
                    }
                 ?>
               </ul>
               <div class="card-footer text-muted">
                   <?php echo $postDate;?><small> Tuesday</small>
               </div>
           </div>
           
<?php
    }

    function blogCard_default($title, $content) {
?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $title;?></h5>
                <p class="card-text">
                    <?php echo $content;?>
                </p>
            </div>
        </div>
<?php        
    }
?>