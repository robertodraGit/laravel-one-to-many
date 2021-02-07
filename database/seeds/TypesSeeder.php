<?php

use Illuminate\Database\Seeder;
use App\Type;
use App\Task;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Type::class, 30) -> create()
        -> each(function($type) {
            $tasks = Task::inRandomOrder()
            -> limit(1, 5) -> get();
            $type -> tasks() -> attach($tasks);
        });
    }
}
