<?php
include "Connection.php";



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
            <div class="title"><span>Login Form</span></div>
            <form method="post" enctype="multipart/form-data">
                
                <div class="row">
                <i class="fa fa-envelope"></i>
                    <input name ="gmail" type="text" placeholder="Gmail" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input name = "pass" type="password" placeholder="Password" required>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input name ="ret" type="password" placeholder=" Retype Password" required>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                    <!-- <button  class="signup-link" name="submit" >Submit</button> -->
                </div>
                
                <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
            </form>
        </div>
    </div>
    <?php

        if(isset($_POST["gmail"]) & isset($_POST["pass"]))
        {
            $query_student = "select * from stu_info where s_gmail = '$_POST[gmail]' and s_password = '$_POST[pass]'";
            $rs_from_query = mysqli_query($conn,$query_student);
            
    
            if($rs_from_query)
            {       echo "D";
                while($row = mysqli_fetch_array($rs_from_query))
                {
                       
                       session_start();
                       session_regenerate_id();
                       $user_session_id = session_id();
                        
                       $query_for_update_sessionId = "update stu_info set Session_id = '". $user_session_id."' where s_id = '$row[s_id]'";
                       mysqli_query($conn,$query_for_update_sessionId);
                       
                       $_SESSION['s_id'] = $row['s_id'];
                       $_SESSION['session_idsession_id'] =$user_session_id;
                  
                       echo $_SESSION['session_idsession_id'];
                       header('location:welcome.php');
                      
                        
    
                }
            }
        }
   
       


    ?>
</body>

</html>
