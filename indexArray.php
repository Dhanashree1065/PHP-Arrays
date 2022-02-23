<?php
    echo "<h2><center>Indexed Arrays</center></h2>";
    
    $numbers=array('1','2','5','8','51');
            //index 0,  1,  2,  3,  4      
    echo $numbers."<br>";
    echo $numbers[0]."<br>";                //Array indexing starts from 0      //return 1
    echo $numbers[2]."<br>";                //return 5

    echo "Total Elements: ".count($numbers);     //Total Elements= 5

    echo "<br><br><b>Traversing of Array</b><br><br>";

    foreach($numbers as $i)
        echo "Array Elements: ".$i."<br>";

    echo "<br><br>";
    for($i=0;$i<count($numbers);$i++)
        echo "Array Elements: ".$numbers[$i]."<br>";
?>