<?php
session_start();

$jsonString = file_get_contents('venom/noob/here/yesme.json');
$data = json_decode($jsonString);

$real_username = $data->username;
$real_password = $data->password;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == $real_username && $password == $real_password){
        $_SESSION['username'] = $username;
        header('Location:data.php');
    }
    
}
?>

<?php
if(isset($_GET['error'])==true){
echo'<font color=#FF0000"><p align="center">Wrong Username Or Password </p></font>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AIMBOT LOGIN PAGE</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="container">
        <div class="login-box">
            <div class="heading"><h3> WEB PANEL</h3></div>
            <div class="form">
                <form  method="post">
                    <label for="username">Enter Your Username</label>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                    <label for="password">Enter Your Password</label>
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <button>Login</button>
                    <p>Need Help? <a href="https://t.me/aimbotaxee">CONTACT</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>