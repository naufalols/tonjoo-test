<?php

namespace Database\Seeders;

use App\Models\ms_category;
use Illuminate\Database\Seeder;

class ms_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Expenses',
            ],
            [
                'name' => 'Incomes',
            ]
        ];

        foreach ($categories as $category) {
            ms_category::create($category);
        }
    }
}
