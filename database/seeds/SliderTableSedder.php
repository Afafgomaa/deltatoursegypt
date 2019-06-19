<?php

use Illuminate\Database\Seeder;

class SliderTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\slider::create(['slider_1' => asset('images/slider_bg_1.jpg'),
         'title_1' => 'Egypt HOLIDAYS',
         'description_1' => 'all inclusive holidays to egypt on a budget price.',
          'slider_2' => asset('images/slider_bg_2.jpg'),
          'title_2' => 'Nile Cruise Holidays ',
          'description_2' => 'Discover the Mystery of',
           'slider_3' => asset('images/slider_bg_3.jpg'),
           'title_3' => 'Red Sea Holidays',
           'description_3' => 'Combine your Visit to egypt with a Relaxing stay on the red sea Shore'
           ]);
    }
}
