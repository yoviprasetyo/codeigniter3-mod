<?php

class User extends CI_Model
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function authenticate($payload)
    {
        $query = $this->db->get_where($this->table, ['username' => $payload['username']]);
        if( count($result = $query->result()) AND password_verify($payload['password'], $result[0]->password) ) {
            return $result[0];
        }
        return false;
    }

    public function role()
    {
        return $this->belongsTo('Role', 'role_id');
    }
}