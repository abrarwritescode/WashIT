<?php
include "server.php";
//include "dummy.php"
//include "index.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

<div class="right">
    <?php
    $sql = "SELECT firstName FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result = mysqli_query($db, $sql);
    $row = $result->fetch_assoc();
            
          echo "Username: " . $row["firstName"]. "<br>";

    $sql1 = "SELECT mobileNo FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result1 = mysqli_query($db, $sql1);
    $row1 = $result1->fetch_assoc();

    echo "MobileNo.: " . $row1["mobileNo"]. "<br>";

    $sql2 = "SELECT email FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result2 = mysqli_query($db, $sql2);
    $row2 = $result2->fetch_assoc();

    echo "Email: " . $row2["email"]. "<br>";

    $sql3 = "SELECT SID FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result3 = mysqli_query($db, $sql3);
    $row3 = $result3->fetch_assoc();

    echo "Student ID: " . $row3["SID"]. "<br>";

    $sql4 = "SELECT memberID FROM member WHERE member.firstName = '$_SESSION[firstName]'";
    $result4 = mysqli_query($db, $sql4);
    $row4 = $result4->fetch_assoc();

    echo "Member ID: " . $row4["memberID"]. "<br>";

      $db->close();
      ?>
      <a href="index.php" style="color: blue;">Go back</a>
        </div>
</body>
</html>