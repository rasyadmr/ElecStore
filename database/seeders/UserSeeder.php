<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'username' => 'johndoe',
                'email' => 'johndoe@example.com',
                'phonenumber' => '1234567890',
                'address' => '123 Main St, Anytown, USA',
                'password' => Hash::make('password'),
                'isSeller' => true,
                'isAdmin' => false,
            ],
            [
                'name' => 'Jane Smith',
                'username' => 'janesmith',
                'email' => 'janesmith@example.com',
                'phonenumber' => '0987654321',
                'address' => '456 Elm St, Othertown, USA',
                'password' => Hash::make('password'),
                'isSeller' => false,
                'isAdmin' => false,
            ],
            [
                'name' => 'Alice Johnson',
                'username' => 'alicej',
                'email' => 'alicej@example.com',
                'phonenumber' => '1122334455',
                'address' => '789 Maple St, Sometown, USA',
                'password' => Hash::make('password'),
                'isSeller' => true,
                'isAdmin' => false,
            ],
            [
                'name' => 'Bob Brown',
                'username' => 'bobb',
                'email' => 'bobb@example.com',
                'phonenumber' => '2233445566',
                'address' => '101 Pine St, Villagetown, USA',
                'password' => Hash::make('password'),
                'isSeller' => false,
                'isAdmin' => false,
            ],
            [
                'name' => 'Charlie Davis',
                'username' => 'charlied',
                'email' => 'charlied@example.com',
                'phonenumber' => '3344556677',
                'address' => '202 Oak St, Smalltown, USA',
                'password' => Hash::make('password'),
                'isSeller' => true,
                'isAdmin' => true,
            ],
            [
                'name' => 'Diana Evans',
                'username' => 'dianae',
                'email' => 'dianae@example.com',
                'phonenumber' => '4455667788',
                'address' => '303 Birch St, Largetown, USA',
                'password' => Hash::make('password'),
                'isSeller' => false,
                'isAdmin' => false,
            ],
            [
                'name' => 'Edward Foster',
                'username' => 'edwardf',
                'email' => 'edwardf@example.com',
                'phonenumber' => '5566778899',
                'address' => '404 Cedar St, Midtown, USA',
                'password' => Hash::make('password'),
                'isSeller' => true,
                'isAdmin' => false,
            ],
            [
                'name' => 'Fiona Green',
                'username' => 'fionag',
                'email' => 'fionag@example.com',
                'phonenumber' => '6677889900',
                'address' => '505 Spruce St, Uppertown, USA',
                'password' => Hash::make('password'),
                'isSeller' => false,
                'isAdmin' => true,
            ],
            [
                'name' => 'George Harris',
                'username' => 'georgeh',
                'email' => 'georgeh@example.com',
                'phonenumber' => '7788990011',
                'address' => '606 Willow St, Newtown, USA',
                'password' => Hash::make('password'),
                'isSeller' => true,
                'isAdmin' => false,
            ],
            [
                'name' => 'Hannah Ingram',
                'username' => 'hannahi',
                'email' => 'hannahi@example.com',
                'phonenumber' => '8899001122',
                'address' => '707 Redwood St, Anothertown, USA',
                'password' => Hash::make('password'),
                'isSeller' => false,
                'isAdmin' => false,
            ]];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
