<?php
    include "Connection.php";
    session_start();
    $query = "select * from stu_info where s_id = '$_SESSION[s_id]'";

   $rs_from_query =  mysqli_query($conn,$query);

    while($rs = mysqli_fetch_array($rs_from_query))
    {
        if($_SESSION['session_idsession_id']!=$rs['Session_id'])
        {
            $data['output'] = 'Multiple';
        }
        else $data['output'] = 'Single';

    }
    echo json_encode($data);
    // while($qe)


?>