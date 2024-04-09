<?php
function getEnlaces() {
    require('/etc/php/db.php');

    if ($mysqli -> connect_errno) {
      exit();
    }
    
    $result = $mysqli -> query("SELECT * FROM enlaces");
    
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

function getSkills() {
    require('/etc/php/db.php');

    if ($mysqli -> connect_errno) {
      exit();
    }
    
    $result = $mysqli -> query("SELECT * FROM skills");
    
    $skills = array();
    
    while ($row = $result -> fetch_assoc()) {
        $skills[$row['id']] = array(
            'name' => $row['name'],
            'logo' => $row['logo'],
            'color' => $row['color']
        );
    }
    
    $mysqli -> close();
    
    return $skills;
}

function getProjects() {
    require('/etc/php/db.php');

    if ($mysqli -> connect_errno) {
      exit();
    }
    
    $result = $mysqli -> query("SELECT * FROM projects");
    
    $projects = array();
    
    while ($row = $result -> fetch_assoc()) {
        $projects[$row['id']] = array(
            'description' => $row['description']
        );
    }
    
    $mysqli -> close();
    
    return $projects;
}

?>

