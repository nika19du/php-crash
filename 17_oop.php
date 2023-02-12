<?php
    /* --- Object Oriented Programming */

class User{
    // Properties are attributes that belong to a class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by 
    //inheriting classes 
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name,$email,$password){
        echo 'constructor ran <br>';
        $this->name=$name;
        $this->email=$email;
        $this->password=$password;
    }

    // Method is a function that belongs to a class
    function set_name($name){
        $this->name=$name;
    }

    function get_name(){
        return $this->name;
    }
}

// Instatiate a user object
$user1=new User('Brad','brad@gmail.com','password');
$user2=new User('John','john@gmail.com','password');

// $user1->set_name('Brad');
// $user2->set_name('John');


var_dump($user1);
var_dump($user2);
echo '<br>';
echo $user1->get_name();
echo $user2->get_name();

echo $user1->email;
echo $user2->email;

// Inheritence

class Employee extends User{
    public $title;
    public function __construct($name,$email,$password,$title){
        parent::__construct($name,$email,$password);//running the parent constructor
        $this->title=$title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1=new Employee('Sara','sara@gmail.com','32324','Manager');

echo $employee1->get_title();
?>