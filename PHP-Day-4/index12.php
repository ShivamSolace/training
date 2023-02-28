<!-- <?php
    include "Html.php";     //helps access files of Html.php
    use Html as H;          // instead of write Html we can write H using "as" alias.
    $e1 = new H\emp();       //$e1 & e2 are variables
    $e1->name = "Shivam yadav";
    $e1->sal = "50K";

    $e2 = new H\emp2();      //Html is namespace and emp2 is class in Html
    $e2 ->age = 26;
?>

<html>
    <body>

        <?php $e1 ->message(); ?>
        <?php $e2 ->message(); ?>

    </body>
</html> -->


<!-- -----------XML----------------  -->

<?php
include 'index13.php';

$movies = new SimpleXMLElement($xmlstr);

echo $movies->movie[0]->plot;

echo "<br>";
echo "<br>";
echo "<br>";

echo $movies->movie->{'great-lines'}->line;
?> 
?>