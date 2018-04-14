<?php
$query = 'SELECT * FROM accounts';
$statement = $db->prepare($query);
$statement->execute();
$accts = $statement->fetchAll();
$statement->closeCursor();

require('users.php');
class UsersDB {

    public static function getUsers() {
        foreach ($accts as $acct) :

        endforeach;
    }

} //end class
?>