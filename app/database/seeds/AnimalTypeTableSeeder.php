<?php

class AnimalTypeTableSeeder extends Seeder {

    public function run()
    {
        DB::table('animal_types')->delete();

        AnimalType::create(array(
            'name'   => 'Mammal',
            'description'   => 'Kings of land'
        ));

        AnimalType::create(array(
            'name'   => 'Reptile',
            'description'   => 'They look slimey'
        ));

        AnimalType::create(array(
            'name'   => 'Bird',
            'description'   => 'Up in the air'
        ));
    }

}