<?php
require "database.php";
class User
{
    private $username;
    private $password;
    private $con;

    public function __construct($u, $p)
    {
        $this->username = $u;
        $this->password = $p;
        $db = new Database();
        $this->con = $db->connect();
    }
    public function register_user($name, $username,$password){
        $res = $con->query("INSERT * into users(name, username, password) values($name,$username,$password");
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function verify_user($username,$password)
    {
        $res = $con->query("SELECT * FROM users WHERE username = '$this->username'" . "and password = '$this->password'");
        if ($res->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }
}

?>
<?php
// require "database.php";
// public class User
// {
//     private $username;
//     private $password;
//     private $con;

//     public function __construct($u, $p)
//     {
//         $this->username = $u;
//         $this->password = $p;
//         $db = new Database();
//         $this->con = $db->connect();
//     }
//     public function register_user($name, $username,$password){
//         // Check if the keys exist and the values are not empty
//         if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) && !empty($_POST['password'])) {
//             // Escape user inputs for security
//             $name = mysqli_real_escape_string($this->con, $_POST['name']);
//             $username = mysqli_real_escape_string($this->con, $_POST['username']);
//             $password = mysqli




//         }
//     }
// }
session_start();
require "database.php";

class User
{
    private $username;
    private $password;
    private $con;

    public function __construct($u, $p)
    {
        $this->username = $u;
        $this->password = $p;
        $db = new Database();
        $this->con = $db->connect();
    }

    public function register_user($name, $username, $password)
    {
        $res = $this->con->query("INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')");
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function verify_user($username, $password)
    {
        $res = $this->con->query("SELECT * FROM users WHERE username = '$this->username' AND password = '$this->password'");
        if ($res->num_rows == 1) {
            return true;
        } else {
            return false;
        }
    }
}
