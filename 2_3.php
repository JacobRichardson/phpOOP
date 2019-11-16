<?php

    // Define the user class.
    class User {

        // Class attribute name.
        public $name;

        // Say hello method.
        public function sayHello () {

            // Return the instance of the class's name with says hello added to it.
            return $this->name . ' says hello';
        }
    }

    // Instantiate a user object from the user class.
    $user1 = new User();

    // Set the user's name to Jacob.
    $user1->name = 'Jacob';

    // Access the name property on the user.
    echo $user1->name;

    echo '<br>';

    // Invoke the say hello method of the user.
    echo $user1->sayHello();

    echo '<br>';

    // Create another user.
    $user2 = new User();

    // Set the name of user 2 to James.
    $user2->name = 'James';

    // Have user2 say hello.
    echo $user2->sayHello();

?>