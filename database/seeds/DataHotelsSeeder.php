<?php

use Illuminate\Database\Seeder;

class DataHotelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
      DB::table('hoteles')->insert([
          [
              'name' => 'Hotel Emperador',
              'stars' => '3',
              'price' => '1596',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Petit Palace San Bernardo',
              'stars' => '4',
              'price' => '2145',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Nuevo Boston',
              'stars' => '2',
              'price' => '861',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Intercontinetal',
              'stars' => '2',
              'price' => '790',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Hard Rock Cafe Argentina',
              'stars' => '5',
              'price' => '1500',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Meru Plaza',
              'stars' => '4',
              'price' => '1060',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ]
      ]);
    }
}
