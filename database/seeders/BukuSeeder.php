<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'judul'=>'Malioboro at Midnight',
                'penulis'=>'Skysphire',
                'penerbit'=>'Bukune',
                'tahunterbit'=>'2023'
            ]
        ];

        foreach($users as $user){
            Buku::create($user);
        }
    }
}
