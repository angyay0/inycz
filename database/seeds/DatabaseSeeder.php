<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        /*factory(YCZ\User::class, 50)->create()->each(function($u) {
          $u->posts()->save(factory(YCZ\User::class)->make());
        });

        factory(YCZ\Type::class, 50)->create()->each(function($u) {
          $u->posts()->save(factory(YCZ\Type::class)->make());
        });*/

        /*factory(YCZ\Operation::class, 50)->create()->each(function($u) {
          $u->posts()->save(factory(YCZ\Operation::class)->make());
        });*/

        factory(YCZ\Property::class, 50)->create()->each(function($u) {
          $u->posts()->save(factory(YCZ\Property::class)->make());
        });
        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
