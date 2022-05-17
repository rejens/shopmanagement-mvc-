<?php

class User extends Database
{
    public $result;
    public $id;
    public $company;
    public $password;

    //gets the login information of the user
    public function getUserInfo()
    {
        $this->id = $_POST['id'];
        $this->company = $_POST['company'];
        $this->password = $_POST['password'];
        $sql = "select * from user WHERE id='$this->id' and company='$this->company'";
        return $this->query($sql);
    }

    //registers the new user
    public function setUserInfo($name, $company, $password)
    {
        $sql = "insert into user (name,company, password) values ('$name','$company','$password') ";
        $this->query($sql);
        $result = $this->getUserId($name, $company);
        $result = $result->fetch_assoc();
        return $result;
    }

    //check for existing user
    public function checkUserInfo()
    {
        $this->company = $_POST['company'];
        $sql = "select * from user where company='$this->company'";
        return $this->query($sql);
    }

    //gets the id of the newly signed up user
    public function getUserId($name, $company)
    {
        $sql = "select id from user where name='$name' and company='$company'";
        $result = $this->query($sql);
        return $result;
?>
        <script>
            alert(<?php print_r($result) ?>)
        </script>
<?php
    }
}
