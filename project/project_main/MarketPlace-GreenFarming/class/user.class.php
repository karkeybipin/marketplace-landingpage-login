<?php
// class User
// {
//     public $id, $name, $username, $email, $password, $status, $role, $last_login;

//     public function login()
//     {
//         $conn = mysqli_connect('localhost', 'root', '', 'rysb_db');
//         $encryptedPassword = md5($this->password);
//         $sql = "select * from users where email='$this->email' and password='$encryptedPassword'";
//         $var = $conn->query($sql);
//         if ($var->num_rows > 0) {
//             $data = $var->fetch_object();
//             session_start();
//             $_SESSION['id'] = $data->id;
//             $_SESSION['name'] = $data->name;
//             $_SESSION['username'] = $data->username;
//             $_SESSION['role'] = $data->role;
//             setcookie('username', $data->username, time() + 60 * 60);
//             header('location:dashboard.php');
//         } else {
//             $error = "Invalid Credentials";
//         }
//         // print_r($var);
//     }
// }
class User
{
    public $id, $name, $username, $email, $password, $status, $role, $last_login;
    public function login()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'rysb_db');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $email = mysqli_real_escape_string($conn, $this->email);
        $password = mysqli_real_escape_string($conn, md5($this->password));

        $sql = "SELECT * FROM users WHERE email=? AND password=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $data = $result->fetch_object();
            session_start();
            $_SESSION['id'] = $data->id;
            $_SESSION['name'] = $data->name;
            $_SESSION['username'] = $data->username;
            $_SESSION['role'] = $data->role;
            setcookie('username', $data->username, time() + 60 * 60);
            header('location:dashboard.php');
        } else {
            $error = "Invalid Credentials";
        }
        $stmt->close();
        $conn->close();
    }
}
?>