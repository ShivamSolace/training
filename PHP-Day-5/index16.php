<?php

    // echo readfile("shivam.txt");            //read any file


    // $x = fopen("shivam.txt", "r") or die("Unable to open file!");
    // echo fgets($x);
    // fclose($x);

    $y = fopen("shivam.txt", "a") or die("Unable to open file!");
    $z = "Donald Duck\n";
    fwrite($y, $z);
    $z = "Goofy Goof\n";
    fwrite($y, $z);
    fclose($y);



?>
