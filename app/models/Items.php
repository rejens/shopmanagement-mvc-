<?php

class Items extends Database
{
    protected $result;
    public $user_id;

    public function __construct()
    {
    }

    public function dashboard($func)
    {
        $charts = new Items();
        $user_id = $_SESSION['user']['id'];
        $this->result = $charts->$func($user_id);
        return $this->result;
    }

    public function sellingTransaction()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from selling_transaction where user_id='$user_id' order by datee";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function buyingTransaction()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from buying_transaction where user_id='$user_id' order by datee";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function inventory()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from items where user_id='$user_id'";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function pieChart($user_id)
    {
        $sql = "select name, quantity, cp from items where user_id='$user_id'";
        return $this->query($sql);
    }

    public function lineChart($user_id)
    {
        $sql = "select datee,sum(salesAmt) as 'group' from selling_transaction where user_id='$user_id' GROUP by datee order by datee ";
        return $this->query($sql);
    }

    //checks whether the item exists in the inventory or not
    public function addModalCheck($name)
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select name from items where user_id='$user_id' and name='$name'";
        return $this->query($sql);
    }

    public function addModal($name, $cp, $sp, $quantity)
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "insert into items (name,cp,sp,quantity,user_id) values ('$name','$cp','$sp','$quantity','$user_id')";
        $this->query($sql);
    }
}
