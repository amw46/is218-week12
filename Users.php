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

    public function __construct() {
        //self::$id = null;
        //self::$email = null;
        //self::$fname = null;
        //self::$lname = null;
        //self::$phone = null;
        //self::$birthday = null;
        //self::$gender = null;
        //self::$password = null;
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



} //end class

?>