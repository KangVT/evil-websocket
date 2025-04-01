<?php
if(isset($_GET['data'])){
    $file = fopen("logs.txt", "a");
    fwrite($file, $_GET['data'] . "\n");
    fclose($file);
}
?>
