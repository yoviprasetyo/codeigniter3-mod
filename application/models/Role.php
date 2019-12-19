<?php

class Role extends CI_Model
{
    protected $table = 'roles';

    public function __construct()
    {
        parent::__construct();
    }

    public function users()
    {
        return $this->hasMany('User', 'role_id');
    }
}