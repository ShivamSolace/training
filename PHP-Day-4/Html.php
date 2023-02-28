<?php
    namespace Html;
    class emp {
        public $name = "";
        public $sal = 0;

        public function message() {
            echo "<p>Our employee '{$this->name}' has {$this->sal} salary.</p>";
        }
    }

    class emp2 {
        public $age = 0;
        public function message() {
            echo "<p>he/she is just {$this->age} years old.</p>";
        }
    }
?>