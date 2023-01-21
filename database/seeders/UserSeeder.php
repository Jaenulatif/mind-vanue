<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'admin',
                'password' => bcrypt('Admin_123'),
                'firstname' => 'Admin',
                'lastname' => '',
                'email' => 'admin@gmail.com',
                'picture' => 'default.png',
                'idnumber' => '1',
            ],
            [
                'username' => 'pakramli',
                'password' => bcrypt('Dosen_123'),
                'firstname' => 'IF',
                'lastname' => 'Pak Ramli',
                'email' => 'pakramli@gmail.com',
                'picture' => 'default.png',
                'idnumber' => '2',
            ],
            [
                'username' => 'busum',
                'password' => bcrypt('Dosen_123'),
                'firstname' => 'IF',
                'lastname' => 'Ibu Sumiarti',
                'email' => 'busum@gmail.com',
                'picture' => 'default.png',
                'idnumber' => '2',
            ],
            [
                'username' => 'faiz',
                'password' => bcrypt('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Muhammad Faiz Aulia',
                'email' => 'muhammadfaizauli88@gmail.com',
                'picture' => 'faiz.png',
                'idnumber' => '3',
            ],
            [
                'username' => 'gian',
                'password' => bcrypt('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Gian Kahria',
                'email' => 'giankahria22@gmail.com',
                'picture' => 'gian.png',
                'idnumber' => '3',
            ],
            [
                'username' => 'danang',
                'password' => bcrypt('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Danang Setiawan',
                'email' => 'danset31@gmail.com',
                'picture' => 'danang.png',
                'idnumber' => '3',
            ],
            [
                'username' => 'latif',
                'password' => bcrypt('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Jaenulatif Pudin',
                'email' => 'jaenulatif.pudin@gmail.com',
                'picture' => 'latif.png',
                'idnumber' => '3',
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
        //
    }
}
