<?php
    function createTheTXTFile() {
        echo "read file <br />\r\n";
        $myfile = fopen("testfile.txt", "w");
    }

    function readTheTXTFile() {
        echo "read file <br>";
        $myfile = fopen("userpassword.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("userpassword.txt"));
        echo "<br>";
        fclose($myfile);
    }

    function updateTheTXTFile() {
        echo "read file";
    }
    
    function deleteTheTXTFile() {
        unlink("userpassword.txt");
    }

    function createTheJSONFile($fileName, $ini_content) {
        echo "create the JSON file";
        $myfile = fopen($fileName, "w") or die("Unable to create the file; check for errors!");
        $JSONwrite = json_encode($ini_content);
        fwrite($myfile, $JSONwrite);
        fclose($myfile);
    }

    function readTheJSONFile($fileName) {
        $myfile = fopen($fileName, "r") or die("Unable to read the file; check if exists and errors!");
        $JSONread = json_decode(fread($myfile, filesize($fileName)));
        fclose($myfile);
        foreach($JSONread as $keys => $values) {
            echo $keys . ": <br>";
            foreach ($values as $key => $value) {
                echo "&nbsp;&nbsp;" . $key . "<br>";
                foreach ($value as $catKey => $info) {
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;" . $catKey . " == " . $info . "<br>";
                }
            }
        }
    }

    function deleteTheJSONFile($fileName) {
        unlink($fileName);
    }
?>