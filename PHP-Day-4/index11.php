<!-- -----------Inheritance with constructor-------------->
<!-- <html>
        <head>
            <title>Inheritance with constructor</title>
        </head>
        <body>
        <?php
    class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color; 
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}."; 
    }
    }

    class Mango extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight; 
    }
    public function intro() {
        echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
    }
    }

    $fruit1 = new Mango("Mango", "red", 50);
    $fruit1->intro();
    $fruit2 = new Mango("Mango", "yellow", 75);
    $fruit2->intro();
    $fruit3 = new Fruit("Apple", "pale red");       
    $fruit3->intro();
    ?>
    
        </body>
</html> -->



<!-- -------------------constant------------------------->

<!-- <?php
    class A{
        const a = "this is real";
    }
    echo A::a;
    echo "<br>";
    // class B extends A{       //not working
    //     echo B::a;
    // }
?> -->

<!-- <?php
    class A1 {
    const a = "This is real too";
    public function b() {
        echo self::a;
    }
    }

    $obj = new A1();
    $obj->b();
?> -->

<!-- -------------------abstract------------------------->

<!-- <?php
    // abstract class A3 {
    // abstract public function a1();
    // abstract public function a2($name, $age){

    // }
    // abstract public function a3() : string;
    // }
?> -->

<!-- -------------------interface------------------------->

<!-- <?php
    interface Animal {
    public function makeSound();
    }

    class Cat implements Animal {
    public function makeSound() {
        echo "Meow";
    }
    }

    class Dog implements Animal {
        public function makeSound() {
        echo "bhow-bhow";
        }
    }

            // 1st method
    $b = new  Cat();
    $b ->makeSound();
    $a = new Dog();
    $a ->makeSound();

            // 2nd method
    $c = array($b, $a);     

    foreach($c as $C){
        $C->makeSound();
    }

?> -->


<!-- -------------------Traits------------------------->

<!-- <html>
    <body>

        <?php
            trait Aa {
                function a1() {
                        echo "This is 1st trait's 1st fuction"; 
                    }
                    function a2() {
                        echo "This is 1st trait's 2nd fuction"; 
                    }
            }

            trait Bb {
                function b1() {
                    echo "This is 2nd trait's 1st fuction"; 
                }
                function b2() {
                    echo "This is 2nd trait's 2nd fuction"; 
                }
            }

            class Welcome {
                use Aa, Bb;
                }

                $obj = new Welcome();
                $obj->a1();
                echo "<br>";
                $obj->b1();
                echo "<br>";

            class Welcome2 {
                use Aa, Bb;
                }

                $obj2 = new Welcome2();
                $obj2->a2();
                echo "<br>";
                $obj2->b2();
                echo "<br>";
        ?>
        
    </body>
</html> -->

<!-- -------------------static------------------------->

<!-- <?php
    class A5 {
        public static function a5() {
                echo "Gangadhaar he shaktimaan hai!!";
            }
        function a6(){
                echo "<br>";
                echo "kisne bataya??";
            }
    }
    // A5::a5();           //calling static method
    // $aa1 = new A5();    //create object instance
    // $aa1->a6();         //calling normal method

    class B5 extends A5{
        public $bb1;
        public function __construct(){
            $this->bb1 = parent::a5();
        }
    }
    $b5 = new B5();
    echo $b5-> bb1;
?> -->


<!-- <?php
    class pi {
        public static $value = 3.14159;       //property
        }

    echo pi::$value;
?> -->

