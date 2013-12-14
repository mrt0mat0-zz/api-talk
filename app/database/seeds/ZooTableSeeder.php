<?php

class ZooTableSeeder extends Seeder {

    public function run()
    {
        DB::table('zoos')->delete();

        Zoo::create(array(
            'name' => 'Chicago Zoo',
            'description' => 'A really great zoo to visit with family!'
        ));

        Zoo::create(array(
            'name' => 'New York Zoo',
            'description' => 'The best zoo in New York'
        ));

        Zoo::create(array(
            'name' => 'L.A. Zoo',
            'description' => 'Really hot but great dinosaurs!'
        ));
    }

}