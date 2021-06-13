<?php

class Dora_model extends CI_Model
{
    public function get_data($table)
    {
        return $this->db->get($table);
    }
    public function get_where($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ambil_id_user($id)
    {
        $hasil = $this->db->where('id_user', $id)->get('tb_user');
        if ($hasil->num_rows() > 0) {
            return $hasil->result_array();
        } else {
            return false;
        }
    }

    public function cek_login()
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
            ->where('username', $username)
            ->where('password', md5($password))
            ->limit(1)
            ->get('tb_user');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    // user
    public function getUser($limit, $start)
    {
        return $this->db->get('tb_user', $limit, $start)->result_array();
    }

    public function hitungDataUser()
    {
        return $this->db->get('tb_user')->num_rows();
    }
}
