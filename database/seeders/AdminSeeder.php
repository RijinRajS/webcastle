<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create(
            ['name'=>'Admin','email'=>'admin@mail.com','password'=>bcrypt(value:'admin123'),'dob'=>'1997-08-05','qualification'=>'MCA','location'=>'kerala']
        );
    }
}
