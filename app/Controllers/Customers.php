<?php

namespace App\Controllers;

class Customers extends BaseController
{
    /**
     * Customer Accounts page ("/customers")
     * Static PHP array acting as a temporary data source (no DB yet).
     */
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email'     => 'maria.santos@example.com',
                'phone'     => '0917-123-4567',
            ],
            [
                'full_name' => 'Juan Dela Cruz',
                'email'     => 'juan.delacruz@example.com',
                'phone'     => '0918-234-5678',
            ],
            [
                'full_name' => 'Angela Reyes',
                'email'     => 'angela.reyes@example.com',
                'phone'     => '0919-345-6789',
            ],
            [
                'full_name' => 'Mark Villanueva',
                'email'     => 'mark.villanueva@example.com',
                'phone'     => '0920-456-7890',
            ],
            [
                'full_name' => 'Katrina Bautista',
                'email'     => 'katrina.bautista@example.com',
                'phone'     => '0921-567-8901',
            ],
            [
                'full_name' => 'Ramon Tan',
                'email'     => 'ramon.tan@example.com',
                'phone'     => '0922-678-9012',
            ],
        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}
