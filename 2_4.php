<?php

    // Define a user class.
    class User {

        // Class properties.
        public $name;
        public $age;

        // Constructor function to create an object.
        public function __construct ($name, $age) {

            echo __CLASS__ . ' instantiated <br>';

            // Set the name passed in to the name property.
           $this->name = $name;

           // Set the age passed in to the age property.
           $this->age = $age;
        }

        // Say hello method.
        public function sayHello () {

            // Return the name added with says hello.
            return $this->name . ' says hello';
        }

        // Destructor is called when no references to an object.
        // Use for cleanup, closing connections, etc.
        public function __destruct() {
            echo 'destructor ran! <br>';
        }
    }

    // Create a new user.
    $user1 = new User('Jacob', 25);

    // Echo the users name and their age.
    echo $user1->name . ' is ' . $user1->age . ' years old';

    echo '<br>';

    // Invoke the say hello method on user 1.
    echo $user1->sayHello();

    echo '<br>';

    // Create a new user.
    $user2 = new User('James', 75);

    // Echo the users name and their age.
    echo $user2->name . ' is ' . $user2->age . ' years old';

    echo '<br>';

    // Invoke the say hello method on user 1.
    echo $user2->sayHello();

    echo '<br>';
    
?>

