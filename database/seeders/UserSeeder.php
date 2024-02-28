<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username'=>'admin',
                'password'=>Hash::make('rahasia'),
                'email'=>'admin1234@gmail.com',
                'namalengkap'=>'adminn',
                'alamat'=>'depanrumah'
            ]
        ];

        foreach($users  as $user){
            User::create($user);
        }
    }
}
