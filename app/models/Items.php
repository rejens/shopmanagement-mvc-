<?php

class Items extends Database
{
    protected $result;

    public function dashboard($func)
    {
        echo $func;
        $charts = new Items();
        $user_id = $_SESSION['user']['id'];
        $this->result = $charts->$func($user_id);

        return $this->result;
    }

    public function pl()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select * from pl where user_id='$user_id'";
        $this->result = $this->query($sql);
        return $this->result;
    }

    public function inventory()
    {
        $user_id = $_SESSION['user']['id'];
        $name = $_SESSION['user']['name'];
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
        $sql = "select datee,sum(salesAmt) as 'group' from pl where user_id='$user_id' GROUP by datee order by datee desc";
        return $this->query($sql);
    }
}
