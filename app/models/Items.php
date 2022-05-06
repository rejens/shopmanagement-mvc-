<?php

class Items extends Database
{
    protected $result;

    public function dashboard()
    {
        $user_id = $_SESSION['user']['id'];
        $sql = "select name, quantity, cp from items where user_id='$user_id'";
        $this->result = $this->query($sql);
        if (is_bool($this->result)) {
            echo "data stored successfully";
        } else {
            return $this->result;
        }
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
}
