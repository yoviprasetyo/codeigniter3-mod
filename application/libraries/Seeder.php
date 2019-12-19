<?php

class Seeder
{

    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
    }
    
    public function run()
    {
        $this->roleSeeder();
    }

    private function roleSeeder()
    {
        $this->ci->load->model('role');

        $roles = [
            'Super Admin',
            'Admin',
            'Office'
        ];

        foreach ($roles as $role) {
            $this->ci->role->create(['name' => $role]);
        }
    }
}