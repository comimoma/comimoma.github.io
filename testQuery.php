<?php
  $servername = "135.148.83.108"; // dss10250.vsc.edu:3306
  $username = "cxoclass_guest"; // dssclass_guest
  $password = "989&1h&bEls2";  // VTC0mmun1ty
  $dbname = "cxoclass_ConniesWebsite";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM shop";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
            echo "id: " . $row["shop_ID"]. " - Name: " . $row["Name"]. " " . $row["Price"]. "<br>";
       }
  } else {
       echo "0 results";
  }
  $conn->close();
?>