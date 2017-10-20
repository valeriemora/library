<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $Categories =[
               ['name'=>'Mystery', 'description'=>'Anything that is kept secret or remains unexplained or unknown.', 'created_at'=>date('Y-m-d 11:00:00'), 'updated_at'=>date('Y-m-d 11:00:00')],
               ['name'=>'Drama', 'description'=>'Art dealing with the writing and production of plays.', 'created_at'=>date('Y-m-d 11:00:00'), 'updated_at'=>date('Y-m-d 11:00:00')],
               ['name'=>'Chick lit', 'description'=>'Literature that appeals especially to women, usually having a romantic or sentimental theme.',  'created_at'=>date('Y-m-d 11:00:00'), 'updated_at'=>date('Y-m-d 11:00:00')],
              ];


      foreach ($Categories as $category) {

          DB::table('salas')
              ->insert([
                  $category
              ]);

      }

    }
}
