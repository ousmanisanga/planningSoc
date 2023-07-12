<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateSupAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'nom' => 'Sanga',
            'prenom' => 'Ousmani',
            'email' => 'sanga@gmail.com',
            'password' => bcrypt('password'),
            'role' => 0,
            'telephone' => '0544347807',
            'nomUtilisateur' => 'SO2023'

        ]);
    }
}
