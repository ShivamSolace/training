<?php
    class emp {                         //class 
    public $name;
    public $age;

    function set_name($name) {          // set Methods
        $this->name = $name;
    }
    function get_name() {                   // get Methods
        return $this->name;
    }

    function set_age($age) {
        $this->age = $age;
    }
    function get_age() {
        return $this->age;
    }

    }

    $emp1 = new emp();              // object created
    $emp1->set_name('Shivam');
    $emp1->set_age(26);

    echo ("The name of empolyee is "). $emp1->get_name();
    echo "<br>";
    echo ("The age of empolyee is "). $emp1->get_age();

?>
 
 <!---------------------------->

 <?php
    class employee {                         //class 
        public $name;
        public $age;
      
       function __construct($name, $age) {          //constructor
        $this->name = $name;  
        $this->age = $age;
        }
        function get_name() {
            return $this->name;
          }
        function get_age() {
          return $this->age;
        }
    } 
      
        $emp2 = new employee("SHAKTIMAAN",28);      //object created with parameterized constructor
        echo "<br>";
        echo ("The name of empolyee is "). $emp2->get_name();
        echo "<br>";
        echo ("The age of empolyee is "). $emp2->get_age();
        echo "<br>";
        echo "<br>";
 ?>

 <!---------------------------->

 <?php
    class emplo {                         //class 
        public $name;
        public $age;
      
       function __construct($name, $age) {          //constructor
        $this->name = $name;  
        $this->age = $age;
        }
        function __destruct() {
            echo "<br>";
            echo "<br>";
            echo ("The name of empolyee is {$this->name}");
            echo "<br>";
            echo "<br>";
            echo ("The age of empolyee is {$this->age}");
            echo "<br>";
            echo "<br>";
    } 
    } 
        $emp3 = new emplo("Gangadhaar",30);      //object created with parameterized constructor
 ?>

 <?php
    class solace{
        public $emp_name;
        public $emp_id;
        protected $emp_num;
        private $emp_sal;
    }

    $sol_1 = new solace();
    $sol_1->emp_name = "shivam yadav";
    $sol_1->emp_id = 123;
    // $sol_1-> emp_num = 2373472;      //cannot access as protected
    // $sol_1-> emp_sal = 45000;           //cannot access as private
    echo "<br>";
    echo ("The name of empolyee is "). $sol_1->emp_name;
    echo "<br>";
    echo "<br>";
    echo ("The ID of empolyee is "). $sol_1->emp_id;
    echo "<br>";
    //echo ("The num of empolyee is "). $sol_1->emp_num;
    echo "<br>";
    echo "<br>";
    //echo ("The salary of empolyee is "). $sol_1->emp_sal;
    echo "<br>";
?>

<?php
    class softeng {
    public $name;
    public $type;
    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }
    public function intro() {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo " {$this->name} is Software engineer and he is {$this->type}.";
    }
    }

    class designer extends softeng {
    public function message() {
        echo "<br>";
        echo "<br>";
        echo "Am I a tester or a developer ";
        echo "<br>";
        echo "<br>";
    }
    }
    $sof_1 = new designer("Shivam", "developer");
    $sof_1 ->message();
    $sof_1 ->intro();
?>

