<?php

$a = isset($_GET['a']) ? $_GET['a'] : 0 ;
$b = isset($_GET['b']) ? $_GET['b'] : 0 ;
// sleep(5);  #回傳延遲秒數
echo $a * $b ;
