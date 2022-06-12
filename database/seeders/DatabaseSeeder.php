<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run()
    {
        
        
        User::create([
            'nrk' => 'NRA/004/LPM_FALSA/I/20',
            'name' => 'Nurul Fajria',
            'username' => 'fajria',
            'email' => 'nurul.fajria@students.utdi.ac.id',
            'password' => bcrypt('12345'),
            'hak_akses' => 'pimpinan'
        ]);

        User::create([
            'nrk' => 'NRA/003/LPM_FALSA/I/20',
            'name' => 'Annisa Salsabila',
            'username' => 'annisasal', 
            'email' => 'annisa.salsabila@students.utdi.ac.id',
            'password' => bcrypt('12345'),
            'hak_akses' => 'reporter'
        ]);

        Category::create([
            'name' => 'Sospol', 
            'slug' => 'sospol'
        ]);

        Category::create([
            'name' => 'Sastra',
            'slug' => 'sastra'
        ]);

        Category::create([
            'name' => 'Iptek',
            'slug' => 'iptek'
        ]);

        

    }
}