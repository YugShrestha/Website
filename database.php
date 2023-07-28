<?php




//require "router.php";









Class Connection
{
    private $server="localhost";
    private $username="root";
    private  $password="";
    private  $db="demo";
    
    
   function connect(){

    $this->server;
    $this->username;
    $this->password;
    $this->db;
 
     
        
        $conn=new mysqli($this->server,
        $this->username,
        $this->password,
        $this->db);
        return $conn;
    }
}
Class Query extends Connection
{
  public function getData($table){
      $sql="select * from  $table ";
      $result=$this->connect()->query($sql);
      if($result->num_rows>0){
          $data=[];
        while($row=$result->fetch_assoc()){
            $data[]=$row;
        }
        return $data;
      }else{
            return 0; 
      }
    }
}

$connection= new Query;
$posts=$connection->getData('post');
foreach($posts as $post){
   echo 
   "<pre>".$post['id']."-".$post['title']."</pre>";
}

