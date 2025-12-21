<?php

    $num=10;
    function sayMyName()
    {
        static $x=5;
        
        echo "Meow<br>";
        echo $GLOBALS['num']."<br>";
        echo $x."<br>";
        $x++;
    }

    sayMyName();
    sayMyName();

    echo "<br>".$num;


    function sayMyName1($name)
    {
        echo "<br>".$name;
    }

    sayMyName1("WW");

    function sayMyNameAndGreet($name, $greet)
    {
        echo "<br>".$name." ".$greet;
    }


    sayMyNameAndGreet("Heizenburg", "GodFather");

    $arr=[10,20,30,40];
    print_r($arr);

    $arr2=array("mango","banana","PineApple", "orange", "stawberry");
    //print_r($arr2);
    foreach($arr2 as $fruit)
    {
        echo "<br>".$fruit;
    }

    echo "<br>";
    $arr3=[[10,20],[30,40],[40,50]];
    echo "<br>".$arr3[1][1]."<br>";
    foreach($arr3 as $arr4)
    {
        foreach($arr4 as $arr5)
        {
            echo $arr5." ";
        }

        echo "<br>";
    }



    $associativeArr1=["23-51341-1"=>"Shahadat Hossian", "22-49261-3"=>"Md. Talha Jubayer"];

    echo $associativeArr1["22-49261-3"];


    foreach($associativeArr1 as $asArr)
    {
        echo "<br>".$asArr."<br>";
    }

    $associativeArr2=array("fruit1"=>"mango", "fruit2"=>"Apple");

    print_r($associativeArr2)."<br>";

    echo "<br>";

    $associativeArr3=[["person1"=>"meow", "person2"=>"cat"],["person3"=>"tom", "person4"=>"vvv"],["person5"=>"ggg", "person6"=>"jerry"]];
    print_r($associativeArr3)."<br>";



    function getAndPassArray($arr7)
    {
        for($i=0;$i<count($arr7);$i++)
        {
            $arr7[$i]= $arr7[$i]+5;
        }

        return  $arr7;
    }


    echo "<br>";

    $arr8=getAndPassArray([10,20,30,40]);
    print_r($arr8);

    function test(&$value1)
    {
        $value1=$value1+5;
        
    }

    echo "<br>";
    $valueActual=10;
    test($valueActual);
    echo $valueActual;


?>
