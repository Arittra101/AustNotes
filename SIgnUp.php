<?php

include "Connection.php";
include "class\user.php";

?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>

    <div class="container">
        <div class="wrapper">
            <div class="title"><span>SignUp Form</span></div>
            <form method="post" enctype="multipart/form-data">
                
                <div class="row">
                <i class="fa fa-envelope"></i>
                    <input name ="gmail" type="text" placeholder="Gmail" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input name ="pass" type="password" placeholder="Password" required>
                </div>
                
                <div class="row button">
                    <input type="submit" value="SignUp">
                </div>
               
            </form>
        </div>
    </div>

    <?php

    $user = new user($_POST["gmail"],$_POST["pass"]);
    $gmail = $_POST["gmail"];
    $pass = $_POST["pass"];

    
    if($user->mail_check()=="true" && $user->pass_check()=="true")
    {
   
        $str = "insert into `stu_info`(`s_gmail`,`s_password`) values('$gmail', '$pass')";
        $cn = mysqli_query($conn, $str);
        
    
    }
  
?>
</body>


</html>