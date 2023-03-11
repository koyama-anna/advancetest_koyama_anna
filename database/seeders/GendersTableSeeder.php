<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'sex' => '男性'
        ];
        Gender::create($param);

        $param = [
            'sex' => '女性'
        ];
        Gender::create($param);
    }
}
