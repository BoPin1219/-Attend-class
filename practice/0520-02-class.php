<?php
header('Content-Type: text/plain'); //設定檔頭，告訴用戶端內容為純文字

class Person{
    var $name;
    public $mobile;
    private $sno = 'secret';
}
$p =new Person;
$p->name = "老王";
$p->mobile = "0987654321";
print_r($p);
echo $p->name;