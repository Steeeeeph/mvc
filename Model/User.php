<?php
declare(strict_types=1);

class User
{
    private $name;
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create($name,$email,$password,$phone,$city)
    {
      $sql ="INSERT INTO users (name,email,password,phone_number,city) VALUES ('$name','$email','$password','$phone','$city')";

        $statement = $this->databaseManager->database->prepare($sql);
        $statement->execute();
    }



    public function getName() : string
    {
        return $this->name;
    }
}