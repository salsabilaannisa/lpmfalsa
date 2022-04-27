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
            'nrk' => 'NRA/003/LPM_FALSA/I/20',
            'name' => 'Annisa Salsabila',
            'username' => 'annisasal', 
            'email' => 'salsabilaannisa09@gmail.com',
            'password' => bcrypt('12345'),
            'hak_akses' => 'reporter'
        ]);

        User::create([
            'name' => 'Adinda Daffa',
            'username' => 'adinda',
            'email' => 'adindadaffa@gmail.com',
            'password' => bcrypt('12345'),
            'hak_akses' => 'pimpinan'
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