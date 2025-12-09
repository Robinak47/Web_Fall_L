<?php

    $name="Meow";
    $greet="hello";
    $isValid=true;
    $floatValue=10.5;
    echo $floatValue."<br>";
    echo gettype($floatValue)."<br>";
    echo gettype($isValid)."<br>";
    echo $name;
    echo ($name);
    print ($name."<br>");
    echo $name, " ", $greet;

    $val=print("meow");
    echo $val;

    echo gettype($name)."<br>";
    echo var_dump($name)."<br>";

    $num;
    echo gettype($num)."<br>";

    // artimatic ops;

    $num1=10;
    $num2=20;

    echo $num1 + $num2 ."<br>";
    echo $num1 - $num2 ."<br>";
    echo $num1 * $num2 ."<br>";
    echo $num2 / $num1 ."<br>"; 
    echo $num2 % $num1 ."<br>";
    echo $num1 ** 2 ."<br>";


    //conditions

    if($num1 > $num2){
        echo "$num1 is greater than $num2 <br>";
    }
    else{
        echo "$num2 is greater than $num1 <br>";
    }

    //ternary operator
    //(condition) ? expr1 : expr2;
    echo ($num2 > $num1) ? "$num1 is greater than $num2 <br>" : "$num2 is greater than $num1 <br>";


    $num3=15;
    $num4=11;


    if($num3> $num4){
        echo "$num3 is grater than $num4 <br>";
    }

    else if($num3 == $num4){
        echo "$num3 is equal to $num4 <br>";
    }
    else{
        echo "$num4 is grater than $num3 <br>";
    }


    //switch case

    $day=3;

    switch($day){
        case 1:
            echo "Monday <br>";
            break;
        case 2:
            echo "Tuesday <br>";
            break;
        case 3:
            echo "Wednesday <br>";
            break;
        case 4:
            echo "Thursday <br>";
            break;
        case 5:
            echo "Friday <br>";
            break;
        case 6:
            echo "Saturday <br>";
            break;
        case 7:
            echo "Sunday <br>";
            break;
        default:
            echo "Invalid day <br>";
    }


    //loops

    for($i=1; $i<=5; $i++){
        echo "Iteration number: $i <br>";
    }

    $j=1;
    while($j<=5){   
        echo "While loop iteration: $j <br>";
        $j++;
    }

    $k=1;
    do{
        echo "Do-While loop iteration: $k <br>";
        $k++;
    } while($k<1);





?>