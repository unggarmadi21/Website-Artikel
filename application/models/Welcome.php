<?php
class Welcome extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getDataArtikel()
    {
        $query = $this->db->query("select * from data_artikel");
        foreach ($query->result_array() as $row) {$array[] = $row;}
        if (!isset($array)) { $array='';}
        $query->free_result();
        return $array;
    }
}
?>
