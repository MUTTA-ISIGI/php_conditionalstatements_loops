<?php
//for loops
//while loops

//1. while loops
    //.....while loop
    //.....do while loop

//1. do loops
    //.....for loop
    //.....for each while loop


//while loop
    $firstNumber = 0;
    while ($firstNumber <=5){
        $firstNumber++;
        echo "<br>";
    }

//DO WHILE LOOP
    $secondNumber = 10;
    do{
        echo $secondNumber;
        $secondNumber++;
        echo "<br>";
    }while ($secondNumber <=15);

 //FOR LOOP
    for($thirdNumber = 20; $thirdNumber <=25; $thirdNumber++){
        echo $thirdNumber;
        echo "<br>";
    }

 //FOREACH LOOP
    $names = ["james", 10, "Esther", 100.56,  "John", "Cynthia"];
    foreach ($names as $x){
        echo $x;
        echo "<br>";
    }