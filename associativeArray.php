<?php
    echo "<h1><center>Associative Array</center></h1>";
    
    $courses = array("C++"=>"5800","Java"=>"15000","PHP"=>"3500");
    echo $courses['C++'];           //Accessing value through Key

    echo "<pre>";                   //Used for debugging
    print_r($courses);

    echo "<br><br><b>Traversing of Array</b><br><br>";
    foreach($courses as $key => $value)         //Traversing Array
        echo "Key is ".$key." and Value is ".$value."<br>";
?>