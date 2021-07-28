<?php

class User extends Main{
  //changing echo array values

  public $id;
  public $username;
  public $firstname;
  public $lastname;
  public $password;

  public static function found_user($table,$fields){

    $array = self::query("SELECT * FROM $table WHERE $fields");
    
    return array_shift($array);
  }
  //this is for a universal create method *start
}
?>