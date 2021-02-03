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
  public function login($userName,$userEmail,$passwordId){

        $sql = "SELECT * FROM users WHERE name = '$userName' OR email = '$userEmail'";

      $statement = $this->databaseManager->database->prepare($sql);
      $statement->execute();
      if($row = $statement->fetch(PDO::FETCH_ASSOC)){
          $pwdcheck = password_verify($passwordId, $row['password']);
      if($pwdcheck == false){

          echo "User Name or Password not correct";
      }else{
          echo"hello";
       /*session_start();*/
       $_SESSION['name']=$row['name'];
       $_SESSION['userBooks'] = $row['in_bookshelf'];
       $_SESSION['loanedBooks']=$row['loaned_book'];
       $name=$_SESSION['name'];
       echo"hello $name";

      }
  }}
public function test(){
        echo "hi jhhgk";
}

    public function getName() : string
    {
        return $this->name;
    }
}