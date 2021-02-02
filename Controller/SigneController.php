<?php
declare(strict_types = 1);

class SigneController
{
    public function validate_email($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            return true;

        } else {
            return false;
        }
    }
    public function validate_phone_number($phone)
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);
        // Check the lenght of number
        // This can be customized if you want phone number from a specific country
        if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
            return false;
        } else {
            return true;
        }
    }
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)

    {
        $databaseManager = new DatabaseManager("localhost", 3306, "root","");
        $databaseManager->connect();


        $users = new User($databaseManager);


        $name = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $values = [
            $name,
            $email,
            $password,
            $phone,
            $city,
            ];
        $userErr='';
         $passwordErr='';
         $phoneErr='';
         $emailErr='';
         $cityErr = '';
        if (isset($_POST["submit"])) {
        if (empty($_POST["user"]) || empty($_POST["city"]) || empty($_POST["phone"]) || empty($_POST["password"]) ||
            empty($_POST["email"]) || (!$this->validate_email($email)) || (!$this->validate_phone_number($phone))) {
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            }
            else if (!$this->validate_email($email)) {
                 $emailErr = "Invalid email format";
            }
            if (empty($_POST["user"])) {
                $userErr = "user name is required";

            }
            if (empty($_POST["phone"])) {
                $phoneErr = "a Phone Number is required";
            } else if (!$this->validate_phone_number($phone)) {
            $phoneErr = "Invalid phone format";
            }
            if (empty($_POST["city"])) {
                $cityErr = "City  is required";
            }
            if (empty($_POST["password"])) {
                $passwordErr = "A password is required";
            }}
        else{
           $users->create($name,$email,$password,$phone,$city);


        }}
            //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view

        require 'View/signe.php';
    }

}