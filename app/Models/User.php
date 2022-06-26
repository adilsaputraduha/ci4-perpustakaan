<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    public function getUser()
    {
        $bulder = $this->db->table('table_user');
        return $bulder->get();
    }
    public function saveUser($data)
    {
        $query = $this->db->table('table_user')->insert($data);
        return $query;
    }
    public function updateUser($data, $id)
    {
        $query = $this->db->table('table_user')->update($data, array('user_id' => $id));
        return $query;
    }
    public function deleteUser($id)
    {
        $query = $this->db->table('table_user')->delete(array('user_id' => $id));
        return $query;
    }
}
