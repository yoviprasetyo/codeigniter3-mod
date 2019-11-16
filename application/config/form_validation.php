<?php

$config     = [
    // Register of Registrant validation
    'registrant.register' => [
        'email' => [
            'field' => 'email', 'label' => 'Email', 'rules' => 'required|valid_email|is_unique[registrants.email]'
        ],
        'phone' => [
            'field' => 'phone', 'label' => 'No. HP', 'rules' => 'required|is_unique[registrants.phone]'
        ],
        'name' => [
            'field' => 'name', 'label' => 'Nama Lengkap', 'rules' => 'required'
        ],
        'department_id' => [
            'field' => 'department_id', 'label' => 'Jurusan', 'rules' => 'required'
        ]
    ],
    // User Login Form Validation
    'user.login' => [
        'username' => [
            'field' => 'username', 'label' => 'Username', 'rules' => 'required'
        ],
        'password' => [
            'field' => 'password', 'label' => 'Password', 'rules' => 'required'
        ],
    ],
    'department.add' => [
        'name' => [
            'field' => 'name', 'label' => 'Name', 'rules' => 'required',
        ],
        'slug' => [
            'field' => 'slug', 'label' => 'Slug', 'rules' => 'required',
        ]
    ],
    'gallery.add' => [
        'title' => [
            'field' => 'title', 'label' => 'Judul', 'rules' => 'required'
        ]
    ]
];