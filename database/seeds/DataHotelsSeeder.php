<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
              'starts' => '3',
              'price' => '1596',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Petit Palace San Bernardo',
              'starts' => '4',
              'price' => '2145',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Nuevo Boston',
              'starts' => '2',
              'price' => '861',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Intercontinetal',
              'starts' => '2',
              'price' => '790',
              'created_at' => date('Y-m-d H:i:s'),
              'updated_at' => date('Y-m-d H:i:s'),
          ],
          [
              'name' => 'Hotel Hard Rock Cafe Argentina',
              'starts' => '5',
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
