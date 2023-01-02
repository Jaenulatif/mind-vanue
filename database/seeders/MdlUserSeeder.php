<?php

namespace Database\Seeders;

use App\Models\MdlUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MdlUserSeeder extends Seeder
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
                'password' => md5('Admin_123'),
                'firstname' => 'Admin',
                'lastname' => '',
                'email' => 'admin@gmail.com',
                'picture' => 'profil01.png',
                'idnumber' => '1',
            ],
            [
                'username' => 'pakramli',
                'password' => md5('Dosen_123'),
                'firstname' => 'IF',
                'lastname' => 'Pak Ramli',
                'email' => 'pakramli@gmail.com',
                'picture' => 'profil02.png',
                'idnumber' => '2',
            ],
            [
                'username' => 'buindrati',
                'password' => md5('Dosen_123'),
                'firstname' => 'IF',
                'lastname' => 'Bu Indrati',
                'email' => 'buindrati@gmail.com',
                'picture' => 'profil03.png',
                'idnumber' => '2',
            ],
            [
                'username' => 'faiz',
                'password' => md5('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Muhammad Faiz Aulia',
                'email' => 'muhammadfaizauli88@gmail.com',
                'picture' => 'profil04.png',
                'idnumber' => '3',
            ],
            [
                'username' => 'gian',
                'password' => md5('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Gian Kahria',
                'email' => 'giankahria22@gmail.com',
                'picture' => 'profil05.png',
                'idnumber' => '3',
            ],
            [
                'username' => 'danang',
                'password' => md5('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Danang Setiawan',
                'email' => 'danset31@gmail.com',
                'picture' => 'profil06.png',
                'idnumber' => '3',
            ],
            [
                'username' => 'latif',
                'password' => md5('Bch_2018'),
                'firstname' => '2018',
                'lastname' => 'Jaenulatif Pudin',
                'email' => 'jaenulatif.pudin@gmail.com',
                'picture' => 'profil07.png',
                'idnumber' => '3',
            ],
        ];

        foreach ($users as $key => $value) {
            MdlUser::create($value);
        }
    }
}
