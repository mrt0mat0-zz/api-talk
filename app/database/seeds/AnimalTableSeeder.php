<?php

class AnimalTableSeeder extends Seeder {

    public function run()
    {
        DB::table('animals')->delete();

        Animal::create(array(
            'zoo_id' => '1',
            'animal_type_id' => '1',
            'name'   => 'Giraffe',
            'description'   => 'The longest neck around!'
        ));

        Animal::create(array(
            'zoo_id' => '2',
            'animal_type_id' => '1',
            'name'   => 'Lion',
            'description'   => 'King of the zoo'
        ));

        Animal::create(array(
            'zoo_id' => '2',
            'animal_type_id' => '2',
            'name'   => 'Iguana',
            'description'   => 'I have run out of things to say'
        ));
    }

}