<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/header-nav.php";
   include_once($path);
?>
<?php
    //Indexed Array Practice
    $index_array=array("Hello", "World", "It's", "Connie", "!");
?>
<?php
    //Associative Array Practice
    $item = array(
        "Name"=>"Maple",
        "lastName"=>"Ou",
        "Title"=>"Chief Crazy Officer",
        "DOB"=>"February 01",
        "Age"=>"2",
        );
?>
<?php
    // Timeline info
    $Timeline = array(
        array("Sunday", "Funday"),
        array("Monday", "Blue Day"),
        array("Tuesday", "Second Monday"),
        array("Wednesday", "Hump day"),
        array("Thursday", "Friday Eve"),
        array("Friday", "Pawty Day!"),
        array("Saturday", "Weekend"),
        );
?>
<?php
    // Dictionary info
    $FamilyInfo = array(
        "Connie"=>array("lastName"=>"Ou","DOB"=>"September","Relation"=>"self"),
        "Spencer"=>array("lastName"=>"Ou","DOB"=>"August","Relation"=>"brother"),
        "Lilian"=>array("lastName"=>"Wang","DOB"=>"October","Relation"=>"mother"),
        "Roger"=>array("lastName"=>"Ou","DOB"=>"February","Relation"=>"father"),
        "Happy"=>array("lastName"=>"Ou","DOB"=>"November","Relation"=>"dog"),
        "Lucky"=>array("lastName"=>"Ou","DOB"=>"November","Relation"=>"dog"),
        "Maple"=>array("lastName"=>"Ou","DOB"=>"February","Relation"=>"dog"),
        "Mocha"=>array("lastName"=>"Ou","DOB"=>"September","Relation"=>"cat"),
        "Midnight"=>array("lastName"=>"Ou","DOB"=>"May","Relation"=>"missing cat")
        );
?>
<section class="p-0 m-0" style="min-height: 90px" id="page-top"></section>
<section class="p-5" id="">
    <div class="h1 text-center">
        <h2 class="text-uppercase">Looping</h2>
    </div>
    <hr>
    <div class="container">
        <h5 class="text-black mb-4 text-center">Indexed Arrays</h5>
        <p class="lead fs-6 text-center">Great for making a quick list to loop through</p>
        <p class="fs-6"><b>PHP</b><br>
            <span class="text-md-black">// create the array </span><br>
            $index_array=array("Hello", "World", "It's", "Connie", "!");<br><br>
            <span class="text-md-black">// output one item at a time </span><br>
            echo "Single Item: " . $index_array[1]; <br>
            echo "Single Item: ".$index_array[1]." and ".$index_array[2];<br><br>
            <span class="text-md-black">// loop through the items</span><br>
            foreach($names as $name) { // loop<br>
              &nbsp&nbsp&nbsp  echo $name . "&lt;br /&gt;";<br>
            }<br><br>
        </p>
        <p class="fs-6"><b>OUTPUT</b><br>
           <?php
                echo "<b>Single Item: </b>" . $index_array[1] ."</br>";
                echo "<b>Single Item: </b>" . $index_array[1]. " and " . $index_array[2]."</br> </br>";
            
                echo "<b>Loop: </b> </br>";
                foreach($index_array as $word) { // loop<br>
                    echo $word . "</br>";
                }
                echo "</br>";
                
                echo "<b>print_r" . "($" . "index_array): </b></br>";
                print_r($index_array);
            ?>
        </p> 
    </div>
    <hr>
    <div class="container">
        <h5 class="text-black mb-4 text-center">Associative Arrays</h5>
        <p class="lead fs-6 text-center">Great for making a quick "key=>value pair to loop through when you want to refer to the value by name "firstname" and not index (1)</p>
        <p class="fs-6"><b>PHP</b><br>
            <span class="text-md-black">// create the array </span><br>
            $item = array(<br>
                &nbsp&nbsp&nbsp"Name"=>"Maple", <br>
                &nbsp&nbsp&nbsp"lastName"=>"Ou", <br>
                &nbsp&nbsp&nbsp"Title"=>"Chief Crazy Officer", <br>
                &nbsp&nbsp&nbsp"DOB"=>"February 01", <br>
                &nbsp&nbsp&nbsp"Age"=>"2"<br>
            );<br><br>
            <span class="text-md-black">// output one item at a time </span><br>
            echo "Single Item: " . $item["Name"]; <br>
            echo "Single Item: ".$item["Name"]." ".$item["lastName"];<br>
            // or $item[0] still works too<br><br>
            <span class="text-md-black">// loop through the items</span><br>
            foreach($item as $key=>$value) { // loop<br>
              &nbsp&nbsp&nbsp  echo $key . ":" . $value . "&lt;br /&gt;";<br>
            }<br><br>
        </p>
        <p class="fs-6"><b>OUTPUT</b><br>
           <?php
                echo "<b>Single Item: </b>" . $item["Name"] . "</br>";
                echo "<b>Single Item: </b>" . $item["Name"]. " " . $item["lastName"] . "</br></br>";
                
                echo "<b>Loop: </b> </br>";
                foreach($item as $key=>$value) { // loop<br>
                    echo $key . ":" . $value . "</br>";
                }
                echo "</br>";
                
                echo "<b>print_r" . "($" . "item): </b></br>";
                print_r($item);
            ?>
        </p> 
    </div>
    <hr>
    <div class="container">
        <h5 class="text-black mb-4 text-center">MultiDimensional  Arrays</h5>
        <p class="lead fs-6 text-center">Great for creating a key with many values. In this case, the superhero is the key and values include first name, last name, powers? etc</p>
        <p class="fs-6"><b>PHP</b><br>
            <span class="text-md-black">// create the array </span><br>
            $Timeline = array(<br>
                &nbsp&nbsp&nbsp array("Sunday", "Funday"),<br>
                &nbsp&nbsp&nbsp array("Monday", "Blue"),<br>
                &nbsp&nbsp&nbsp array("Tuesday", "Second Monday"),<br>
                &nbsp&nbsp&nbsp array("Wednesday", "Hump day"),<br>
                &nbsp&nbsp&nbsp array("Thursday", "Friday Eve"),<br>
                &nbsp&nbsp&nbsp array("Friday", "Pawty!"),<br>
                &nbsp&nbsp&nbsp array("Saturday", "Weekend"),<br>
            );<br><br>
            <span class="text-md-black">// output one item at a time </span><br>   
            echo "Single Item: ".$Timeline[0][0]; <br>
            echo "Single Item: ".$Timeline[1][0]. " is really " . $Timeline[1][1]; <br><br>  
            <span class="text-md-black">// loop through the items <br>
            // $Timeline is an array so we can loop through it</span><br>
            foreach($Timeline as $days) {
               <span class="text-md-black">// because $days is an array, we cannot just print it.<br>
                   &nbsp&nbsp&nbsp // We have to loop through it instead, creating this "inner loop". </span><br>
                &nbsp&nbsp&nbsp foreach($days as $day) {<br>
                  &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp  echo $day;<br>
               &nbsp&nbsp&nbsp }<br>
            }<br><br>
        </p>
        <p class="fs-6"><b>OUTPUT</b><br>
           <?php
                echo "<b>Single Item: </b>" . $Timeline[0][0] . "</br>";
                echo "<b>Single Item: </b>" . $Timeline[1][0]. " is really " . $Timeline[1][1] . "</br></br>";    
                echo "<b>Loop: </b> </br>";
                foreach($Timeline as $days) {
                    foreach($days as $day) {
                        echo $day . " ";
                    }
                    echo "</br>";
                }
                echo "</br>";
                echo "<b>print_r" . "($" . "Timeline): </b></br>";
                print_r($Timeline);
            ?>
        </p>
    </div>
    <hr>
    <div class="container">
        <h5 class="text-black mb-4 text-center">Associative Arrays in MultiDimensional Arrays</h5>
        <p class="lead fs-6 text-center">Just an example of making complex data structures. As long as you keep track of what is an array and what is not, as well as if you want to refer to something by index or by name, these techniques can be combined in hundreds of different ways.</p>
        <p class="fs-6"><b>PHP</b><br>
            <span class="text-md-black">// create each family member's array </span><br>
            $Connie=array("lastName"=>"Ou","DOB"=>"September","Relation"=>"self");<br>
            $Spencer=array("lastName"=>"Ou","DOB"=>"August","Relation"=>"brother");<br>
            $Lilian=array("lastName"=>"Wang","DOB"=>"October","Relation"=>"mother");<br>
            $Roger=array("lastName"=>"Ou","DOB"=>"February","Relation"=>"father");<br>
            $Happy=array("lastName"=>"Ou","DOB"=>"November","Relation"=>"dog");<br>
            $Lucky=array("lastName"=>"Ou","DOB"=>"November","Relation"=>"dog");<br>
            $Maple=array("lastName"=>"Ou","DOB"=>"February","Relation"=>"dog");<br>
            $Mocha=array("lastName"=>"Ou","DOB"=>"September","Relation"=>"cat");<br>
            $Midnight=array("lastName"=>"Ou","DOB"=>"May","Relation"=>"missing cat");<br><br>
            <span class="text-md-black">// put the member arrays into an array </span><br> 
            $FamilyInfo = array(<br>
            &nbsp&nbsp&nbsp "Connie"=>$Connie,<br>
            &nbsp&nbsp&nbsp "Spencer"=>$Spencer,<br>
            &nbsp&nbsp&nbsp "Lilian"=>$Lilian,<br>
            &nbsp&nbsp&nbsp "Roger"=>$Roger,<br>
            &nbsp&nbsp&nbsp "Happy"=>$Happy,<br>
            &nbsp&nbsp&nbsp "Lucky"=>$Lucky,<br>
            &nbsp&nbsp&nbsp "Maple"=>$Maple,<br>
            &nbsp&nbsp&nbsp "Mocha"=>$Mocha,<br>
            &nbsp&nbsp&nbsp "Midnight"=>$Midnight<br>
            );<br><br>
            <span class="text-md-black">// output one item at a time </span><br>   
            echo "Single Item: ".$FamilyInfo["Connie"]["lastName"]; <br>
            echo "Single Item: ".$FamilyInfo[0]." ".$FamilyInfo["Connie"]["lastname"]." is yourself?"; <br><br>  
            <span class="text-md-black">// loop through the items </span><br>
            foreach($FamilyInfo as $key=>$infos) {<br>
                &nbsp&nbsp&nbsp echo $key . "&lt;br /&gt;"<br>
                &nbsp&nbsp&nbsp foreach($infos as $key => $info) { // see note<br>
                &nbsp&nbsp&nbsp &nbsp&nbsp&nbsp echo $key . ": " . $info . "&lt;br /&gt;";<br>
                &nbsp&nbsp&nbsp }<br>
            }<br><br>
        </p>
        <p class="fs-6"><b>OUTPUT</b><br>
           <?php
                echo "<b>Single Item: </b>" . $FamilyInfo["Connie"]["lastName"]. "</b></br>";
                echo "<b>Single Item: </b> Connie " . $FamilyInfo["Connie"]["lastName"]." is yourself? </br></br>";  
                echo "<b>Loop: </b> </br>";
                foreach($FamilyInfo as $key=>$infos) {
                    echo $key . " </br>";
                    foreach($infos as $key => $info) {
                        echo "&nbsp&nbsp&nbsp" . $key . ": " . $info . " </br>";
                    }
                }
                echo "</br>";
                echo "<b>print_r" . "($" . "FamilyInfo): </b></br>";
                print_r($FamilyInfo);
            ?>
        </p>
    </div>
</section>
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/resources/php/footer.php";
   include_once($path);
?>