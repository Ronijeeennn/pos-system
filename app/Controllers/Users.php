<?php

namespace App\Controllers;

class Users extends BaseController
{
    /**
     * User Accounts page ("/users")
     * Static PHP array acting as a temporary data source (no DB yet).
     */
    public function index()
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Patricia Gomez',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Jerome Aquino',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Liza Mendoza',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'stockclerk01',
                'full_name' => 'Noel Fernandez',
                'role'      => 'Inventory Clerk',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Cristina Ramos',
                'role'      => 'Store Manager',
            ],
            [
                'username'  => 'super01',
                'full_name' => 'Vincent Cruz',
                'role'      => 'Supervisor',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}
