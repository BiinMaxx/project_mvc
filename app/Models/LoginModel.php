<?php

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function login($tableAdmin,$username,$password)
    {
        $sql = "SELECT  * FROM $tableAdmin where user=? and pass=? ";
        return $this->db->affectedRows($sql,$username,$password);
    }
    public function getLogin($tableAdmin,$username,$password)
    {
        $sql = "SELECT  * FROM $tableAdmin where user=? and pass=? ";
        return $this->db->selectUser($sql,$username,$password);
    }


}

?>