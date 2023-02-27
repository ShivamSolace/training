<?php

        // DATE
echo "Today is " . date("Y/m/d") . "<br>";
echo "--------------";
echo "Today is " . date("Y.m.d") . "<br>";
echo "--------------";
echo "Today is " . date("Y-m-d") . "<br>";
echo "--------------". "<br>";
echo "Today is " . date("l"). "<br>";
echo "--------------". "<br>";
echo "Today is " . date("0"). "<br>";
echo "--------------". "<br>";


// TIME


echo "The time is " . date("h:i:sA"). "<br>";


$d=mktime(11, 14, 54, 8, 12, 2014);         // fix the values
echo "Created date is " . date("Y-m-d h:i:sa", $d);         //constant



$d=strtotime("10:30pm April 15 2014");       // fix the values
echo "Created date is " . date("Y-m-d h:i:sa", $d);         //constant
?>


<html>
<body>

<h1>Welcome to my home page!</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita possimus natus dolores excepturi? Quam laboriosam error, obcaecati quasi voluptas praesentium commodi optio libero, distinctio soluta aliquam natus neque nobis iure ipsam assumenda consequatur molestiae nesciunt..</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum dolorem voluptates, pariatur quo provident perferendis aliquid sed ipsam adipisci tenetur. Veritatis, error cum? Ullam minus repellat repudiandae facere, veritatis possimus a fugit beatae reiciendis rem repellendus, accusamus maxime aliquid illo nisi, deleniti error iusto ut excepturi exercitationem. Voluptatibus, nam animi? Eum aliquid vel reiciendis beatae!.</p>

<?php include 'index8.php';         // to add php file
echo readfile("shiv.txt");          // to add any type of file


$myfile = fopen("webdictionary.txt", "r") or die("arr Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
</body>
</html>

