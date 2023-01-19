<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Ganga;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $users->each(function ($user) {
            Ganga::factory(1)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
