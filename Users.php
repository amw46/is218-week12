<?php

class Users {

    private $id;
    private $email;
    private $fname;
    private $lname;
    private $phone;
    private $birthday;
    private $gender;
    private $password;

    public function __construct($id, $em, $fn, $ln, $ph, $bd, $g, $pass) {
        $this->id = $id;
        $this->email = $em;
        $this->fname = $fn;
        $this->lname = $ln;
        $this->phone = $ph;
        $this->birthday = $bd;
        $this->gender = $g;
        $this->password = $pass;
    }

    public function getId() {

        return $this->id;
    }


    public function setId($id)
    {
        $this->id = $id;
    }

    //email
    public function getEmail() {

        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getFirstName() {

        return $this->fname;
    }


    public function setFirstName($fn)
    {
        $this->id = $fn;
    }

    public function getLastName() {

        return $this->lname;
    }


    public function setLastName($ln)
    {
        $this->lname = $ln;
    }

    public function getPhone() {

        return $this->phone;
    }


    public function setPhone($p)
    {
        $this->phone = $p;
    }

    public function getBirthday() {

        return $this->birthday;
    }


    public function setBirthday($bd)
    {
        $this->birthday = $bd;
    }

    public function getGender() {

        return $this->gender;
    }


    public function setGender($gen)
    {
        $this->gender = $gen;
    }

    public function getPassword() {

        return $this->password;
    }


    public function setPassword($pass)
    {
        $this->password = $pass;
    }


    public function printUserRow() {

        /*
        $html = "<tr>
                    <td><?php echo $this->getID(); ?></td>
                    <td><?php echo $this->getFirstName(); ?></td>
                    <td><?php echo $this->getLastName(); ?></td>
                    <td><?php echo $this->getPhone(); ?></td>
                    <td><?php echo $this->getEmail(); ?></td>
                    <td><?php echo $this->getGender(); ?></td>
                    <td><?php echo $this->getBirthday(); ?></td>
                </tr>";
        return $html;
        */

        echo "<tr>";
        echo "<td><?php echo $this->getID(); ?></td>";
        echo "<td><?php echo $this->getFirstName(); ?></td>";
        echo "<td><?php echo $this->getLastName(); ?></td>";
        echo "<td><?php echo $this->getPhone(); ?></td>";
        echo "<td><?php echo $this->getEmail(); ?></td>";
        echo "<td><?php echo $this->getGender(); ?></td>";
        echo "<td><?php echo $this->getBirthday(); ?></td>";
        echo '<tr>';

    }



} //end class

?>