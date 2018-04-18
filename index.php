<?php
require_once('Database.php');
require_once('UsersDB.php');
require_once('Users.php');

$users = UsersDB::getUsers();

?>

<html>
<head>
    <title>Week 12</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<table>
    <tr>
        <th>ID</th>
        <th>Email Address</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Birthday</th>
        <th>Gender</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <?php echo $user->printUserRow(); ?>
    <?php endforeach; ?>
</table>
</body>


</html>
