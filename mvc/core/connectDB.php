<?php 
class connectDB{

    public  $connect;
    protected $servername = "localhost";
    protected $dbname = "htl";
    protected  $username = "root";
    protected $password = "";

    // contructor 
    function __construct()
    {
         // create connecting 
         $connect = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
         // check connection
         if($connect->connect_error){
             die("không thể kết nối".$connect->connect_error);
             echo "loi ";
         }else{
          
             $this->connect = $connect;
             mysqli_select_db($this->connect, $this->dbname);
             mysqli_query($this->connect , "SET NAMES UTF8");
         }
    }
}
?>