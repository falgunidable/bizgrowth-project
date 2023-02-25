<!DOCTYPE html>
<html>
<head>
    <title>Welcome to onlinecode</title>
</head>
<body>

<h1>User Dashboard</h1>

<ul>
    <li>ID : <?php echo$_SESSION['id'];  ?></li>
    <li>Name : <?php echo$_SESSION['name'];  ?></li>
    <li>Email : <?php echo$_SESSION['email'];  ?></li>
</ul>

</body>
</html>