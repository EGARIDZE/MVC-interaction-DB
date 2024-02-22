<?php

namespace Models;

class UserModel extends Model
{

    public function insert($name, $login)
    {
        return $this->query("INSERT INTO `user` (`name`, `login`) VALUES ('$name', '$login')");
    }

    public function selectLogin($login){
        return $this->query("SELECT * FROM `user` WHERE `login`='$login' ")->fetchColumn();
    }


}