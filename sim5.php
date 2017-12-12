<?php
/**
 * Created by PhpStorm.
 * User: praty
 * Date: 09-12-2017
 * Time: 18:02
 */
if (isset($_POST['submit'])) {

    $num1 = $_POST['nod'];
    $num2 = $_POST['nog'];
    $num3=(int)$num1;
    $num4=(int)$num2;
    $sum = $num3 + $num4;
    echo "sum=".$sum;
}


