<?php

namespace Database\Seeders;

use App\Models\Komentar;
use App\Models\Menfess;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menfess::create([
            "id" => 2,
            "menfess" => "attention",
        ]);

        Menfess::create([
            "id" => 3,
            "menfess" => "hai semua",
        ]);

        Komentar::create([
            "id" => 10,
            "menfess_id" => 2,
            "komentar" => "yes",
        ]);

        Komentar::create([
            "id" => 11,
            "menfess_id" => 3,
            "komentar" => "hai",
        ]);

        User::create([
            "name" => "Admin 1",
            "username" => "adminsatu",
            "password" => Hash::make("password")
        ]);
    }
}
