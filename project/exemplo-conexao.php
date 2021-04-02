<?php 

try {
    $conn = new PDO('mysql:host=50.116.87.155;dbname=youpl172_vagner', 'youpl172_vagner', 'q1w2e3r4');
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "oi";
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }


?>
