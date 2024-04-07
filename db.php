<?php
function getEnlaces() {
    require('/etc/php/db.php');

    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    else {
      echo "Connected to MySQL";
    }
    
    $mysqli -> query("SELECT * FROM `enlaces`");
    
    $enlaces = array();
    
    while ($row = $result -> fetch_assoc()) {
        $enlaces[$row['id']] = array(
            'url' => $row['url'],
            'title' => $row['title'],
            'img' => $row['img']
        );
    }
    
    $mysqli -> close();
    
    return $enlaces;
}

?>