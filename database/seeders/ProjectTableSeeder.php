<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into projects (image, name, content, url, year) values (?, ?, ?, ?, ?)',
        ['https://www.ybrikman.com/assets/img/projects/gruntwork-logo.png', 'GruntWork','I am the co-founder of Gruntwork, a company that helps startups get up and running  AWS with DevOps best practices and worldclass infrastructure. Our mission is to make it an order of magnitude easier to understand, develop, and deploy software.',
        'https://www.gruntwork.io',2005]);
    }
}
