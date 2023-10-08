<?php
class Login_m extends CI_Model
{
    private $ci;
    private $error = array();
    function validasi($username, $password)
    // Build a query to retrieve the user's details // based on the received NIK and password
    {

        $this->db->from('data_admin');
        $this->db->where('username',$username);
        $this->db->where('password',md5($password));
        $login = $this->db->get()->result();
        // The results of the query are stored in $login.
        if (is_array($login) && count($login) == 1) {
            // Set the users details into the $details property of this class
            $this->details = $login[0];
            return true;
        }
        $this->error = array('login' => 'Login Failed');
        return false;
    }
    function getSession($username, $password)
    {
        $password = md5($password);
        $query = $this->db->query("select * from data_admin where username='$username' and password='$password'");
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        if (!isset($array)) {
            $array = '';
        }
        $query->free_result();
        return $array;
    }
    function getUserName($username)
    {
        $query = $this->db->query("select username from data_admin where username='$username'");
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        if (!isset($array)) {
            $array = '';
        }
        $query->free_result();
        return $array;
    }
}
