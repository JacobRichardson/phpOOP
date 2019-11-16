<?php

    // User classes.
    class User {

        // Class properties.
        private $name;
        private $age;

        // Constructor function.
        public function __construct ($name, $age) {

            // Set properties equal to what was passed in.
            $this->name = $name;
            $this->age = $age;
        }

        /*

        // Function to get the name.
        public function getName() {

            // Return the name.
            return $this->name;
        }

        // Function to set the name.
        public function setName($name) {

            // Set the name equal to what was passed in.
            $this->name = $name;
        }

        */

        // __get magic method.
        public function __get($property) {
            
            // If the property exists.
            if(property_exists($this, $property)) {

                // Return the property.
                return $this->$property;
            }
        }

        // __set magic method.
        public function __set($property, $value) {

            // If the property exists.
            if(property_exists($this, $property)) {

                // Set the property equal to the value passed in.
               $this->$property = $value;
            }

        }

    }

    // Create a new user.
    $user1 = new User('John', 40);


    // Cannot access private variables!
    // echo $user1->name;

    // Set user1's name to Jeff.
    // $user1->setName('Jeff');
    
    // use the magic set method to set the name.
    $user1->__set('age', 41);


    // Use the get name method instead.
    // echo $user1->getName() . '<br>';

    // Use the magic get method to retrieve the name.
    echo $user1->__get('age');



?>