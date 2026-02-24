<?php
    class student {
        public $name;
        public $email;
        public $marks;

        // Constructor
        public function __construct($name, $email, $marks) {
            $this->name = $name;
            $this->email = $email;
            $this->marks = $marks;
        }

        # Fuction to check Student Result
        public function checkMarks() {
            if ($this->marks >= 50) {
                return "Pass";
            } else {
                return "fail";
            }
        }
    }
?>