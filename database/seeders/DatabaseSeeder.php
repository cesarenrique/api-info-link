<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Idioma;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->idiomas();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }

    public function idiomas():void{
        $idiomas=[
            'Español',
            'Ingles',
            'Francés',
            'Árabe',
            'Ruso',
            'Portugués'
        ];

        for($i=0;$i<count($idiomas);$i++){
           $idioma=new Idioma();
           $idioma->name=$idiomas[$i];
           $idioma->save();
        }
    }
}
