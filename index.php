<?php
$a=4;
$b=7;
$c=2;
$x=$a+$c*$b-$c**2;
    if ($x < 0) {
        echo "x="."$x"."<0"; // $op1 < $op2
    } elseif ($x > 0) {
        echo "x="."$x".">0"; // $op1 > $op2
    }
    else   //even
    {echo "x="."$x=0";}
?>
