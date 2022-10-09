<?php
$reg_dom = '#\images/\IMG_\d*\.(img|png|jpg)#';
$dom = "fgfdg12.org";
$arr = ["images/IMG_444.jpg", "dd/net", "dsf.fff", "sfsadad"];
for ($i = 0; $i < count($arr); $i++) {
    if (preg_match($reg_dom, $arr[$i], $matches))
        echo "$arr[$i] - правильне доменне ім'я\n";
    else
        echo "$arr[$i] - неправильне доменне ім'я\n";
}
// print_r($matches);
