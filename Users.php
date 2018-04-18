<?php

class Users {

    private static $id;
    private static $email;
    private static $fname;
    private static $lname;
    private static $phone;
    private static $birthday;
    private static $gender;
    private static $password;

    public function __construct($id, $em, $fn, $ln, $ph, $bd, $g, $pass) {
        self::$id = $id;
        self::$email = $em;
        self::$fname = $fn;
        self::$lname = $ln;
        self::$phone = $ph;
        self::$birthday = $bd;
        self::$gender = $g;
        self::$password = $pass;
    }

    public function getId() {

        return self::$id;
    }


    public function setId($id)
    {
        self::$id = $id;
    }

    //email
    public function getEmail() {

        return self::$email;
    }


    public function setEmail($email)
    {
        self::$email = $email;
    }

    public function getFirstName() {

        return self::$fname;
    }


    public function setFirstName($fn)
    {
        self::$id = $fn;
    }

    public function getLastName() {

        return self::$lname;
    }


    public function setLastName($ln)
    {
        self::$lname = $ln;
    }

    public function getPhone() {

        return self::$phone;
    }


    public function setPhone($p)
    {
        self::$phone = $p;
    }

    public function getBirthday() {

        return self::$birthday;
    }


    public function setBirthday($bd)
    {
        self::$birthday = $bd;
    }

    public function getGender() {

        return self::$gender;
    }


    public function setGender($gen)
    {
        self::$gender = $gen;
    }

    public function getPassword() {

        return self::$password;
    }


    public function setPassword($pass)
    {
        self::$password = $pass;
    }


    public function printTable() {

        $html = '<table border="1">
                <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Birthday</th>
                </tr>
                <tr>
                    <td><?php echo getID(); ?></td>
                    <td><?php echo getFirstName(); ?></td>
                    <td><?php echo getLastName(); ?></td>
                    <td><?php echo getPhone(); ?></td>
                    <td><?php echo getEmail(); ?></td>
                    <td><?php echo getGender(); ?></td>
                    <td><?php echo getBirthday(); ?></td>
                </tr>
                ';
        return $html;
    }



} //end class

?>