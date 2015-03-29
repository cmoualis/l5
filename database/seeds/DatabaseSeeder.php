<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;

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
        Role::create([
            'title' => 'Adminstrateur',
            'slug' => 'admin'
        ]);
        Role::create([
            'title' => 'Membre',
            'slug' => 'membre'
        ]);
    }

}
