
<!-- functions -->


<!-- {<?php
    function first(){
        echo "I have written 1st function in PHP <br>";
    }

    first();


    function second($name){
        echo " $name is Solacian. <br>";
    }

    second("shivam");

    function third($name, $year){
        echo " $name is Solacian. $name joined in $year. <br>";
    }

    third("shivam", 2023);

    function fourth($a1, $a2){
        echo " Addition of $a1 and $a2 is " . ($a1 + $a2) . "<br>";
    }

    fourth(23, 20);

?>} -->

<!-- {
    <?php
            // declare(strict_types=1);        // must be specified on 1st line
            // function fifth($a1, $a2){
            //     echo " Addition of $a1 and $a2 is " . ($a1 + $a2) . "<br>";
            // }
        
            // fifth(23, "20");
        ?>
} -->



<!-- Arrays -->

<!-- {
    <?php
        $name = array("Shiv", "Shiva", "Shivam"); 
        echo "My name " . $name[0] . ", " . $name[1] . " and " . $name[2] . "<br>";
        echo count($name);
    ?>
} -->

<!-- {
    <?php
        $name1 = array("Rider", "Trekker", "hiker"); 
        $s = count($name1);

        for($i = 0; $i < $s; $i++){
            echo "I am a " . $name1[$i] . "<br>";
        }
    ?>
} -->

<!-- multi-dimensional array -->

<!-- {
    <?php
        $name2 = array(array("Shivam",26,"nashik"), array("Shiv baba",826,"himalaya"), array("Shivameshwar baba",62,"mumbai")); 
        $s = count($name2);

        echo $name2[0][0] . " is " . $name2[0][1] . " years old from " .$name2[0][2] . "<br>";
        echo $name2[1][0] . " is " . $name2[1][1] . " years old from " .$name2[1][2] . "<br>";
        echo $name2[2][0] . " is " . $name2[2][1] . " years old from " .$name2[2][2] . "<br>";
    ?>
} -->

<!-- 
{
    <?php
        $name2 = array(array("Shivam",26,"nashik"), array("Shiv baba",826,"himalaya"), array("Shivameshwar baba",62,"mumbai")); 
        $s = count($name2);

        for ($i = 0; $i < $s; $i++) {
            echo "<p><b>Row number $i</b></p>";
            echo "<ol>";
            for ($j = 0; $j < 3; $j++) {
              echo "<li>".$name2[$i][$j]."</li>";
            }
            echo "</ol>";
          }
    ?>
} -->



<!-- in-built array -->

<!-- {
    <?php
        $name2 = array("Shivam", "Shiv baba", "Shivameshwar baba"); 
        $s = count($name2);             //in-built
        echo $s;
        sort($name2);                   //in-built
        for($x = 0; $x < $s; $x++) {
            echo $name2[$x];
            echo "<br>";
          }
        rsort($name2);                   //in-built
          for($x = 0; $x < $s; $x++) {
              echo $name2[$x];
              echo "<br>";
        }
    ?>
} -->

<!-- {
    <?php
        $name2 = array("Shivam"=>"26","Shiv baba"=>"826", "Shivameshwar baba"=>"62"); 
        // $s = count($name2);
        asort($name2);
        foreach($name2 as $x => $y) {
            echo "name is " . $x . " & age is " . $y . "<br>";
        }
        arsort($name2);
        foreach($name2 as $x => $y) {
            echo "name is " . $x . " & age is " . $y . "<br>";
        }
        krsort($name2);
        foreach($name2 as $x => $y) {
            echo "name is " . $x . " & age is " . $y . "<br>";
        }
    ?>  
} -->


