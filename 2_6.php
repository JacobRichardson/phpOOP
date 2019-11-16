<?php

    // Create the user class.
    class User {

        // Class properties.
        protected $name;
        protected $age;

        // Constructor method.
        public function __construct($name, $age) {

            // Set the properties equal to the values passed in.
            $this->name = $name;
            $this->age = $age;
        }
    }


    // Define class customer that extends user.
    class Customer extends User {

        // Class properties.
        private $balance;

        // Constructor method.
        public function __construct ($name, $age, $balance) {

            // Use the parent constructor for repeated properties.
            parent::__construct($name, $age);

            // Set the properties equal to the values passed in.
            $this->balance = $balance;
        }

        // __get magic method.
        public function __get($property) {
            
            // If the property exists.
            if(property_exists($this, $property)) {

                // Return the property.
                return $this->$property;
            }
        }

        // Pay method.
        public function pay($amount) {

            // Return the Customers name and how much they paid.
            return $this->name . ' paid $' . $amount;
        }
    }

    // Create a new customer.
    $customer1 = new Customer('Jacob', 30, 1000);

    // Invoke the pay function.
    // echo $customer1->pay(100);

    // Retrieve the balance from the customer.
    echo $customer1->__get('balance');

?>