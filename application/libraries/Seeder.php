<?php

class Seeder
{

    protected $ci;

    public function __construct()
    {
        // Load the CI instance
        $this->ci =& get_instance();
    }
    
    public function run()
    {
        // Simple, just call the method in run method
        // $this->roleSeeder();
    }

    private function roleSeeder()
    {
        // To load the model from CI instance
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