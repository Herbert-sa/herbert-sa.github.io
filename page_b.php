<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My HTML Page</title>
</head>
<body>
  <h5><?php echo $username; ?></h5>
  <h1>Page B</h1>
  <a href="page_a.php">Page A</a><br>
  <a href="page_a.php?logout=1">Logout</a>
<?php
?>
</body>
</html>
