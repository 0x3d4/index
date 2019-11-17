<?php


$filename = "/home/rafya/public_html/index.php";

$silinecek_satir = 52;


$silinecek_satir -= 1;


$file_dump = file_get_contents($filename);

foreach(file($filename) as $line => $key) {
    if( $line == $silinecek_satir ){
        $file_dump = str_replace($key, "", $file_dump);
    }
}


file_put_contents($filename, $file_dump);
