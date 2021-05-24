<?php
function OpenCon()
{
    $dbhost = 'localhost';
    $dbuser = 'mojaopt_moptic';
    $dbpass = 'mP9!1&plTK$sE%aB8DdM';
    $db = 'mojaopt_vpnarudzbenica';
    $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
    if (!$con) {
        die(header("Location:../vpnarudzbenica/login.php?msg=2"));
        exit;
    }
    return $con;
}
function CloseCon($con)
{
    $con->close();
}
