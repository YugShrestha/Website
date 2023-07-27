<?php



require("function.php"); 
//require "router.php";



Class Connection
{
    public $server="localhost";
    public $username="root";
    public $password="";
    public  $db="demo";
    
    
   public function connect(){
        $this->server;
        $this->username;
        $this->password;
        $this->db;
        
        $conn=new mysqli($this->server,$this->username,$this->password,$this->db);
        return $conn;
    }
}
Class Query extends Connection
{
  public function getData(){
      $sql="select * from  post ";
      $result=$this->connect()->query($sql);
      if($result->num_rows>0){
          $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
      }else{
            return 0; 
      }
    }
}


$connection= new Query;
$post=$connection->getData();
dd($post);