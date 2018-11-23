<?php
    //C:\xampp\htdocs\crud\simplehtmldom
    include_once('./simplehtmldom/simple_html_dom.php');
    
    $url = "http://scat.sec.samsung.net/";
    $dom = file_get_html($url);
    $tables = $dom->find('table');
    echo $tables[0];
    echo $tables[1];
?>