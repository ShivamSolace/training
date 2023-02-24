<!-- Superglobal - $_SERVER -->

<!-- {
    <?php
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_REFERER'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
    ?>
} -->


<!-- FORMS -->

 <?php 
    $a = $_POST["name"];
    $b = $_POST["email"];
    $c = $_POST["password"]; 
 
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;
 ?>