<?php
require_once('connect.php');
session_start();
if (isset($_POST['signInSubmit']))
{
    $l_user = trim($_POST['userName']);
    $l_pass = md5(trim($_POST['password']));

    if ($l_user != "" && $l_pass != "")
    {
        $q="SELECT * FROM staff WHERE userStaff='". $l_user. "'" . "AND passStaff='" . $l_pass. "'";
        require_once('connect.php');
        if ($res = $mysqli->query($q))
        {
            if (mysqli_num_rows($res) == 1)
            {
                $row = $res->fetch_array();
                $_SESSION['userId'] = $row['userStaff'];
                $_SESSION['userFirstName'] = $row['firstName'];
                $_SESSION['userLastName'] = $row['lastName'];
                $_SESSION['userStatus'] = $row['status'];
                $_SESSION['staffId'] = $row['staffId'];

                header("Location: management.php");
            }
            if (mysqli_num_rows($res) == 0)
            {
              header("Refresh: 2; url=staffsignin.php");
              echo '<h1 style="text-align: center; font-family: monospace;">INVALID USERNAME OR PASSWORD!!<h1>';
            }
        }
    }
    else{
      header("Refresh: 2; url=staffsignin.php");
      echo '<h1 style="text-align: center; font-family: monospace;">USERNAME OR PASSWORD CANNOT BE BLANK!!<h1>';
    }
}
?>