<?php

class Register_model extends CI_model
{
    public function tambahData($data)
	{
		//use query builder to insert $data to table "mahasiswa"
		$this->db->insert('kymtabel', $data);
    }
}