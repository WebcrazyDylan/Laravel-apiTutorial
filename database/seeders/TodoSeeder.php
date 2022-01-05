<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 할일 30개 만들어허 넣기
        \App\Models\Todo::factory(30)->create();
        
        //factory(\App\Models\Todo::class, 30)->create();

    }
}
