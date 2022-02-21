<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Alfred Gill',
                'email' => 'user1@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 11,
                'name' => 'Brenna Quinn',
                'email' => 'user2@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 21,
                'name' => 'Mackenzie Cummings',
                'email' => 'user3@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 31,
                'name' => 'Juan Molina',
                'email' => 'user11@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 41,
                'name' => 'Lisa Murphy',
                'email' => 'user4@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 51,
                'name' => 'Kali Jacobs',
                'email' => 'user5@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 61,
                'name' => 'Jack Phillips',
                'email' => 'user6@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 71,
                'name' => 'Nicolas Mcguire',
                'email' => 'user7@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 81,
                'name' => 'Hugo Clark',
                'email' => 'user8@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 91,
                'name' => 'Geoffrey Morris',
                'email' => 'user9@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
            [
                'id' => 101,
                'name' => 'Priscilla Barber',
                'email' => 'user10@user.com',
                'password' => bcrypt('Testpassword1'),
            ],
        ]);
    }
}
