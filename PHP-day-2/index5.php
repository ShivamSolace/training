<!-- if else -->
<!-- {
    <?php
    $x = 10;
    $y = 5;
    $z = 2;
        if ($x == 10 and $z == 5) {
            echo "It has true and equal values";
        }
        
            else{ echo "It has false and unequal values";      // not works
        }
    ?>
} -->



<!-- if else if -->
<!-- {
    <?php
    $x = 20;

    if ($x < "10") {
      echo "Have a good morning!";
    } elseif ($x < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }
    ?>
} -->



<!-- switch Statement -->
<!-- {
    <?php
        $day = "guruvaar";

        switch ($day) 
        {
            case "somvaar":
                echo "Monday";
                break;
            case "mangalvaar":
                echo "Tuesday";
                break;
            case "bhudvaar":
                echo "Wednesday";
                break;
            case "guruvaar":
                echo "Thursday";
                break;
            case "Shukravaar";
                echo "Friday";
                break;
                default:
                echo "Weekend";
        }
    ?>
} -->

<!-- while loop -->
<!-- {<?php
    $x = 10;

    while($x <= 50) {
      echo "The number is: $x <br>";
      $x = $x + 10;
    }
?>} -->

<!-- do while loop -->

<!-- {<?php
        $x = 10;
        do{
            echo "its do loop <br>";
            $x = $x + 10;
        }
        while($x <= 50); 
        // {
        //   echo "its while loop <br>";
          
        // }
?>} -->


<!-- for loop -->
<!-- {<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "for loop running <br>";
      }
?>} -->


<!-- foreach loop -->
<!-- {<?php
    $salary = array("Shiv" => "45000", "Shiva" => "55000", "Shivam" => "65000");

    foreach($salary as $x => $y){
        echo "Salary of $x is $y in Rupees  <br>";
    }
?>} -->


<!-- break loop -->
<!-- {<?php
    for ($x = 0; $x < 100; $x = $x + 10) {
        if ($x == 40) {
            echo "loop is running  <br>";
          break;
        }
        echo "loop is breaked <br>";
      }
?>} -->

<!-- continue loop  -->
<!-- {<?php
    for ($x = 0; $x < 100; $x = $x + 10) {
        if ($x == 40) {
            echo "loop is running  <br>";
          continue;
        }
        echo "loop is breaked <br>";
      }
?>} -->