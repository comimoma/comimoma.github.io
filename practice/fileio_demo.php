<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<?php include 'fileio.php';?>
<section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>


<section class="p-5" id="">
    <div class="h1 text-center">
        <h2 class="text-uppercase">File IO Demo</h2>
        <h5 class="text-md-black mb-4">This page demonstrate the file IO using PHP</h5>
    </div>
    <div class="container mb-5">
        <p class="lead">CRUD JSON files <br>
            Create, read, update and delete JSON files using PHP language.
        </p>
        <p>
            A simple JSON file (userpassword.json) has created for the demo. It stores a few users' account credentials. The format in JSON is : <br>
            "user_authorization": {"user_ID": {... (user info)}}
        </p>
    </div>
    <div class="container mb-5">
        <p class="lead">Create the JSON file -> dup_userpassword.json <br> Write the following to the file</p>
        <p>
            <?php 
                $normalUsers = array(
                    "John" => array(
                        "username"=>"john12345",
                        "password"=>"johnpass",
                        "question"=>"What is my first car?",
                        "answer"=>"Not having a car yet"
                    ),
                    "Leah" => array(
                        "username"=>"leahDoe",
                        "password"=>"mypassword",
                        "question"=>"What is my dog's name?",
                        "answer"=>"Mavis"
                    ),
                    "Miles" => array(
                        "username"=>"milesthebest",
                        "password"=>"hackmeifyoucan",
                        "question"=>"Where did I go for highschool?",
                        "answer"=>"Burlington high"
                    )
                );
                $adminUsers = array(
                    "connie" => array(
                        "username"=>"connie",
                        "password"=>"adminpassword$1",
                        "question"=>"Who am I?",
                        "answer"=>"spiderwoman"
                    ),
                    "maple" => array(
                        "username"=>"msmaple",
                        "password"=>"adminpassword$2",
                        "question"=>"Where am I from?",
                        "answer"=>"SC"
                    ),
                    "mocha" => array(
                        "username"=>"mrmocha",
                        "password"=>"adminpassword$3",
                        "question"=>"What is my favorite food?",
                        "answer"=>"chicken breast"
                    )
                );
                $content_to_write = array(
                    "normal_users"=>$normalUsers,
                    "admin_users"=>$adminUsers
                );
            
                foreach($content_to_write as $keys => $values) {
                    foreach($values as $IDs => $info) {
                        echo $IDs . ": <br>";
                        foreach($info as $subkey => $value) {
                            echo "&nbsp;&nbsp;" . $subkey . " == " . $value . "<br>";
                        }
                    }
                }
            
                createTheJSONFile("dup_userpassword.json", $content_to_write);
            ?>
        </p>
    </div>
    <div class="container mb-5">
        <p class="lead">Read the JSON file -> userpassword.json </p>
        <p> The following information is read... <br>
            <?php 
                readTheJSONFile("userpassword.json");
            ?>
        </p>
    </div>
    <div class="container mb-5">
        <p class="lead">Read the JSON file -> dup_userpassword.json </p>
        <p> The following information is read... <br>
            <?php 
                readTheJSONFile("dup_userpassword.json");
            ?>
        </p>
    </div>
    
    <div class="container mb-5">
        <p class="lead">Delete the JSON file -> dup_userpassword.json </p>
        <p> Click the button if you want to delete the JSON file... <br>
        </p>
        <a href="fileio_deleted.php" class="btn btn-danger">Delete The File</a>
    </div>

</section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>
