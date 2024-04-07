<?php

include( 'db.php' );

$enlaces = getEnlaces();

echo '<ul>';
foreach ($enlaces as $id => $enlace) {
    echo '<li><a href="' . $enlace['url'] . '"><img src="' . $enlace['img'] . '" alt="' . $enlace['title'] . '"></a></li>';
}
echo '</ul>';



?>