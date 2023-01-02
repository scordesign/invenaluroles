<?php

namespace Database\Seeders;

use App\Models\User;
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
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ])->assignRole('admin');
        
        User::create([
            'name' => 'Lilian Castro',
            'email' => 'lilian.castro@aluicaconstrucciones.com',
            'password' => bcrypt('Lilian2023.')
        ])->assignRole('admin');

        User::create([
            'name' => 'Angelica Palacios',
            'email' => 'angelica.palacios@aluicaconstrucciones.com',
            'password' => bcrypt('Angelica2023.')
        ])->assignRole('admin');

        User::create([
            'name' => 'Lisbeth',
            'email' => 'costos@aluicaconstrucciones.com',
            'password' => bcrypt('Lisbeth2023.')
        ])->assignRole('admin');
        }
}
