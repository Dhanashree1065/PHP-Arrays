<?php

    echo "<h3><center>Different Array Functions</center></h3>";
    $a = array("dhanashree","Seema","Sanjay","Tanvi");
    // $a=["dhanashree","Seema","Sanjay","Tanvi"];
    echo "<pre>";                                          //<pre> is used for formatting    
    print_r($a);                                          // used for debugging 

    echo "<br><b>in_array()</b><br>";
    if(in_array('Yash',$a))
        echo "Match found";
    else
        echo "Match not found";

    echo "<br><br><b>range()</b>";
    $s = range(0,5);
    echo "<pre>";
    print_r($s);

    $s = range('a','z');
    echo "<pre>";
    print_r($s);

    echo "<br><br><b>array_unique()</b>";
    $a = array("dhanashree","Seema","Yash","Seema");
    echo "<pre>";
    print_r(array_unique($a));

    echo "<br><br><b>array_search()</b><br>";
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_search("red",$a);

    echo "<br><br><b>array_slice()</b>";
    $a = array("dhanashree","Seema","Sanjay","Tanvi");
    print_r(array_slice($a,1));  

  
?>