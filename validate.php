<?php

echo "The POST variable contains:<pre>";
print_r($_POST);
echo "</pre>";

if(array_key_exists('_submit',$_POST)) {
    echo "The user has clicked Submit Only";
} elseif(array_key_exists('_submit_save',$_POST)) {
    echo "The user has clicked Save & Submit";
} else {
    echo "Something Wrong!";
}
echo "<br/>";
echo "Username: ".$_POST["_username"].
        " and Password: ".$_POST["_password"];




$multiArray = [
    "subA1" => [
        "k1"=>"v1",
        "k2"=>"v2",
    ],
    "subA2" => [
        "a1",
        "a2",
        "a3",
        "a4",
        "k1"=>"v4",
        "k2"=>"v3",
        "k3"=>"v2",
        "k4"=>"v1",
    ],
    "subA3" => [
        "v1", //0
        "v2", //1
        "v3", //2
    ]    
];
echo "<pre>";
print_r($multiArray);
echo "</pre>";
    echo "<BR/>";
    echo $multiArray["subA1"]["k1"];
    echo "  ";
    echo $multiArray["subA2"]["k1"];