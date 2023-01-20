<?php

    session_start();
    // echo $_SESSION['session_idsession_id'];
    if(!isset($_SESSION['session_idsession_id']))
    {
        header('location:index.php');
    }
    else echo $_SESSION['session_idsession_id'];

?>

<script>
function check_session()
{

    fetch('check_logIN.php').then(function(response) {
    return response.json();
    }).then(function(responseData){
    if(responseData.output=='Multiple') {
        // console.log(responseData);
        window.location.href = 'logout.php';
        }
    
    });
}


setInterval(function(){
    check_session();
},1000);
</script>