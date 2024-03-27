<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Ubuntu:wght@300&display=swap"
    rel="stylesheet">
</head>
<body>
<header class="header">
        <div class="left" >
            <div><a href="index.php" style="text-decoration: none;">
                <span style="color:#0da8d2 ;">WASH</span><span style="color:rgb(255, 0, 0) ;">.</span><span style="color:rgb(0, 0, 0) ;">IT</span>
            </div></a>
        </div>

        <div class="mid">
            <ul class="navbar">
                <li><a href="home.php" >Home</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="order.php">Order</a></li>
            </ul>

        </div>
        <div class="right">
        <?php  if (isset($_SESSION['firstName'])) : ?>
    	Welcome <strong style="color: green;"><?php echo $_SESSION['firstName']; ?></strong><br>
    	 <a href="landingpage.php? logout='1'" style="color: red;">logout</a>
         <a href="dashboard.php" style="color: blue;">Dashboard</a>
    <?php endif ?>
        </div>
        
    </header>
</body>
</html>