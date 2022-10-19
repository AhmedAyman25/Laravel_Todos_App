<?php

namespace Database\Seeders;

use App\Models\todos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        todos::Factory()->times(count:10)->create();
    }
}
