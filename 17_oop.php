<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

## properties - variables
## methods - functions
## constructors - a method/function that runs when an object is created

class User {
    //Properties are attributes that belong to a class

    ## Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes

   public $username;
   public $email;
   public $password;

   //constructor
   public function __construct($username, $email, $password) {
    $this->username = $username;
    $this->email = $email;
    $this->password = $password;
   }

   // Method a function that belongs in a class
   function set_username($username) {
    $this->username = $username;
   }

   function get_username() {
    return $this->username;
   }
}

//Instantiate user object
$user1 = new User('judebellingham', 'jude@gmail.com', '442');
$user2 = new User(' lawest', ' lawest@gmail.com', '343');

// echo $user1->email;
// echo $user2->username;

//Inheritance 

class Employee extends User {
    public function __construct($username, $email, $title, $password) {
        parent::__construct($username, $email, $password);
        $this->title = $title;
    }
    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Jade', 'jade@gmail.com',  'Manager', '452347');
echo $employee1->get_title();



