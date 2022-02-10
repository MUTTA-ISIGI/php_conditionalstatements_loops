<?php
    //
    function myAverage($x, $y, $z){
        $average = ($x + $y + $z);
        echo "your average is $average";
        echo "<br>";
    }
myAverage(100,250, 120);


    
 //create a function to calculate the BMI of any user using a professional scale from the internet
 //proceed to display the user result as either 1.underweight 2. normal weight
  //3. overweight 4. obese

  $height = 1.5;
  $mass = 44;
  $bmi = ($mass/$height*$height);

  function myBmi($mass, $height){
      $bmi = ($mass/($height*$height));
      echo "Your BMI is $bmi";
      echo "<br>";
}
myBmi(44,1.5);
  if ($bmi < 18.5) {
      echo "underweight";
  }elseif ($bmi < 24.5){
      echo "normal";
  }elseif ($bmi < 29.9){
      echo "overweight";
  }else{
      echo "obese";
  }
