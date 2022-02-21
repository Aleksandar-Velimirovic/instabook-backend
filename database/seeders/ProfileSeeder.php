<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'image' => 'http://localhost:8000/storage/images/Ufr5plLnMxtuRwWOpIbOCjGFL9EjnaY3BPpXJymG.jpg',
                'followers' => 100,
                'following' => 50,
                'username' => 'Alfred Gill',
            ],
            [
                'id' => 11,
                'user_id' => 11,
                'image' => 'http://localhost:8000/storage/images/MiViyaeEi1KDxXiKlf6c3mlYPvFdNrzD1G77kfrS.jpg',
                'followers' => 90,
                'following' => 15,
                'username' => 'Brenna Quinn',
            ],
            [
                'id' => 21,
                'user_id' => 21,
                'image' => 'http://localhost:8000/storage/images/e3E6ps6AuHVElRPPS1KLua4O7VD6IxxWmUHQEWZ6.jpg',
                'followers' => 80,
                'following' => 15,
                'username' => 'Mackenzie Cummings',
            ],
            [
                'id' => 31,
                'user_id' => 31,
                'image' => 'http://localhost:8000/storage/images/D28RLaboBlEs9LgboTGXp4XFPSBRJIT4etBO4VbY.jpg',
                'followers' => 70,
                'following' => 15,
                'username' => 'Juan Molina',
            ],
            [
                'id' => 41,
                'user_id' => 41,
                'image' => 'http://localhost:8000/storage/images/TC7pZu3xqtgmWDqCoyUwejG18Dx4EADq4W6jcDpz.jpg',
                'followers' => 60,
                'following' => 15,
                'username' => 'Lisa Murphy',
            ],
            [
                'id' => 51,
                'user_id' => 51,
                'image' => 'http://localhost:8000/storage/images/tT36PdKTKaokW8iipEdajCY6hO1MtQniPnE0Shdu.jpg',
                'followers' => 50,
                'following' => 15,
                'username' => 'Kali Jacobs',
            ],
            [
                'id' => 61,
                'user_id' => 61,
                'image' => 'http://localhost:8000/storage/images/Rg1e0sNJp39WXbiKRxaXcXg5hIDrQQgECkCMVr39.jpg',
                'followers' => 40,
                'following' => 15,
                'username' => 'Jack Phillips',
            ],
            [
                'id' => 71,
                'user_id' => 71,
                'image' => 'http://localhost:8000/storage/images/t3lCynOwLScDTqTpaQm7FG1RniTJnnG3DKJ8uBZF.jpg',
                'followers' => 30,
                'following' => 15,
                'username' => 'Nicolas Mcguire',
            ],
            [
                'id' => 81,
                'user_id' => 81,
                'image' => 'http://localhost:8000/storage/images/JPFdxv7MwC1KYvYGz8sRHkUvuA0cLLMOUz30LOmO.jpg',
                'followers' => 20,
                'following' => 15,
                'username' => 'Hugo Clark',
            ],
            [
                'id' => 91,
                'user_id' => 91,
                'image' => 'http://localhost:8000/storage/images/QMMXjnkvf8W60Y5i1IcOUriPoGnMgZyKB5Ve7QI5.jpg',
                'followers' => 10,
                'following' => 15,
                'username' => 'Geoffrey Morris',
            ],
            [
                'id' => 101,
                'user_id' => 101,
                'image' => 'http://localhost:8000/storage/images/TQ4bcYWKz8A9iiRKMil12JWPZjN9UHsb6wR2c7kC.jpg',
                'followers' => 10,
                'following' => 15,
                'username' => 'Priscilla Barber',
            ],
        ]);
    }
}
