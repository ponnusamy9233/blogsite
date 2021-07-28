<?php

class Database{
public $conn;
 
public function __construct(){
  $this->connect_db();
}
//normalconnection  method
public function connect_db(){
   
  // $this->conn = mysqli_connect("localhost" , "root" , "" , "gallery");
  //change OOP connection
  $this->conn = new mysqli("localhost" , "root" , "mpsamy9233@A" , "cmc");
  if($this->conn->errno){
    echo "Connection failed".$this->conn->error;
   }
 }
  //this is for a query compression method
public function query($sql){
  $users_result = $this->conn->query($sql);
  $this->confirm_query($users_result);//this is called confirm query
  return $users_result;
}
//this is cheking for confirmation
public function confirm_query($users_result){
  if(!$users_result){
    echo "Query failed".$this->conn->error;
  }
}
}

$database = new Database();

?>