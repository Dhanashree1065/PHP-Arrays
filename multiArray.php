<?php 
    echo "<h5><center>Multidimensional Array</center></h5>";

    $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Audi",17,15)
      );

    echo "<pre>";           //Used for debuggging
    print_r($cars);

    //                         0               1                  2
    //                   0     Volvo(0,0)     22(0,1)          18(0,2)

    //                   1     BMW(1,0)       15(1,1)          13(1,2)

    //                   2     Saab(2,0)      5(2,1)           2(2,2) 

    //                   3     Audi(3,0)      17(3,1)          15(3,2)

      echo "<b>Traversing of Array</b><br>";
      for($row=0;$row<4;$row++)
      {
          for($col=0;$col<3;$col++){
            echo $cars[$row][$col]."  ";
          }
            echo "<br>";
      }

?>