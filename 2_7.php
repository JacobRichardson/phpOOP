<?php

    // Create the user class.
    class User {

        // Class properties.
        public $name;
        public $age;
        public static $minPassLength = 6;

        // Constructor method.
        public function __construct($name, $age) {

            // Set the properties equal to the values passed in.
            $this->name = $name;
            $this->age = $age;
        }


        // __get magic method.
        public function __get($property) {
    
            // If the property exists.
            if(property_exists($this, $property)) {

                // Return the property.
                return $this->$property;
            }
        }

        public static function validatePass($pass) {

            // If the length of the pass is greater than the min pass length.
            if (strlen($pass) >= self::$minPassLength) {

                // Return true.
                return true;
            }
            // The pass is not greater than the min pass length.
            else {

                // return false;
                return false;
            }
        }

    }

    // Variable for the pass.
    $pass = '123456';

    // If the password is valid.
    if (User::validatePass($pass)) {

        // Print the password is valid.
        echo 'Password valid.';
    }
    // The password is not valid.
    else {

        // Print the password is not valid.
        echo 'Password not valid.';
    }

?>