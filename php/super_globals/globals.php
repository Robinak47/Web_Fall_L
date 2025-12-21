<?php
    $num=10;
    $num2=20;


    function test()
    {
        //global $num;
        //echo $num;

        echo $GLOBALS['num'];
        echo $GLOBALS['num2'];

    }


    test();
?>