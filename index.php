<?php
require_once('database.php');
require_once('users_db.php');
require_once('user.php');

$users = UsersDB::getUsers();

?>

<html>

<body>
<table class="user-table">
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
