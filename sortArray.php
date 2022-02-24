<?php
    echo "<h2><center>Sorting Array</center></h2>";

    $numbers = array("6","2","5","8");
    sort($numbers);                     //sort arrays in ascending order
    
    $length = count($numbers);

    for($x=0;$x<$length;$x++){
        echo $numbers[$x];
        echo "<br>";
    }

    echo "<br><b>rsort()</b><br>";
    rsort($numbers);                //sort arrays in descending order
    
    $length = count($numbers);

    for($x=0;$x<$length;$x++){
        echo $numbers[$x];
        echo "<br>";
    }

    echo "<br><b>asort()</b><br>";
    $courses = array("C++"=>"5800","Java"=>"15000","PHP"=>"3500");
    asort($courses);                //sort arrays in ascending order according to value
    
    foreach($courses as $key => $value)         //Traversing Array
    echo "Key is ".$key." and Value is ".$value."<br>";

    echo "<br><b>ksort()</b><br>";
    $courses = array("C++"=>"5800","Java"=>"15000","PHP"=>"3500");
    ksort($courses);                //sort arrays in ascending order according to key
    
    foreach($courses as $key => $value)         //Traversing Array
    echo "Key is ".$key." and Value is ".$value."<br>";

    echo "<br><b>arsort()</b><br>";
    $courses = array("C++"=>"5800","Java"=>"15000","PHP"=>"3500");
    arsort($courses);                //sort arrays in descending order according to value
    
    foreach($courses as $key => $value)         //Traversing Array
    echo "Key is ".$key." and Value is ".$value."<br>";

    echo "<br><b>krsort()</b><br>";
    $courses = array("C++"=>"5800","Java"=>"15000","PHP"=>"3500");
    krsort($courses);                //sort arrays in descending order according to key
    
    foreach($courses as $key => $value)         //Traversing Array
    echo "Key is ".$key." and Value is ".$value."<br>";



?>