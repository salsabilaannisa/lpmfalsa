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
        
        // User::create([
        //     // 'nrk' => 'NRA/003/LPM_FALSA/I/20',
        //     'name' => 'Annisa Salsabila',
        //     'username' => 'annisasal', 
        //     'email' => 'salsabilaannisa09@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Adinda Daffa',
        //     'email' => 'adindadaffa@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

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

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama', 
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse', 
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse odit ipsa, vitae soluta? Earum quod corporis voluptatem repellendus quidem hic aliquam adipisci. Natus corrupti, soluta voluptatem laudantium cum quam sed quis quae. Doloremque amet quibusdam nulla quis magnam tempore totam, hic consequuntur similique provident quae incidunt, vero soluta ipsa! Aspernatur soluta, odit architecto, sunt fugit laboriosam distinctio, assumenda exercitationem pariatur nisi dolorem impedit. Illo et sequi beatae excepturi dolor quasi in voluptatum debitis quas repellendus blanditiis corporis illum consequuntur veritatis exercitationem ut dicta perspiciatis temporibus tempora, ipsam obcaecati maiores!',
        //     'category_id' => 1, 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua', 
        //     'slug' => 'judul-kedua', 
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse', 
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse odit ipsa, vitae soluta? Earum quod corporis voluptatem repellendus quidem hic aliquam adipisci. Natus corrupti, soluta voluptatem laudantium cum quam sed quis quae. Doloremque amet quibusdam nulla quis magnam tempore totam, hic consequuntur similique provident quae incidunt, vero soluta ipsa! Aspernatur soluta, odit architecto, sunt fugit laboriosam distinctio, assumenda exercitationem pariatur nisi dolorem impedit. Illo et sequi beatae excepturi dolor quasi in voluptatum debitis quas repellendus blanditiis corporis illum consequuntur veritatis exercitationem ut dicta perspiciatis temporibus tempora, ipsam obcaecati maiores!', 
        //     'category_id' => 1, 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga', 
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse', 
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse odit ipsa, vitae soluta? Earum quod corporis voluptatem repellendus quidem hic aliquam adipisci. Natus corrupti, soluta voluptatem laudantium cum quam sed quis quae. Doloremque amet quibusdam nulla quis magnam tempore totam, hic consequuntur similique provident quae incidunt, vero soluta ipsa! Aspernatur soluta, odit architecto, sunt fugit laboriosam distinctio, assumenda exercitationem pariatur nisi dolorem impedit. Illo et sequi beatae excepturi dolor quasi in voluptatum debitis quas repellendus blanditiis corporis illum consequuntur veritatis exercitationem ut dicta perspiciatis temporibus tempora, ipsam obcaecati maiores!', 
        //     'category_id' => 2, 
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat', 
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse', 
        //     'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta nobis distinctio a numquam, doloremque tenetur ad error aliquid obcaecati esse odit ipsa, vitae soluta? Earum quod corporis voluptatem repellendus quidem hic aliquam adipisci. Natus corrupti, soluta voluptatem laudantium cum quam sed quis quae. Doloremque amet quibusdam nulla quis magnam tempore totam, hic consequuntur similique provident quae incidunt, vero soluta ipsa! Aspernatur soluta, odit architecto, sunt fugit laboriosam distinctio, assumenda exercitationem pariatur nisi dolorem impedit. Illo et sequi beatae excepturi dolor quasi in voluptatum debitis quas repellendus blanditiis corporis illum consequuntur veritatis exercitationem ut dicta perspiciatis temporibus tempora, ipsam obcaecati maiores!', 
        //     'category_id' => 2, 
        //     'user_id' => 2
        // ]);

    }
}